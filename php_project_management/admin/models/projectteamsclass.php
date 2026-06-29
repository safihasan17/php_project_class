<?php

class ProjectTeam
{
    public $id;
    public $team_id;
    public $team_role_id;
    public $team_member_id;


    public function __construct($_id, $_team_id, $_team_role_id, $_team_member_id)
    {
        $this->id = $_id;
        $this->team_id = $_team_id;
        $this->team_role_id = $_team_role_id;
        $this->team_member_id = $_team_member_id;
    }


    public function create(){
        global $db;
        $sql = "INSERT INTO project_teams(team_id, team_role_id, team_member_id)
        values($this->team_id, $this->team_role_id, $this->team_member_id)";
        $db->query($sql);

        if($db->error){
            return $db->error;
        }else{
            return true;
        }
    }

    public function update(){
        global $db;
        $sql = "UPDATE project_teams SET team_id = $this->team_id, team_role_id = $this->team_role_id, team_member_id = $this->team_member_id WHERE id = $this->id";
        $db->query($sql);

        if($db->error){
            return $db->error;
        }else{
            return true;
        }
    }

    static public function readALL(){
        global $db;
        $sql = "SELECT pt.id, t.name as team_name, tr.name as role_name, tm.name as member_name
        FROM project_teams as pt, teams as t, team_roles as tr, team_members as tm
        WHERE pt.team_id = t.id 
        AND pt.team_role_id = tr.id 
        AND pt.team_member_id = tm.id";
        $result = $db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    static public function readById($_id){
        global $db;
        $sql = "SELECT id, team_id, team_role_id, team_member_id FROM project_teams WHERE id = $_id";
        $result = $db->query($sql);
        return $result->fetch_assoc();
    }

    static public function delete($_id){
        global $db;
        $db->query("DELETE FROM project_teams WHERE id = $_id");
        if($db->error){
            return $db->error;
        }else{
            return true;
        }
    }
}
?>