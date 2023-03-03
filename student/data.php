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
$_SESSION['students'] = array(
    array(
            'id' => 1,
            'name' => 'Jack',
            'gender' => 'Male',
            'birth' => '1988-06-22',
            'hometown' => 'Bangalore',
            'major' => 'IT'
        ),
     array(
            'id' => 2,
            'name' => 'Jack',
            'gender' => 'Male',
            'birth' => '1988-06-22',
            'hometown' => 'Bangalore',
            'major' => 'IT'
    ),
    array(
            'id' => 3,
            'name' => 'Jack',
            'gender' => 'Male',
            'birth' => '1988-06-22',
            'hometown' => 'Bangalore',
            'major' => 'IT'
    ),
    array(
            'id' => 4,
            'name' => 'Jack',
            'gender' => 'Male',
            'birth' => '1988-06-22',
            'hometown' => 'Bangalore',
            'major' => 'IT'
    ),
);

print_r($_SESSION['students']);

?>


</body>
</html>