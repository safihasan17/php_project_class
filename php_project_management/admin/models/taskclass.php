<?php

class Tasks
{
    public $id;
    public $project_id;
    public $phase_id;
    public $title;
    public $assign_to_team_id;


    public function __construct($_id, $_project_id, $_phase_id, $_title, $_assign_to_team_id)
    {
        $this->id = $_id;
        $this->project_id = $_project_id;
        $this->phase_id = $_phase_id;
        $this->title = $_title;
        $this->assign_to_team_id = $_assign_to_team_id;
    }


    public function create(){
        global $db;
        $sql = "INSERT INTO tasks(project_id, phase_id, title, assign_to_team_id)
        values($this->project_id, $this->phase_id, '$this->title', $this->assign_to_team_id)";
        $db->query($sql);

        if($db->error){
            return $db->error;
        }else{
            return true;
        }
    }

    public function update(){
        global $db;
        $sql = "UPDATE tasks SET project_id = $this->project_id, phase_id = $this->phase_id, title = '$this->title', assign_to_team_id = $this->assign_to_team_id WHERE id = $this->id";
        $db->query($sql);

        if($db->error){
            return $db->error;
        }else{
            return true;
        }
    }

    static public function readALL(){
        global $db;
        $sql = "SELECT tk.id, p.title as project_title, ph.title as phase_title ,tk.title , t.name as team_name
        FROM tasks as tk, projects as p, phases as ph, teams as t
        WHERE tk.project_id = p.id
        AND tk.phase_id = ph.id
        AND tk.assign_to_team_id = t.id";
        $result = $db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    static public function readById($_id){
        global $db;
        $sql = "SELECT id, project_id, phase_id, title, assign_to_team_id FROM tasks WHERE id = $_id";
        $result = $db->query($sql);
        return $result->fetch_assoc();
    }

    static public function delete($_id){
        global $db;
        $db->query("DELETE FROM tasks WHERE id = $_id");
        if($db->error){
            return $db->error;
        }else{
            return true;
        }
    }
}
?>