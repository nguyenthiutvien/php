<html>  
<head>  
<style>  
.error {color: #FF0001;}  
<style>
    #tinhtien{
        text-align: center;
        background-color: #f53b57;
        font-weight: bold;
        font-size: 30px;
      
    }
    table{
        background-color: #f78fb3;
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
        margin-left:100px;
        

    }
     #cancel:hover{
        background-color: #546de5
    }
    #tinh:hover{
        background-color: #546de5
    }
    #bill{
        margin-left: 350px;
       
    
    }
    
</style>
</style>  
</head>  
<body>    
  
<?php  
// define variables to empty values  
$typeRoomErr = $checkInErr = $checkOutErr = $moneyMealErr = $serviceErr = "";  
$typeRoom = $checkin = $checkout = $moneyMeal = $service = "";  

ini_set('display_errors', 0);


function gioThue () {
    $checkin = strtotime( $_POST["checkin"]);
    $checkout = strtotime($_POST["checkout"]);
    $giothue= (floor( abs(strtotime($checkout)- strtotime($checkin) / (60*60))))*24;
    return $giothue;
}

function dichVu () {
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




  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (empty($_POST["loaiPhong"])) {  
         $typeRoomErr = "Type room is required";  
    } else {  
        $typeRoom = input_data($_POST["loaiPhong"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$typeRoom)) {  
                $typeRoomErr = "Only alphabets and white space are allowed";  
            }  
    }  
      
    //Email Validation  
    // if (empty($_POST["email"])) {  
    //         $emailErr = "Email is required";  
    // } else {  
    //         $email = input_data($_POST["email"]);  
    //         // check that the e-mail address is well-formed  
    //         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
    //             $emailErr = "Invalid email format";  
    //         }  
    //  }  
    
    //Number Validation  
    if (empty($_POST["tienAn"])) {  
            $moneyMealErr = " Money meal is required";  
    } else {  
            $moneyMealErr = input_data($_POST["tienAn"]);  
            // check if mobile no is well-formed  
            if (!preg_match ("/^[0-9]*$/", $moneyMealErr) ) {  
            $moneyMealErr = "Only numeric value is allowed.";  
            }  
        //check mobile no length should not be less and greator than 10  
        // if (strlen ($mobileno) != 10) {  
        //     $mobilenoErr = "Mobile no must contain 10 digits.";  
        //     }  
    }  
      
    
      
    //Empty Field Validation  
    if (empty ($_POST["dichVu"])) {  
            $servicerErr = "service is required";  
    } else {  
            $service = input_data($_POST["dichVu"]);  
    }  
  
     //Checkbox Validation  
    //  if (!isset($_POST['dichVu'])){  
    //          $agreeErr = "Accept terms of services before submit.";  
    //  } else {  
    //          $agree = input_data($_POST["dichVu"]);  
    //  }  
}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?>  
  

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
                        <span class="error">* <?php echo $typeRoomErr; ?> </span> 
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    CHECK-IN
                 
                </td>
                <td>
                    <input type="datetime-local" name="checkin" value="">
                    
                </td>
                <td>
                <span class="error">* <?php echo $checkInErr; ?> </span> 
                </td>
            </tr>
            <tr>
                <td>
                    CHECK-OUT
                  
                </td>
                <td>
                    <input type="datetime-local" name="checkout"  value="">
                </td>
                <td>
                <span class="error">* <?php echo $checkOutErr; ?> </span> 
                </td>
            </tr>           
            <tr>
                <td>
                    TIỀN ĂN
                </td>
                <td>
                    <input type="text" name="tienAn" value=" ">
                </td>
                <td>
                <span class="error">* <?php echo $moneyMealErr; ?> </span> 
                </td>
            </tr>
            <tr>
                <td>
                    DỊCH VỤ
                </td>
                <td >
                    <input  type="checkbox" name="dichVu" value="300 ">GIẶT LÀ 
                    <input  type="checkbox" name="dichVu" value="500">ĂN SÁNG
                    <input  type="checkbox" name="dichVu" value="200 ">TẮM HƠI 
                </td>
                <td>
                <span class="error">* <?php echo $serviceErr; ?> </span> 
                </td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td colspan="2">
                    <button id="tinh" name="submit">Tính</button>
                    <button id="cancel">Cancel</button>
                </td>
                 
            </tr>

        
        </table>
    </form >
    <?php  
    if(isset($_POST['submit'])) {  
    if($typeRoomErr = $checkInErr = $checkOutErr = $moneyMealErr = $serviceErr = "") {  ?>
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
</html>