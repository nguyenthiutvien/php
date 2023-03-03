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
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td> Nhập mã sản phẩm:</td>
            <td><input type="text" name="code"></td>
        </tr>
        <tr>
            <td> Nhập giá sản phẩm:</td>
            <td><input type="text" name="price"></td>
        </tr>
        <tr>
            <td> Nhập giá cũ nếu có:</td>
            <td><input type="text" name="old_price"></td>
        </tr>
        </tr>


        <tr>
            <td> :</td>
            <td><input type="text" name="img" ></td>
        </tr>
    </table>
    <input type="submit"name="btn-sub"value="Lưu">

</form>
<body>
    <?php
    if(isset($_POST["btn-sub"])){
        $n=0;
        if(isset($_SESSION["product"]))
            $n=count($_SESSION["product"]);{
            $_SESSION["product"][$n]["name"]=$_POST["name"];
            $_SESSION["product"][$n]["code"]=$_POST["code"];
            $_SESSION["product"][$n]["price"]=$_POST["price"];
            $_SESSION["product"][$n]["old_price"]=$_POST["old_price"];
            $_SESSION["product"][$n]["img"]=$_POST["img"];
            }

            header ("location: http://localhost/midterm/index2.php ");
        
    }
    ?>
    
</body>
</html>