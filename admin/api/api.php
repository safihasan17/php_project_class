<?php
require_once "../config/db.php";

foreach(glob("../models/*.class.php") as $filename){
    require_once $filename;
}


foreach(glob("*-api.php") as $filename){
    require_once $filename;
}



// echo "<h1>api</h1>";

if(isset($_GET["endpoint"])){
    $method =  $_GET["endpoint"];

    if($method == "get-products"){
        // echo "product List";
        // echo "api data";
        getProduct($_GET['id']);
        // echo $_GET['id'];
        
    }
}
?>