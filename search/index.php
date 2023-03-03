<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Tim kiem : <input type="text" name="timkiem" />
        <input type="button" value="ok">
        <h1 value="echo $kq" > </h1>
        <?php
        $students = array("Thi, Lan, Tina", "Lisa", "Maria", "Khan", "Karan");
        $timkiem= $_POST['timkiem'];
        if (in_array($timkiem, $students)){
            $kq="Thay ban roi";
        }else{
            $kq='ban dau roi';
        }
    ?>

    </form>
</body>
</html>