<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/function.css">
<title>Ví dụ 2</title>
<style>
    form{
        background-color: #fd79a8;
        width: 300px;
        text-align:center;
        margin-left:auto ;
        margin-right: auto;
    }
    .submit :hover{
        background-color:#81ecec;

    }
    
</style>
</head>
<body>
    <?php
    $kq = display_name($_POST["name"]);
    function display_name ($name) {
        echo "Hello " .$name;
    }
    function add_numbers(){
        echo 1+2
    }
    function kilometter_to_miles($k){
        $miles= 0.62;
        return $$miles*$k ;

    }
    ?>

    <form method="post" action="">
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name" value="<?php echo $_POST["name"]?>">
                </td>
            </tr>
           
            <tr>
                <td>Result</td>
                <td><input type="text" name="mile" value="<?php echo $kq ?>"></td>
            </tr>
           
            <tr>
                <td></td>
                <td><input type="submit" name="submit" class="submit" value="In"></td>
            </tr>
        </table>
    </form>

</body>
</html>