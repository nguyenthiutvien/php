<!DOCTYPE html>
<html>
<head>
    <title>Hóa đơn thanh toán </title>
    <style>
    #tinhtien{
        text-align: center;
        background-color: #d2dae2;
        font-weight: bold;
        font-size: 30px;
      
    }
    table{
        background-color: #d2dae2;
        margin-left: auto;
        margin-right: auto;
    }
    #tinh{
        margin-left: 130px;
        border-radius: 3px;
        border: none;

    }
    #cancel{
        margin-right: 150px;
        border-radius: 3px;
        border: none;

        
    }
    h1{
        color: #f53b57;
        

    }
     #cancel:hover{
        background-color: #546de5
    }
    #bill{
        margin-left: 350px;
    
    }
   
    #tinh:hover{
        background-color: #546de5
    }
    .error {color: #FF0001;}  

    
</style>
</head>

<body>
<?php 
$nameErr = $checkinErr = $checkoutErr = $tienAnErr = $dichVuErr ="";
// $name = $email = $mobileno = $gender = $website = $agree = ""; 

error_reporting(0);
function tinhGio () {
    $checkin = strtotime( $_POST["checkin"]);
    $checkout = strtotime($_POST["checkout"]);
    $giothue= (floor(($checkout-$checkin) / (60*60)));
    return $giothue;
}

function tinhDV () {
    $tienAn = $_POST["an"];
    $giat = $_POST["giat"];
    $anSangBuffer = $_POST["anSang"];
    $tam = $_POST["tam"];
    $dichVu = $giat + $tienAn + $tam + $anSangBuffer;
    return $dichVu;
}
function loaiPhong() {
    $loaiPhong=$_POST["loaiPhong"];
    return $loaiPhong;
}
function tienAn () {
    $tienAn=$_POST["an"];
    return $tienAn;
}
function tinhTong () {
   $tong = tienAn() + (loaiPhong() * tinhGio()) + tinhDV();
   return $tong;
}
 // 
$error = array () ;
if ($_POST["an"]) {
      $error['an'] = "money is required";
    }

    
if (empty($_POST["checkin"])) {
    $error['checkin'] = "Check in is required";
    }
    
if (empty($_POST["checkout"])) {
        $error['checkout'] = "Check out is required";
    }
    

function form_error ($label_field) {
    global $error ;
    if (isset ($error[$label_field])) {
        echo "<span style=\"color:red\">{$error[$label_field]} </span>";
    }
}
function validCheckIn ($checkin) {
    if ($checkin >= date('Y-m-d H:i:s') && $checkin != null) {
        return true;
    }
}

function validCheckOut ($checkin,$checkout) {
    if ($checkout==null) {
        return "check out is required";
    }
    if ($checkout < date('Y-m-d H:i:s') || $checkout < $checkin) {
        echo "Check out must greater than check in";
    }
}

function validTienAn ($tienAn) {
    if (isset($tienAn)) {
        if ($tienAn <30000 || $tienAn >500000) {
            return "Try agian. Only from 30000 to 50000!";
        }
        else {
            return $tienAn;
        }
    }
    else {
        return "Money is required";
    }
}

if (empty($_POST["tienAn"])) {  
    $tienAn = "Money  is required";  
} else {  
    $tienAn = input_data($_POST["tienAn"]);  
    // check if mobile no is well-formed  
    if (!preg_match ("/^[0-9]*$/", $tienAn) ) {  
    $tienAnErr = "Only numeric value is allowed.";  
    }  


}  
function validDichVu ($ansang, $giat,$tam) {
    if ($ansang==0 && $giat==0 && $tam==0 ) {
        return "Dich vu is required";
    }
}
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
                <td>
                <span class="error">* <?php echo $loaiPhongErr; ?> </span> 
                </td>
            </tr>
            <tr>
                <td>
                    CHECK-IN
                </td>
                <td>
                    <input type="datetime-local" name="checkin" value="">
                </td>
                <td><span class="error">* <?php echo $checkoutErr; ?> </span> </td>
                
            </tr>
            <tr>
                <td></td>
                <td>
                    <?php 
                    if (isset($error['checkin'])) {
                        echo $error['checkin'];
                    }
                    else if (validCheckIn($_POST["checkin"])) {
                        echo  $_POST ["checkin"]. " was the past ";
                    }?></td>
                    <td>
                    </td></tr>
            <tr>
                <td>
                    CHECK-OUT
                </td>
                <td>
                    <input type="datetime-local" name="checkout"  value="">
                </td>
                <td>
                <span class="error">* <?php echo $checkoutErr; ?> </span> 
                </td>
            </tr>      
            <tr>     
            <td></td>
                <td><?php 
                    if (isset($error['checkout'])) {
                        echo $error['checkout'];
                    }
                    
                    else if (validCheckOut($_POST["checkin"],$_POST["checkout"])) {
                        echo "Date ". $_POST ["checkout"]. " is valid ";
                    }
                    ?>
                    </td></tr> 
            <tr>
            <tr>
                <td>
                    TIỀN ĂN
                </td>
                <td>
                    <input type="text" name="an" value=" ">
                </td>
                <td>
                <span class="error">* <?php echo $tienAnErr; ?> </span> 
                </td>
                
            </tr>
            <tr>
                <td></td>
                <td><?php
                if (isset($error['an'])) {
                    echo $error['an'];
                } 
                else echo validTienAn($_POST["an"]) ?></td>
            </tr>
            <tr>
                <td>
                    DỊCH VỤ
                    
                </td>
                <td >
                    <input  type="checkbox" name="giat" value="300 ">GIẶT LÀ 
                    <input  type="checkbox" name="anSang" value="500">ĂN SÁNG
                    <input  type="checkbox" name="tam" value="200 ">TẮM HƠI 
                </td>
                <td>
                <span class="error">* <?php echo $dichVuErr; ?> </span> 
                </td>
            </tr>
            <tr>
                <td></td>
<td></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button id="tinh" name ="submit">Tính</button>
                    <button id="cancel">Cancel</button>
                </td>
                 
            </tr>
        </table>


    
    </form >
    
    <?php  
    if(isset($_POST['submit'])) {  
    if($nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $genderErr == "" && $websiteErr == "" && $agreeErr == "") {  ?>
    <form action=""  method="post" id="bill"  >
    <h1>BILL</h1>
        <b>TypeRoom: </b>  
            <input type="text" value="<?php echo loaiPhong() ?>"> <br> <br>
        <b>Rental hours:</b>
            <input type="text" value="<?php echo tinhGio()?>"> <br> <br>
        <b> Money for meals:</b>
            <input type="text" value="<?php echo tienAn() ?>"> <br> <br>
        <b> Money for service:</b>
             <input type="text" value="<?php echo tinhDV() ?>"> <br> <br>
        <b>Total:</b>
            <input type="text" value="<?php echo tinhTong()?>"> <br> <br>
    </form>
    <?php
    }else{
        echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
    }} ?>
</body>