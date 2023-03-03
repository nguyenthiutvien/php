<!DOCTYPE html>
<?php session_start()?>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Hiển thị trái cây</title>
</head>
<body>
 
<a href="form.php">nhậpthem</a>


<?php
if (isset($_SESSION["product"])){
    $n=count($_SESSION["product"]);
    for($i=0;$i<$n;$i++){
 ?>
<div id="container">

<?php 

foreach ($products as $key => $value) { ?>
    <div style="background-color: #e67e22"class="title"> 
        <?php echo $key ?>
    </div>
    <div class="card-group">
            <?php 
            foreach ( $value as $k => $v ) {
                ?>
                <div class="card" id="card-item">
                <div id="fashion_img" class="card-img-top"><img src="<?php echo $v['img'] ?>"> </div>
                <div class="card-body">
                    <div id="name" class="card-title"><?php echo $v['name'] ?> </div>
                    <div id="code" style="text-align:center; class="card-title"><?php echo $v['code'] ?> </div>
                    <div id="price" style="text-align:center;color: red;"><?php echo $v['price'] ?> 
                    <span id="old_price" style="text-align:center;color: gray;"><strike><?php echo $v['old_price'] ?></strike></span>
                    </div>
                    <br><br>
                    <div id="button" style="text-align: center;" onclick ="return confirm('Thank you for order')"><button  style="text-align: center; background-color:orange; color:white" id="buy">Đặt mua</button></div>
                </div>
                </div>
        <?php }
            ?>
        
    </div>
<?php } 
?>
</div>
<?php } 
?>
<?php } 
?>
</body>
</html>

