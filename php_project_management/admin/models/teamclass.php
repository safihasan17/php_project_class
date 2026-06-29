<?php

class Teams
{
    public $id;
    public $name;
    public $project_id;


    public function __construct($_id, $_name, $_project_id)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->project_id = $_project_id;
    }


    public function create(){
        global $db;
        $sql = "INSERT INTO teams(name, project_id)
        values('$this->name', $this->project_id)";
        $db->query($sql);

        if($db->error){
            return $db->error;
        }else{
            return true;
        }
    }

    public function update(){
        global $db;
        $sql = "UPDATE teams SET name = '$this->name', project_id = $this->project_id WHERE id = $this->id";
        $db->query($sql);

        if($db->error){
            return $db->error;
        }else{
            return true;
        }
    }

    static public function readALL(){
        global $db;
        $sql = "SELECT t.id, t.name, p.title as project_title 
        FROM teams as t, projects as p 
        WHERE t.project_id = p.id";
        $result = $db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    static public function readById($_id){
        global $db;
        $sql = "SELECT id, name, project_id FROM teams WHERE id = $_id";
        $result = $db->query($sql);
        return $result->fetch_assoc();
    }

    static public function delete($_id){
        global $db;
        $db->query("DELETE FROM teams WHERE id = $_id");
        if($db->error){
            return $db->error;
        }else{
            return true;
        }
    }
}
?>