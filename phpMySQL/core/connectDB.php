<?php 
    $host="localhost";
    $username = "root";
    $pass = '';
    $db_name = "fashion_mylishop";
    $con = new mysqli($host, $username, $pass, $db_name);
    if ($con -> connect_error) {
        die("Error:".$con->connect_error);
        exit();
    }
    $con->set_charset("utf8")
?>