<?php
class Auth extends User{
   
    static public function login($_email, $_password){
       global $db;
       $sql = " SELECT * FROM users where email = '$_email'";
       $result = $db->query($sql);
       $user =  $result->fetch_assoc();

       if(!$user){
         return ['error' =>'Email not found'];
       }else{
          $pass =  password_verify($_password , $user['password']);
          if($pass){
             return $user;
          }else{
             return ['error' => 'password Incorrect' ];
          }
       }


    //    $pass = $this->getPass();


    }
}

?>