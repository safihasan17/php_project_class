<?php

class Phases
{
    public $id;
    public $project_category_id;
    public $title;


    public function __construct($_id, $_project_category_id, $_title)
    {
        $this->id = $_id;
        $this->project_category_id = $_project_category_id;
        $this->title = $_title;
    }


    public function create(){
        global $db;
        $sql = "INSERT INTO phases(project_category_id, title)
        values($this->project_category_id, '$this->title')";
        $db->query($sql);

        if($db->error){
            return $db->error;
        }else{
            return true;
        }
    }

    public function update(){
        global $db;
        $sql = "UPDATE phases SET project_category_id = $this->project_category_id, title = '$this->title' WHERE id = $this->id";
        $db->query($sql);

        if($db->error){
            return $db->error;
        }else{
            return true;
        }
    }

    static public function readALL($_pg = 1, $_limit= 2){
        global $db;
        $skip = ($_pg -1)*$_limit;
        $sql = "SELECT p.id, pc.name as project_category, p.title 
        FROM phases as p , project_categories as pc 
        where p.project_category_id = pc.id  ORDER BY id DESC limit $_limit OFFSET $skip";
        $result = $db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    static public function readById($_id){
        global $db;
        $sql = "SELECT id, project_category_id, title FROM phases WHERE id = $_id";
        $result = $db->query($sql);
        return $result->fetch_assoc();
    }

    static public function delete($_id){
        global $db;
        $db->query("DELETE FROM phases WHERE id = $_id");
        if($db->error){
            return $db->error;
        }else{
            return true;
        }
    }


    static public function getpageNo($_no_of_rows){
      global $db;
      $sql = "select count(id) as total from phases";
      $result = $db->query($sql);
      $row = $result->fetch_assoc();
      // return $row;

      return ceil($row['total']/$_no_of_rows);
    }



   
}
?>