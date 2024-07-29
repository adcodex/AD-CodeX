<?php
    $servename = "localhost";
    $username = "root";
    $password = "";
    $db_name = "login";
    $conn = new mysqli($servename, $username, $password, $db_name,);
    if($conn->connect_error){
        die("Connection failed".$conn->connection_error);
    }
    echo " ";

?>