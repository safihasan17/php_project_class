<?php

class PhaseCostsandTiming
{
    public $id;
    public $phase_id;
    public $project_id;
    public $allocated_cost;
    public $actual_cost;
    public $actual_time;
    public $expected_time;


    public function __construct($_id, $_phase_id, $_project_id, $_allocated_cost, $_actual_cost, $_actual_time, $_expected_time)
    {
        $this->id = $_id;
        $this->phase_id = $_phase_id;
        $this->project_id = $_project_id;
        $this->allocated_cost = $_allocated_cost;
        $this->actual_cost = $_actual_cost;
        $this->actual_time = $_actual_time;
        $this->expected_time = $_expected_time;
    }


    public function create()
    {
        global $db;
        $sql = "INSERT INTO phase_costs_and_timing(phase_id, project_id, allocated_cost, actual_cost, actual_time, expected_time)
        values($this->phase_id, $this->project_id, $this->allocated_cost, $this->actual_cost, '$this->actual_time', '$this->expected_time')";
        $db->query($sql);

        if ($db->error) {
            return $db->error;
        }

        // ✅ Phase cost save হলে project এর budget_cost auto-sync করো
        require_once 'models/projectclass.php';
        Project::syncBudgetFromPhases($this->project_id);

        return true;
    }

     public function update()
    {
        global $db;
        $sql = "UPDATE phase_costs_and_timing SET 
                phase_id = $this->phase_id, 
                project_id = $this->project_id, 
                allocated_cost = $this->allocated_cost, 
                actual_cost = $this->actual_cost, 
                actual_time = '$this->actual_time', 
                expected_time = '$this->expected_time' 
                WHERE id = $this->id";
        $db->query($sql);

        if ($db->error) {
            return $db->error;
        }

        // ✅ Phase cost update হলে project এর budget_cost auto-sync করো
        require_once 'models/projectclass.php';
        Project::syncBudgetFromPhases($this->project_id);

        return true;
    }

    static public function readALL()
    {
        global $db;
        $sql = "SELECT pct.id, p.title as project_title, ph.title as phase_title, 
                pct.allocated_cost, pct.actual_cost, pct.actual_time, pct.expected_time,
                CASE 
                    WHEN pct.allocated_cost = 0 THEN 0
                    ELSE LEAST(ROUND((pct.actual_cost / pct.allocated_cost) * 100, 1), 100)
                END AS phase_percent
        FROM phase_costs_and_timing as pct, projects as p, phases as ph
        WHERE pct.project_id = p.id
        AND pct.phase_id = ph.id
        ORDER BY p.title, ph.title";
        $result = $db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    static public function readById($_id)
    {
        global $db;
        $id = (int)$_id;
        $sql = "SELECT id, phase_id, project_id, allocated_cost, actual_cost, actual_time, expected_time 
                FROM phase_costs_and_timing WHERE id = $id";
        $result = $db->query($sql);
        return $result->fetch_assoc();
    }

    static public function delete($_id)
    {
        global $db;
        $id = (int)$_id;

        // Delete এর আগে project_id নিয়ে রাখো sync এর জন্য
        $row = self::readById($id);
        $project_id = $row ? $row['project_id'] : null;

        $db->query("DELETE FROM phase_costs_and_timing WHERE id = $id");

        if ($db->error) {
            return $db->error;
        }

        // ✅ Phase delete হলে project এর budget_cost auto-sync করো
        if ($project_id) {
            require_once 'models/projectclass.php';
            Project::syncBudgetFromPhases($project_id);
        }

        return true;
    }
}
?>