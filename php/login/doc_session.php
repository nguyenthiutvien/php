
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    p{
        text-align: center;
        color: red;
        font-size: 30px;

    }
</style>
<body>
    <p>Kết quả khi nhấn <span>Click here!</span> của trang session</p>
    <div>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVMv16phT7TOKHVzUlO7XNmy0ARzlPzDeTmQ&usqp=CAU" alt="">
    </div>
    <?php
        echo '<div class="xinchao">Xin chào '.$_COOKIE["khach_hang"]. '</div>';
        echo '<a href="index.php"> Click de quay lai trang dang nhap </a>';
    

    ?>
</body>
</html>