<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<title>Title</title>
<style>
    .form {
        width: 30%;
        margin: auto;
        padding: auto;
    }
    table {
        margin-left: 100px;
        width:400px;
        background-color: #c7ecee;
    }
    table tr,td {
        padding: 10px;
    }
    .center {
        background-color: #c7ecee;
        font-weight: bold;
        font-size: 20px;
        text-align: center;
    }

    .center button {
        background-color: #c7ecee;
        font-weight: bold;
        font-size: 20px;
    }
    table .center {
        margin: auto;
        mar
    }
    .show{
        
    }
</style>
</head>
<body>
    <?php 
        session_start();
        $flag=0;
        if (!empty($_POST['name']) && !empty ($_POST['mail']) && !empty($_POST['username']) && !empty($_POST['pass'])){
            $_SESSION['fullname']=$_POST['name'];
            $_SESSION['email']=$_POST['mail'];
            $_SESSION['username']=$_POST['username'];
            $_SESSION['password']=$_POST['pass'];

            $flag=1;
        }
    ?>

    <form action="" method="post" class="form">
        <table>
            <tr class="center">
                <td colspan="2">
                    Thông tin đăng nhập
                </td>
            </tr>

            <tr class="">
                <td>
                    Họ và tên: 
                </td>
                <td>
                    <input type="text" name="name" id="name" value="<?php if(isset($_POST['name']))  echo $_POST['name']; ?>">
                </td>
            </tr>

            <tr>
                <td>
                    Email: 
                </td>
                <td>
                    <input type="text" name="mail" id="mail" value="<?php if(isset($_POST['mail']))  echo $_POST['mail']; ?>">
                </td>
            </tr>

            <tr>
                <td>
                    Ten dang nhap: 
                </td>
                <td>
                    <input type="text" name="username" id="tenDangNhap" value="<?php if(isset($_POST['username']))  echo $_POST['username']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Mat khau: 
                </td>
                <td>
                    <input type="text" name="pass" id="pass" value="<?php if(isset($_POST['pass']))  echo $_POST['pass']; ?>">
                </td>
            </tr>

            

            <tr class="center">
                <td colspan="2">
                    <button type="submit">Xác nhận</button>
                </td>
            </tr>
        </table>
    </form>

        
    <div>
        <?php 
            if ($flag==1) {
                echo "<table class='show'><tr class='center'><td>";
                echo "Xin chao" .$_SESSION['fullname'] .'<br>';
                echo "Email:".$_SESSION['email'] .'<br>';
                echo "Ten dang nhap:" .$_SESSION['username'] .'<br>';
                echo "Mat khau:" .$_SESSION['password'] .'<br>';
                echo "<a href='doc_session.php' >Click here! </a>";
                echo "</td></tr></table>";
            }
        ?>
    </div>

</body>
</html>