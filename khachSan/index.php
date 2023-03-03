<!DOCTYPE html>
<html>
<head>
    <title>Hóa đơn </title>
    <style>
        
        td{
            margin-left: 50px;
            padding: 10px;
        }
        .title{
            text-align: center;
            font-weight: bold;
            
            color: #ffffff;
        }
        input{
            width: 300px;
        }
        button{
            background: black ;
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
    $giatla = $_POST["giatla"];
    $ansang = $_POST["ansang"];
    $tamhoi = $_POST["tamhoi"];
    $meal = $_POST["meals"];
    $typeRoom = $_POST["typeroom"];
    $checkin = strtotime( $_POST["checkin"]);
    $checkout = strtotime($_POST["checkout"]); 
    $date = abs($checkout- $checkin)  ;
    $rental_hours = (floor($date / (60*60*24)))*24;
    $service = $giatla + $ansang + $tamhoi;
    $tatol = (int)$meal +(int) $service + ((int)$typeRoom * (int)$rental_hours);

?>
    <form action="" method="post">
        <table style="width: 500px; margin-left: auto; margin-right: auto; background: gray;">
            <tr class="title">
                <td colspan="2">
                    TÍNH TIỀN
                </td>
            </tr>
            <tr>
                <td>
                    LOẠI PHÒNG 
                </td>
                <td>
                    <select name="typeroom">
                        <option value="1000">A</option>
                        <option value="500">B</option>
                        <option value="200">C</option>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    CHECK-IN
                </td>
                <td>
                    <input type="date" name="checkin" value="">
                </td>
            </tr>
            <tr>
                <td>
                    CHECK-OUT
                </td>
                <td>
                    <input type="date" name="checkout"  value="">
                </td>
            </tr>           
            <tr>
                <td>
                    TIỀN ĂN
                </td>
                <td>
                    <input type="text" name="meals" value=" ">
                </td>
            </tr>
            <tr>
                <td>
                    DỊCH VỤ
                    
                </td>
                <td >
                    <input class="dv" type="checkbox" name="giatla" value="300 ">GIẶT LÀ 
                    <input class="dv" type="checkbox" name="ansang" value="500">ĂN SÁNG
                    <input class="dv" type="checkbox" name="tamhoi" value="200 ">TẮM HƠI 
                </td>
            </tr>
            <tr class="title">
                <td colspan="2">
                    <button type="submit">TÍNH</button>
                    <button type="cancel">cancel</button>
                </td>
                 
            </tr>

        
        </table>
    </form >

    <h2>BILL</h2>
    <form action="" style="margin-left: 200px;" method="post">
        
        TypeRoom:
         <input type="text" value="<?php echo $typeRoom ?>"> <br> <br>
        Rental hours: 
        <input type="text" value="<?php echo $rental_hours?>"> <br> <br>
        Money for meals:
         <input type="text" value="<?php echo $meal ?>"> <br> <br>
        Money for service:
         <input type="text" value="<?php echo $service ?>"> <br> <br>
        Total: 
        <input type="text" value="<?php echo $tatol?>"> <br> <br>
    </form>
</body>
</html>



<?php
    $loaiPhong = $_POST["loaiPhong"];
    $checkin = strtotime( $_POST["checkin"]);
    $checkout = strtotime($_POST["checkout"]); 
    $gioThue = (floor( abs($checkout- $checkin) / (60*60*24)))*24;
    $tienAn = $_POST["an"];
    $giat = $_POST["giat"];
    $anSangBuffer = $_POST["an"];
    $tam = $_POST["tam"];
    $dichVu = $giat + $tienAn + $tam;
    $tong = (int)$tienAn +(int) $dichVu + ((int)$loaiPhong * (int)$gioThue);

?>
    <form action="" method="post">
        <table  >
            <tr class="title">
                <td id="tinhtien" colspan="2">
                    TÍNH TIỀN
                </td>
            </tr>
            <tr>
                <td>
                     LOẠI PHÒNG
                </td>
                <td>
                    <select name="loaiPhong">
                        <option value="1000">A</option>
                        <option value="500">B</option>
                        <option value="200">C</option>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    CHECK-IN
                </td>
                <td>
                    <input type="date" name="checkin" value="">
                </td>
            </tr>
            <tr>
                <td>
                    CHECK-OUT
                </td>
                <td>
                    <input type="date" name="checkout"  value="">
                </td>
            </tr>           
            <tr>
                <td>
                    TIỀN ĂN
                </td>
                <td>
                    <input type="text" name="an" value=" ">
                </td>
            </tr>
            <tr>
                <td>
                    DỊCH VỤ
                    
                </td>
                <td >
                    <input  type="checkbox" name="giat" value="300 ">GIẶT LÀ 
                    <input  type="checkbox" name="an" value="500">ĂN SÁNG
                    <input  type="checkbox" name="tam" value="200 ">TẮM HƠI 
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button id="tinh" onclick="showBill()" >Tính</button>
                    <button id="cancel">Cancel</button>
                </td>
                 
            </tr>

        
        </table>
    </form >

   
    <form  action="" method="post" id="bill"  >
    <h1>BILL</h1>
        <b>TypeRoom: </b>  
            <input type="text" value="<?php echo $loaiPhong ?>"> <br> <br>
        <b>Rental hours:</b>
            <input type="text" value="<?php echo $gioThue?>"> <br> <br>
        <b> Money for meals:</b>
            <input type="text" value="<?php echo $tienAn ?>"> <br> <br>
        <b> Money for service:</b>
             <input type="text" value="<?php echo $dichVu ?>"> <br> <br>
        <b>Total:</b>
            <input type="text" value="<?php echo $tong?>"> <br> <br>
    </form>