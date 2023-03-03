<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>

<title>Title</title>

</head>
<body>
<?php 
$schools =array( 
    'Students' => array(
        'SV01'=> array(
            'mssv'=> 'V011',
            'name' => 'Phan Văn Cường',
            'gender'=>'Nữ',
            'hometown' => 'quang tri',
            'birthday'=>'1999',
            'major' => 'Cong nghe thong tin'

        ),
        'SV02'=> array(
            'mssv'=> 'V011',
            'name' => 'Phan Văn Cường',
            'gender'=>'Nữ',
            'hometown' => 'quang tri',
            'birthday'=>'1999',
            'major' => 'Cong nghe thong tin'

        ),
        'SV03'=> array(
            'mssv'=> 'V011',
            'name' => 'Phan Văn Cường',
            'gender'=>'Nữ',
            'hometown' => 'quang tri',
            'birthday'=>'1999',
            'major' => 'Cong nghe thong tin'

        ),
        'SV04'=> array(
            'mssv'=> 'V011',
            'name' => 'Phan Văn Cường',
            'gender'=>'Nữ',
            'hometown' => 'quang tri',
            'birthday'=>'1999',
            'major' => 'Cong nghe thong tin'

        ),
        'SV05'=> array(
            'mssv'=> 'V011',
            'name' => 'Phan Văn Cường',
            'gender'=>'Nữ',
            'hometown' => 'quang tri',
            'birthday'=>'1999',
            'major' => 'Cong nghe thong tin'

        )

    
    ),
)
?>

<div id="content" >
    <?php 
    foreach ($schools as $key => $value) {
        ?>
      
        <table border=1 class="list_schools">
            <tr>
                <th>ID</th>
                <th>Ho va ten</th>
                <th>Gioi tinh</th>
                <th>Que quan</th>
                <th>Ngày sinh</th>
                <th>Ngành học</th>
                <th>Tác vụ</th>
            </tr>
            <?php foreach($value as $k => $v) {
                 ?>
                <tr>
                    <td><?php echo $k; ?></td>
                    <td><?php echo $v['name']; ?></td>
                    <td><?php echo $v['gender']; ?></td>
                    <td><?php echo $v['hometown']; ?></td>
                    <td><?php echo $v['birthday']; ?></td>
                    <td><?php echo $v['major']; ?></td>
                    <TD> <BUTton>Sửa</BUTton> <SPAN><BUTTon>Xóa</BUTTon></SPAN></TD>
                   
                </tr>
                
                
           <?php } 
            ?>

        </table>
        <br>
        <button> Create </button>
    <?php } 
    ?> 
  
    
</div>

</html>