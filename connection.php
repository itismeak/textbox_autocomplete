<?php
    $server_name="localhost";
    $user_name="root";
    $psw="";
    $db_name="us_countries";
    $conn=new mysqli($server_name,$user_name,$psw,$db_name);

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    
?>