<?php

class Clint
{
    public $id;
    public $name;
    public $organization;
    public $email;
    public $contact_no;


    public function __construct($_id, $_name, $_organization, $_email, $_contact_no  )
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->organization = $_organization;
        $this->email = $_email;
        $this->contact_no = $_contact_no;
        
    }


    // public function create(){
    //     // global $db;
    //     // $sql= "INSERT INTO users(name, email, role_id, password)
    //     // values('$this->name', '$this->email', $this->role_id, '$this->password')";
    //     // $db->query($sql);

    //     // // $result = $db->query($sql);

    //     // // if($result){
    //     // //     return $db->insert_id;
    //     // // }else{

    //     // // }

    //     // if($db->error){
    //     //     return $db->error;
    //     // }else{
    //     //     return true;
    //     // }

     
    // }

    // public function update(){
        
    // }
    static public function readALL(){
       global $db;
       $sql= 'SELECT id,name, organization, email, contact_no  from  clients  order by name';
       $result = $db->query($sql);
       return $result->fetch_all(MYSQLI_ASSOC);

        
    }
    // public function readById(){
        
    // }

    // static public function delete($_id){
    //     global $db;
    //     $db->query("DELETE FROM users WHERE id = $_id");
    //     if($db->error){
    //         return $db->error;
    //     }else{
    //         return true;
    //     }
    // }
}
?>