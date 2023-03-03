
<?php
session_start();

require_once 'functions.php';

if(isset($_GET['id'])){
    $student_id = $_GET['id'];
    if (array_key_exists($student_id, $_SESSION['student'])){
        echo "<div style='color:red'>Xoá thành công </div>";
      
        unset($_SESSION['student'][$student_id]);
        set_flash_session('mess_flass', 'Xóa thành công');
        
    }else{
        redirect('list.php');
    }

}else{
    redirect('list.php');
    
}
?>