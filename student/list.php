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
    session_start(); ?>

    <table border ="1" cellpadding="0" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Họ và tên</th>
                <th>Giới tính</th>
                <th>Ngày sinh</th>
                <th>Quê quán</th>
                <th>Ngành học</th>
                <th width="5%">Sửa</th>
                <th width="5%">Xóa</th>
                
            </tr>
        </thead> 
        <tbody>
            <?php 
            if (!empty($_SESSION['students'])):
            foreach($_SESSION['students'] as $item):
                  ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['name']; ?></td>
                <!-- <td><?php echo $item['gender']; ?></td> -->
                <td><?php echo $item['birth']; ?></td>
                <td><?php echo $item['hometown']; ?></td>
                <td><?php echo $item['major']; ?></td>
                <td><a href="edit.php">Sửa</a></td>
                <td><a href="delete.php">Xóa</a></td>
            </tr>
            <?php 
                  endforeach; else: ?>
                <tr>
                    <td colspan="6">Khong co data</td>
                </tr>
            <?php endif;
            ?>
        </tbody>
</body>
</html>