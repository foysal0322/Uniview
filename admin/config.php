<?php

session_start();
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "uniview";  
    global $db;
    $db = mysqli_connect($host, $user, $password, $db_name);
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }
define ('ROOT_PATH', realpath(dirname(__FILE__)));
define('BASE_URL', 'http://localhost/uniview/');
?>  