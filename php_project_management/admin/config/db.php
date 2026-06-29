<?php
//localhost
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'my_project');


//hosting

// define('DB_HOST', 'https://ecom.com');
// define('DB_USER', 'safi');
// define('DB_PASS', '12345');
// define('DB_NAME', 'ecom');

$db = new mysqli(DB_HOST,DB_USER, DB_PASS , DB_NAME);
if($db ->connect_error){
    die("connection failed" . $db ->connect_error);
}
// else{
//     echo 'connection Successfully';
// }

?>