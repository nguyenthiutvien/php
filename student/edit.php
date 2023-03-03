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
    session_start();

    if (isset($_SESSION['username'])) {

    if (!empty($_SESSION['students'])) {
        if (!empty($_SESSION['students'][$_GET['student_id']])) {
            $id= $GET['student_id'];
            foreach($_SESSION['students'][$id] as $value) {
                
        }
        echo ":huong";
    }
    }
    ?>
</body>
</html>