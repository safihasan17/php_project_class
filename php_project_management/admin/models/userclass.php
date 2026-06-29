<?php

class User
{
    public $id;
    public $name;
    public $email;
    public $role_id;
    private $password;

    public function __construct($_id, $_name, $_email, $_role_id, $_password= null)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->email = $_email;
        $this->role_id = $_role_id;
        $this->password = $_password;
    }


    public function create(){
        global $db;
        $sql= "INSERT INTO users(name, email, role_id, password)
        values('$this->name', '$this->email', $this->role_id, '$this->password')";
        $db->query($sql);

        // $result = $db->query($sql);

        // if($result){
        //     return $db->insert_id;
        // }else{

        // }

        if($db->error){
            return $db->error;
        }else{
            return true;
        }

     
    }

    public function update (){
      global $db;
      $sql = "Update users set name = '$this->name', email = '$this->email', role_id = $this->role_id where id = $this->id";
      $db->query($sql);

    }
    static public function readALL(){
       global $db;
       $sql= 'SELECT id,name, email from users order by id desc';
       $result = $db->query($sql);
       return $result->fetch_all(MYSQLI_ASSOC);

        
    }
    static public function readById($_id){
    global $db;
       $sql= "SELECT id,name, email, role_id from users where id = $_id";
       $result = $db->query($sql);
       return $result->fetch_assoc();
    }

    static public function delete($_id){
        global $db;
        $db->query("DELETE FROM users WHERE id = $_id");
        if($db->error){
            return $db->error;
        }else{
            return true;
        }
    }
}
?>