
 <!DOCTYPE html>
<html>
<head>
    <title>Tính diện tích</title>
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
        p{
            color: red;
            font-size: 40;
            text-align: center;

        }
    </style>
</head>
<body>
<?php
   
    $width = (int)$_POST["width"];
    $height = (int)$_POST["height"];
    $S = $width*$height;
    $kqif;
    // if else
    if ($S >=200) {
        $kqif = "<p>Bạn nên xây villa</p>";
    }elseif ($S >=150){
        $kqif ="<p>Bạn nên xây biệt thư</p>";

    }elseif ($S >=100) {
        $kqif ="<p>Bạn nên xây nhà cao tầng</p>";
    }
    else{
        $kqif ="<p> Bạn nên xây nhà cấp 4</p>";
    }
    // switch 
    
    // switch ($S) {
    //     case ($S>=200):
    //       echo "<p>Bạn nên xây villa</p>";
    //       break;
    //     case ($S<=200 && $S>=150):
    //       echo "<p>Bạn nên xây biệt thư</p>";
    //       break;
    //     case (  $S<=150 && $S>=100):
    //       echo "<p>Bạn nên xây nhà cao tầng</p>";
    //       break;
    //   default:
    //       echo "<p>Xây nhà cấp 4 thôi nha!</p>";
    //       break;
    //   }


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
            <tr>
                <td>
                    Nhận xét
                </td>
                <td>
                    <input type="text" id="kq" value="">
                    <script>

                        kq = document.getElementById("kq").innerHTML = <?php echo $kqif ?>;

                    </script>
                </td>
            </tr>
            
        </table>
    </form>
</body>
</html>