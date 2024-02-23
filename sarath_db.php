<?php
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="sarath_db";

    $connection_variable= new mysqli("$server_name","$username","$password","$database_name");
    if($connection_variable->connect_error){
        echo"connection error";
    }
    else{
        
    }

?>