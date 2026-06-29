<?php

class Project
{
    public $id;
    public $title;
    public $client_id;
    public $project_category_id;
    public $user_id;
    public $expected_starting_time;
    public $expected_ending_time;
    public $actual_starting_time;
    public $actual_ending_time;
    public $actual_cost;
    public $budget_cost;


    public function __construct(
        $_id,
        $_title,
        $_client_id,
        $_project_category_id,
        $_user_id,
        $_expected_starting_time,
        $_expected_ending_time,
        $_actual_starting_time,
        $_actual_ending_time,
        $_actual_cost,
        $_budget_cost,

    ) {
        $this->id = $_id;
        $this->title = $_title;
        $this->client_id = $_client_id;
        $this->project_category_id = $_project_category_id;
        $this->user_id = $_user_id;
        $this->expected_starting_time = $_expected_starting_time;
        $this->expected_ending_time = $_expected_ending_time;
        $this->actual_starting_time = $_actual_starting_time;
        $this->actual_ending_time = $_actual_ending_time;
        $this->actual_cost = $_actual_cost;
        $this->budget_cost = $_budget_cost;
    }

    public function create()
    {
        global $db;

        $sql = "INSERT INTO projects 
                (title, client_id, project_category_id, user_id, expected_starting_time, expected_ending_time, actual_starting_time, actual_ending_time, actual_cost, budget_cost)
                VALUES (
                    '$this->title', $this->client_id, $this->project_category_id, $this->user_id, '$this->expected_starting_time',  '$this->expected_ending_time', '$this->actual_starting_time', '$this->actual_ending_time', $this->actual_cost, $this->budget_cost 
                )";

        $db->query($sql);

        if ($db->error) {
            return $db->error;
        } else {
            return true;
        }
    }



    public function update()
    {
        global $db;

        $sql = "UPDATE projects SET 
                    title = '$this->title',
                    client_id = $this->client_id,
                    project_category_id = $this->project_category_id,
                    user_id = $this->user_id,
                    expected_starting_time = '$this->expected_starting_time',
                    expected_ending_time = '$this->expected_ending_time',
                    actual_starting_time = '$this->actual_starting_time',
                    actual_ending_time = '$this->actual_ending_time',
                    actual_cost = $this->actual_cost,
                    budget_cost = $this->budget_cost
                WHERE id = $this->id";

        if ($db->query($sql)) {
            return true;
        } else {
            return $db->error;
        }
    }

    public static function readAll()
    {
        global $db;
        //     $sql = "SELECT p.id, p.title, c.name AS client_name, pc.name AS category_name,        
        //    u.name AS user_name,  p.expected_starting_time, p.expected_ending_time,  p.actual_starting_time, p.actual_ending_time, p.actual_cost, p.budget_cost,
        //    COALESCE(phase_sum.total_allocated, 0) AS phase_budget,
        //    COALESCE(phase_sum.total_actual, 0) AS phase_actual,
        //    CASE 
        //        WHEN COALESCE(phase_sum.total_allocated, 0) = 0 THEN 0
        //        ELSE ROUND((COALESCE(phase_sum.total_actual, 0) / COALESCE(phase_sum.total_allocated, 0)) * 100, 1)
        //    END AS completion_percent
        //     FROM projects as p
        //     INNER JOIN clients as c ON p.client_id = c.id
        //     INNER JOIN users as u ON p.user_id = u.id
        //     INNER JOIN project_categories as pc ON p.project_category_id = pc.id
        //     LEFT JOIN (
        //         SELECT project_id, 
        //                SUM(allocated_cost) as total_allocated, 
        //                SUM(actual_cost) as total_actual
        //         FROM phase_costs_and_timing
        //         GROUP BY project_id
        //     ) as phase_sum ON p.id = phase_sum.project_id";


        $sql = "SELECT p.id, p.title, c.name AS client_name, pc.name AS category_name,        
       u.name AS user_name, p.expected_starting_time, p.expected_ending_time, p.actual_starting_time, p.actual_ending_time, p.actual_cost, p.budget_cost,
       COALESCE(phase_sum.total_allocated, 0) AS phase_budget,
       COALESCE(phase_sum.total_actual, 0) AS phase_actual,
       CASE 
           WHEN COALESCE(phase_sum.total_allocated, 0) = 0 THEN 0
           ELSE ROUND((COALESCE(phase_sum.total_actual, 0) / COALESCE(phase_sum.total_allocated, 0)) * 100, 1)
       END AS completion_percent
      FROM projects AS p, clients AS c, users AS u, project_categories AS pc,
      (
         SELECT project_id, 
                SUM(allocated_cost) AS total_allocated, 
                SUM(actual_cost) AS total_actual
         FROM phase_costs_and_timing
         GROUP BY project_id
     ) AS phase_sum
      WHERE p.client_id = c.id
      AND p.user_id = u.id
      AND p.project_category_id = pc.id
     AND p.id = phase_sum.project_id  ";



        $result = $db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }


     public static function readAllFilter($_category_id)
    {
        global $db;
        
        $sql = "SELECT p.id, p.title, c.name AS client_name, pc.name AS category_name,        
       u.name AS user_name, p.expected_starting_time, p.expected_ending_time, p.actual_starting_time, p.actual_ending_time, p.actual_cost, p.budget_cost,
       COALESCE(phase_sum.total_allocated, 0) AS phase_budget,
       COALESCE(phase_sum.total_actual, 0) AS phase_actual,
       CASE 
           WHEN COALESCE(phase_sum.total_allocated, 0) = 0 THEN 0
           ELSE ROUND((COALESCE(phase_sum.total_actual, 0) / COALESCE(phase_sum.total_allocated, 0)) * 100, 1)
       END AS completion_percent
      FROM projects AS p, clients AS c, users AS u, project_categories AS pc,
      (
         SELECT project_id, 
                SUM(allocated_cost) AS total_allocated, 
                SUM(actual_cost) AS total_actual
         FROM phase_costs_and_timing
         GROUP BY project_id
     ) AS phase_sum
      WHERE p.client_id = c.id
      AND p.user_id = u.id
      AND p.project_category_id = pc.id
      AND p.id = phase_sum.project_id  AND pc.id = {$_category_id} ";



        $result = $db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }


    public static function readById($_id)
    {
        global $db;
        $id = (int)$_id;
        $sql = "SELECT id, title, client_id, project_category_id, user_id, 
                       expected_starting_time, expected_ending_time, 
                       actual_starting_time, actual_ending_time, actual_cost, budget_cost
                FROM projects WHERE id = $id";
        $result = $db->query($sql);
        return $result->fetch_assoc();
    }

    public static function delete($_id)
    {
        global $db;
        $id = (int)$_id;
        $db->query("DELETE FROM projects WHERE id = $id");
        if ($db->error) {
            return $db->error;
        } else {
            return true;
        }
    }


    public static function updateStatus($_id, $_status)
    {
        global $db;
        $id = (int)$_id;
        $status = $db->real_escape_string($_status);
        $db->query("UPDATE projects SET status = '$status' WHERE id = $id");
        if ($db->error) {
            return $db->error;
        } else {
            return true;
        }
    }


    /**
     * Phase গুলোর allocated_cost এর SUM দিয়ে project এর budget_cost আপডেট করে।
     * যেকোনো phase cost save/update/delete হলে এই method কে call করতে হবে।
     */
    public static function syncBudgetFromPhases($_project_id)
    {
        global $db;
        $project_id = (int)$_project_id;

        $sql = "UPDATE projects 
                SET budget_cost = (
                    SELECT COALESCE(SUM(allocated_cost), 0)
                    FROM phase_costs_and_timing
                    WHERE project_id = $project_id
                )
                WHERE id = $project_id";

        $db->query($sql);
        if ($db->error) {
            return $db->error;
        }
        return true;
    }


    /**
     * Project এর completion percentage হিসাব করে।
     * Logic: SUM(actual_cost) / SUM(allocated_cost) * 100
     * যদি allocated_cost 0 হয়, তাহলে 0 return করে।
     */
    public static function getCompletionPercent($_project_id)
    {
        global $db;
        $project_id = (int)$_project_id;

        $sql = "SELECT 
                    COALESCE(SUM(allocated_cost), 0) as total_allocated,
                    COALESCE(SUM(actual_cost), 0) as total_actual
                FROM phase_costs_and_timing
                WHERE project_id = $project_id";

        $result = $db->query($sql)->fetch_assoc();

        if (!$result || $result['total_allocated'] == 0) {
            return 0;
        }

        $percent = ($result['total_actual'] / $result['total_allocated']) * 100;
        return min(round($percent, 1), 100); // 100% এর বেশি যাবে না
    }


    static public function getProjectDetails($id)
    {
        global $db;

        // Basic Info
        $sql1 = "SELECT proj.*, cl.name as client_name, cl.organization, cl.contact_no,
        pc.name as category_name, u.name as manager_name
        FROM projects as proj, clients as cl, project_categories as pc, users as u
        WHERE proj.client_id = cl.id
        AND proj.project_category_id = pc.id
        AND proj.user_id = u.id
        AND proj.id = $id";
        $info = $db->query($sql1)->fetch_assoc();

        // Phase-wise breakdown with completion %
        $sql2 = "SELECT ph.title as phase_title, pct.allocated_cost, pct.actual_cost,
        pct.expected_time, pct.actual_time,
        CASE 
            WHEN pct.allocated_cost = 0 THEN 0
            ELSE LEAST(ROUND((pct.actual_cost / pct.allocated_cost) * 100, 1), 100)
        END AS phase_percent
        FROM phase_costs_and_timing as pct, phases as ph
        WHERE pct.phase_id = ph.id AND pct.project_id = $id";
        $phases = $db->query($sql2)->fetch_all(MYSQLI_ASSOC);

        // Overall completion
        $completion = self::getCompletionPercent($id);

        // Team & Members
        $sql3 = "SELECT t.name as team_name, tm.name as member_name, tr.name as role_name
        FROM teams as t, project_teams as pt, team_members as tm, team_roles as tr
        WHERE t.id = pt.team_id
        AND pt.team_member_id = tm.id
        AND pt.team_role_id = tr.id
        AND t.project_id = $id";
        $team = $db->query($sql3)->fetch_all(MYSQLI_ASSOC);

        // Tasks
        $sql4 = "SELECT tk.title as task_title, ph.title as phase_title, t.name as team_name
        FROM tasks as tk, phases as ph, teams as t
        WHERE tk.phase_id = ph.id
        AND tk.assign_to_team_id = t.id
        AND tk.project_id = $id";
        $tasks = $db->query($sql4)->fetch_all(MYSQLI_ASSOC);

        return [
            'info'       => $info,
            'phases'     => $phases,
            'team'       => $team,
            'tasks'      => $tasks,
            'completion' => $completion,
        ];
    }
}
