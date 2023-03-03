<!DOCTYPE html>
<?php session_start()?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nhap </title>
</head>
<form action=""method="POST">
    <table>
        <tr>
            <td> Nhập tên sản phẩm:</td>
            <td><input type="text" name="ten"></td>
        </tr>
        <tr>
            <td> Giá sản phẩm:</td>
            <td><input type="number" name="gia"></td>
        </tr>
        <tr>
            <td> Mô tả:</td>
            <td><input type="text" name="mota"></td>
        </tr>
        <tr>
            <td> Hình ảnh:</td>
            <td><input type="text" name="hinhanh" ></td>
        </tr>
    </table>
    <input type="submit"name="btn-sub"value="Lưu">

</form>
<body>
    <?php
    if(isset($_POST["btn-sub"])){
        $n=0;
        if(isset($_SESSION["traicay"]))
            $n=count($_SESSION["traicay"]);{
            $_SESSION["traicay"][$n]["ten"]=$_POST["ten"];
            $_SESSION["traicay"][$n]["gia"]=$_POST["gia"];
            $_SESSION["traicay"][$n]["mota"]=$_POST["mota"];
            $_SESSION["traicay"][$n]["hinhanh"]=$_POST["hinhanh"];
            }

            header ("location: http://localhost/ltweb_php/Btphpfinal%20(1)/traicay.php");
        
    }
    ?>
    
</body>
</html>