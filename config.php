<?php 
session_start();
    $host = "fdb30.awardspace.net";  
    $user = "3724351_cse382";  
    $password = "foysal03";  
    $db_name = "3724351_cse382";  
      
    $db = mysqli_connect($host, $user, $password, $db_name);  
    if(!$db)
{
    die("connection failed".mysqli_connect());


}

//echo 'connected succesfully';

?>  