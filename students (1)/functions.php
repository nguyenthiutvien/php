<?php
// hàm chuyển hướng
function redirect($to){
    header("loaction:" .$to);
    exit;
}
function set_flash_session($key, $value){
    if(empty($_SESSION[$key])){
        $_SESSION[$key] = $value;

    }
}
function get_flash_session($key){
    if (!empty($_SESSION[$key])){
        $mess=$_SESSION[$key];
        unset($_SESSION[$key]);
        return $mess;


    }

}

function show() {
    ?>
    <table border ="1" style="background-color:burlywood; margin:auto" cellpadding="0" cellspacing="0" width="60%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Họ và tên</th>
            <th>Giới tính</th>
            <th>Quê quán</th>
            <th>Ngày sinh</th>
            <th>Ngành học</th>
            <th width="5%">Sửa</th>
            <th width="5%">Xóa</th>
            
        </tr>
    </thead>
    <tbody>
    <?php 
         if (!empty($_SESSION['student'])): 
            foreach ($_SESSION['student'] as $key => $value ): 
        
        ?>
        
        <tr>
            <td><?php echo $value['maSV'] ?></td>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['gender']; ?></td>
            <td><?php echo $value['hometown']; ?></td>
            <td><?php echo $value['birthday']; ?></td>
            <td><?php echo $value['major']; ?></td>
            <td style="text-align: center"><a href="edit.php?id=<?php echo $key;?>" class="btn">Sửa</a></td>
            <td style="text-align: center"><a href="delete.php?id=<?php echo $key; ?> "onclick="return confirm('Ban co muon xoa khong')"class="btn">Xóa</a></td>
            

        </tr>
  
        <?php endforeach; else: ?>
            <tr>
                <td colspan="6">Khong co data</td>
            </tr>
        <?php endif;
        ?>
        </tbody>
        </table>
        <?php
}
?>

