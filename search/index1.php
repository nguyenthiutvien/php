<form method="post">
   Tìm kiếm: 
   <input type="text" value="" name="timkiem" placeholder="Mời bạn nhập từ khoá">
   <input type="submit" name="Submit" value="Tìm kiếm">
</form>
<div>
   Kết quả <?php  $kq?>
</div>
<?php
   $students = array("Thi", "Thang", "Luan", "Vien");
     $v=$_POST["timkiem"];
      if (in_array($v,  $students )) {
         $kq= echo "Tìm thấy giá trị";
      }
      else {
         $kq= echo "Không tìm thấy";
      }
    array_push ($students,"Bich");
  
   
?>