<?php 
require ("students.php");

$data = array(); 

if (!empty($_GET['student_id']))
{     
    $data = getStudent($_GET['student_id']);
}

?>

<html></html>