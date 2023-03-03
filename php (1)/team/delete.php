<?php
session_start();

require_once 'functions.php';
echo print_r($_SESSION['student']);

if(isset($_GET['student_id'])){
    $student_id = $_GET['student_id'];
    if (array_key_exists($student_id, $_SESSION['student'])){
        echo $student_id;
        $student_name =$_SESSION['student'][$student_id]['name'];



        unset($_SESSION['student'][$student_id]);

        set_flash_session('mess_flass', 'Xóa sản phẩm' .$student_name. 'thành công');

    }else{
        redirect('list.php');
    }

}else{
    redirect('list.php');
    
}
?>