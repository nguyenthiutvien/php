<!-- 
    
 -->
 <!DOCTYPE html>
<html>
<head>
    <title>Hình chữ nhật</title>
    <style>
        table{
            width: 500px;
            margin: auto;
            background-color: #f5f5f5;


        }
        td{
            padding: 10px;
        }
        .center{
            text-align: center;
            font-weight: bold;
            background: #ffa500;
            color: #ffffff;
        }
        input{
            width: 300px;
        }
        button{
            background: #34a853;
            border: none;
            padding: 10px 20px;
            font-weight: bold;
        }
        button:hover{
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php
   
    $width = (int)$_POST["width"];
    $height = (int)$_POST["height"];
    $S = $width*$height;
?>
    <form action="" method="post">
        <table>
            <tr class="center">
                <td colspan="2">
                    DIỆN TÍCH HÌNH CHỮ NHẬT
                </td>
            </tr>
            <tr>
                <td>
                    Chều rộng
                </td>
                <td>
                    <input type="text" name="width">
                </td>
            </tr>
            <tr>
                <td>
                    Chều cao
                </td>
                <td>
                    <input type="text" name="height">
                </td>
            </tr>
            
            <tr>
                <td>
                    Diện tích
                </td>
                <td>
                    <input type="text" name="" value="<?php echo $S ?>">
                </td>
            </tr>
            <tr class="center">
                <td colspan="2">
                    <button type="submit">TÍNH</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>