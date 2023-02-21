<?php
session_start();

require_once 'functions.php';


if(!empty($_GET['id'])){
     $student_id = $_GET['id'];
         unset($_SESSION['student'][$student_id]);

      
}else{
     redirect('list.php');
     
}
?>
