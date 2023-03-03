<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate 
    $errors = array();
    if (!empty($_POST['student_id'])) {
        $student_id=$_POST['student_id'];

    }else {
        $errors[]='ma_err';
    }

    if (!empty($_POST['student_name'])) {
        $student_name=$_POST['student_name'];

    }else {
        $errors[]='name_err';
    }
    if (!empty($_POST['student_gender'])) {
        $student_gender=$_POST['student_gender'];

    }else {
        $errors[]='gender_err';
    }
    if (!empty($_POST['student_hometown'])) {
        $student_hometown=$_POST['student_hometown'];

    }else {
        $errors[]='hometown_err';
    }

    if (!empty($_POST['student_birthday'])) {

        $student_birthday=$_POST['student_birthday'];

    }else {
        $errors[]='birthday_err';
    }
    if (!empty($_POST['student_major'])) {
        $student_major=$_POST['student_major'];

    }else {
        $errors[]='major_err';
    }

    if (!empty($errors)){
        // co loi
        $mess = "Đã xảy ra lỗi. Vui lòng kiểm tra.";
        ?>
        <div class="alert">
            <?php echo $mess;?>
         </div>
         <?php
    }else{
        // khong co loi
        $new_student=
        array( 
            'id'=>$student_id,
            'name'=>$student_name,
            'gender'=>$student_gender,
            'hometown'=>$student_hometown,
            'birth'=>$student_birthday,
            'major'=>$student_major)
        ;
        if (!empty($_SESSION['students'])){
            $check= false;
            foreach ($_SESSION['students'] as $key => $item) {
                if($student_id ==$key){
                    $check=true;
                    break;
                }    
            }
        }else{
            $check= false;
        }

        if($check == false){
            $_SESSION['students'][]= $new_student;
            print_r($_SESSION['students']);

}
}
}
?>
<form action="" method="post">
    <div class="form-group">
        <label for="">Mã sinh viên</label>
        <input type="text" class="form-item" name="student_id" placeholder="Nhập mã sinh viên ">
        <?php if (!empty($errors) && in_array('ma_err',$errors)): ?>
        <span class="error">Mã sinh viên không được để trống.</span>
        <?php endif;?>
    </div>
    <div class="form-group">
        <label for="">Họ và tên</label>
        <input type="text" class="form-item" name="student_name" placeholder="Nhập họ và tên sinh viên">
        <?php if (!empty($errors) && in_array('name_err',$errors)): ?>
        <span class="error">Tên sinh viên không được để trống.</span>
        <?php endif;?>
    </div>
    <div class="form-group">
        <label for="">Giới tính</label>
        <input type="radio" class="form-item" name="student_gender" value="Nam">Nam
        <input type="radio" class="form-item" name="student_gender" value="Nữ" >Nu
        <?php if (!empty($errors) && in_array('gender_err',$errors)): ?>
        <span class="error">Giới sinh viên không được để trống.</span>
        <?php endif;?>
    </div>
    <div class="form-group">
        <label for="">Quê quán</label>
        <input type="text" class="form-item" name="student_hometown" placeholder="Nhập quê quán">
        <?php if (!empty($errors) && in_array('hometown_err',$errors)): ?>
        <span class="error">Quê quán sinh viên không được để trống.</span>
        <?php endif;?>
    </div>
    <div class="form-group">
        <label for="">Ngày sinh</label>
        <input type="date" class="form-item" name="student_birthday">
        <?php if (!empty($errors) && in_array('birthday_err',$errors)): ?>
        <span class="error">Ngày sinh viên không được để trống.</span>
        <?php endif;?>
    </div>
    <div class="form-group">
        <label for="">Ngành học</label>
        <input type="text" class="form-item" name="student_major" placeholder="Nhập ngành học">
        <?php if (!empty($errors) && in_array('birthday_err',$errors)): ?>
        <span class="error">Ngày sinh viên không được để trống.</span>
        <?php endif;?>
    </div>

    <input type="submit" value="Add">
</body>
</html>