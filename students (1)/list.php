<?php
 session_start();
 require_once 'functions.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<style>
    .btn{
        text-decoration: none;
        background-color: yellow;
        color: black;
        text-align: center;
        font-size: 20px;
    }

</style>
<body>

<?php
    

?>
<?php
$mess = get_flash_session('mess_flash');

if (!empty($mess)){
    ?>
    <div class = "alert"><?php echo $mess ;?></div>
    <?php

}
?>
<hr>
     <?php show(); ?>
     <br>
        <br/>
        <a href="add.php" class="btn" style="font-size:24px;margin-left:45%;background-color:aqua;color:red;font-weight:bold">Thêm sinh viên</a>
        <hr/>
</body>
</html>