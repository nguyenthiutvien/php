<html>  
<head>  
<style>  
.error {color: #FF0001;}  
</style>  
</head>  
<body>    
  
<?php  
// define variables to empty values  
$nameErr = $emailErr = $mobilenoErr = $genderErr = $websiteErr = $agreeErr = "";  
$name = $email = $mobileno = $gender = $website = $agree = "";  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (empty($_POST["name"])) {  
         $nameErr = "Name is required";  
    } else {  
        $name = input_data($_POST["name"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
    }  
      
    //date Validation  
  
    $today = date("Y-m-d"); //Today
    $date = $_POST['email']//Date

 if (strtotime($today) > strtotime($date)) {
    $emailErr = "Email is required";  
 }else{
    $email = input_data($_POST["email"]);
}
  
    
    //Number Validation  
    if (empty($_POST["mobileno"])) {  
            $mobilenoErr = "Mobile no is required";  
    } else {  
            $mobileno = input_data($_POST["mobileno"]);  
            // check if mobile no is well-formed  
            if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
            $mobilenoErr = "Only numeric value is allowed.";  
            }  
        //check mobile no length should not be less and greator than 10  
        if (strlen ($mobileno) != 10) {  
            $mobilenoErr = "Mobile no must contain 10 digits.";  
            }  
    }  
      
    //URL Validation      
    if (empty($_POST["website"])) {  
        $websiteErr = "Website URL is required";  
    } else {  
            $website = input_data($_POST["website"]);  
            // check if URL address syntax is valid  
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {  
                $websiteErr = "Invalid URL";  
            }      
    }  
      
    //Empty Field Validation  
    if (empty ($_POST["gender"])) {  
            $genderErr = "Gender is required";  
    } else {  
            $gender = input_data($_POST["gender"]);  
    }  
  
    //Checkbox Validation  
    if (!isset($_POST['agree'])){  
            $agreeErr = "Accept terms of services before submit.";  
    } else {  
            $agree = input_data($_POST["agree"]);  
    }  
}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?>  
  
<h2>Registration Form</h2>  
<span class = "error">* required field </span>  
<br><br>  
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >    
    Loại phòng:
    <select name="name" id="">
        <option value="1000">A</option>
        <option value="800">B</option>
        <option value="500">C</option>
    </select>  
    
    <span class="error">* <?php echo $nameErr; ?> </span>  
    <br><br>  
    Check in:  
    <input type="datetime-local" name="email">  
    <span class="error">* <?php echo $emailErr; ?> </span>  
    <br><br>  
    Check out:  
    <input type="datetime-local" name="mobileno">  
    <span class="error">* <?php echo $mobilenoErr; ?> </span>  
    <br><br>  
    Tiền ăn:  
    <input type="text" name="website">  
    <span class="error"><?php echo $websiteErr; ?> </span>  
    <br><br>  
    Dịch vụ:  
    <input type="radio" name="gender" value="male"> Giặt đồ
    <input type="radio" name="gender" value="female"> Ăn sáng
    <input type="radio" name="gender" value="other"> Tắm hơi
    <span class="error">* <?php echo $genderErr; ?> </span>  
    <br><br>  
    Agree to Terms of Service:  
    <input type="checkbox" name="agree">  
    <span class="error">* <?php echo $agreeErr; ?> </span>  
    <br><br>                            
    <input type="submit" name="submit" value="Submit">  
    <br><br>                            
</form>  
  
<?php  
    if(isset($_POST['submit'])) {  
    if($nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $genderErr == "" && $websiteErr == "" && $agreeErr == "") {  
        echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";  
        echo "<h2>Your Input:</h2>";  
        echo "Name: " .$name;  
        echo "<br>";  
        echo "Email: " .$email;  
        echo "<br>";  
        echo "Mobile No: " .$mobileno;  
        echo "<br>";  
        echo "Website: " .$website;  
        echo "<br>";  
        echo "Gender: " .$gender;  
    } else {  
        echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
    }  
    }  
?>  
  
</body>  
</html>