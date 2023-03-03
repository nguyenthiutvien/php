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
 
    $file_name = 'C:\xampp\htdocs\ltweb_php\file';
    if (file_exists($file_name)) {
        echo "The file $file_name exists";
    }else {
        echo "The file $file_name does 
                               not exists";
    }
    ?>

    
</body>
</html>