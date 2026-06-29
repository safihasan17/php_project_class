<?php

ini_set('display_errors', 0);
header('Content-Type: application/json');

require_once "../config/db.php";

foreach (glob("../models/*class.php") as $filename) {
    require_once $filename;
}


foreach (glob("*.api.php") as $filename) {
    require_once $filename;
}





// echo "<h1>api</h1>";

if (isset($_GET["endpoint"])) {
    $method =  $_GET["endpoint"];

    if ($method == "get-projects") {
        // echo "project List";
        // echo "api data";
        getProject($_GET['id']);
        // echo $_GET['id'];

    }
}
