<!DOCTYPE html>
<html>
<head>
    <style>
        h1{
            text-align: center;
            font-weight: bold;
            color: red;
            font-size: 30px
        }
    </style>
</head>
<body>
   
<?php
 echo "<h1>HAPPY NEW YEAR 2023  <br></h1>";
 echo "bạn đi đâu nào? =>   " ;

$mung = 1;
$mung1=1;
$mung2=2;
$mung3=3;
$mung4=4;
$mung5=5;
$mung6=6;
 if ($mung == $mung1){
    echo"Đi thăm cha";
 }else if ($mung ==$mung2){
    echo"Đi thăm mẹ";
 }
 else if ( $mung==$mung3){
    echo "Đi thăm thầy";
 } else if($mung==$mung4){
    echo "Đi thăm người yêu";
 }else if($mung==$mung5){
    echo "Đi học";
 }else{
    echo "Ở nhà!";
 };
 ?>
</body>
</html>