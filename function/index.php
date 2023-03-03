<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Ví dụ 3</title>
</head>
<body>
    <form method="post" action="">
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name" value="<?php echo $_POST["name"] ?>">
                </td>
            </tr>
            <tr>
                <td> <br> </td>
                <td> <br></td>
            </tr>
            <tr>
                <td>Kết quả</td>
                <td><input type="text" name="mile" value="<?php echo display_name($_POST["name"]) ?>"></td>
            </tr>
            <tr>
                <td><br> </td>
                <td><br> </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="In"></td>
            </tr>
        </table>
    </form>
<?php
function display_name ($name) {
    echo "Hello " .$name;
}


?>

</body>
</html>