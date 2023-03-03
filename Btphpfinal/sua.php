<!DOCTYPE html>
<?php session_start()?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sua</title>
</head>
<?php $id=$_GET["id"] ?>
<form action=""method="POST">
    <table>
        <tr>
            <td> Nhập tên sản phẩm:</td>
            <td><input type="text" name="ten" value="<?php echo $_SESSION["traicay"][$id]["ten"]?>"></td>
        </tr>
        <tr>
            <td> Giá sản phẩm:</td>
            <td><input type="number" name="gia" value="<?php echo $_SESSION["traicay"][$id]["gia"]?>"></td>
        </tr>
        <tr>
            <td> Mô tả:</td>
            <td><input type="text" name="mota" value="<?php echo $_SESSION["traicay"][$id]["mota"]?>"></td>
        </tr>
        <tr>
            <td> Hình ảnh:</td>
            <td><input type="text" name="hinhanh" value="<?php echo $_SESSION["traicay"][$id]["hinhanh"]?>"></td>
        </tr>
    </table>
    <input type="submit"name="btn-sub"value="Lưu">

</form>
<body>
    <?php
    if(isset($_POST["btn-sub"])){
        if(isset($_SESSION["traicay"]))
            $n=count($_SESSION["traicay"]);{
            $_SESSION["traicay"][$id]["ten"]=$_POST["ten"];
            $_SESSION["traicay"][$id]["gia"]=$_POST["gia"];
            $_SESSION["traicay"][$id]["mota"]=$_POST["mota"];
            $_SESSION["traicay"][$id]["hinhanh"]=$_POST["hinhanh"];
            }
            header ("location: http://localhost/Btphpfinal/traicay.php ");
        
    }
    ?>
    
</body>
</html>