<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
</style>
<body>
    <?php
        session_start();
        $flag = 0;
        if (!empty($_POST["name"]) &&  !empty($_POST["mail"]) && !empty($_POST["add"])){
            $inform = $_POST["name"];
            // . "-". $_POST["mail"]. "-". $_POST["add"];
            
            setcookie("khach_hang",$inform, time()+3600);
            $flag = 1;



        }

    ?>
    <form action="" method ="post">
        <table>
            <tr class="center">
                <td colspan = "2">
                    THÔNG TIN ĐĂNG NHẬP
                </td>
            </tr>
            <tr>
                <td>
                    Họ và tên
                </td>
                <td>
                    <input name="name" type="text" id="name" value="<?php if(isset($_POST['name'])) echo $_POST["name"]; ?>">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td> <input name="mail" type="text"  value="<?php if(isset($_POST['mail'])) echo $_POST["mail"]; ?>"></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td>
                <input name="add" type="text"  value="<?php if(isset($_POST['add'])) echo $_POST["add"]; ?>"></td>
                </td>
            </tr>
            <tr class="center">
                <td colspan="2">
                    <button type="submit">Xác nhận</button>
                <td>

            </tr>
        </table>
    </form>
    <font color="#1E50C4">
        <?php
            if ($flag ==1){
                    echo "<table><tr class='center'><td>";
                    echo "<font color='#ffffff'>Thông tin khách hàng";
                    echo $_COOKIE['khach_hang']. "<br>";
                    echo "<a href='doc_session.php'>Click here</a>";
                    echo "</td></tr></table>";



            }
        ?>
        </font>

</body>
</html>