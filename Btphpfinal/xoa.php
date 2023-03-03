<!DOCTYPE html>
<?php session_start()?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xoa</title>
</head>
<body>
    <?php
    $id=$_GET["id"];
    array_splice($_SESSION['traicay'],$id,1);
    header ("location: http://localhost/Btphpfinal/traicay.php ");
    ?>
    
</body>
</html>