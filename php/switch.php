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
$mung = 1;

switch ($mung) {
  case 1:
    echo "You should visit father!";
    break;
  case 2:
    echo "You should visit mama!";
    break;
  case 3:
    echo "You should visit teacher!";
    break;
case 4:
    echo "you should visit honey!";
    break;
case 5: 
    echo "you should sleep";
    break;
case 6:
    echo "Let's study!";
    break;
default:
    echo "Stay at home!";
    break;
}
?>
</body>
</html>