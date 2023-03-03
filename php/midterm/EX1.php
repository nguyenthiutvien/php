!<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        .error {
            color: white;
            background-color: crimson;
            border-radius: 7px;
            text-align: center;
        }

        .success {
            background-color: darkgreen;
            color: white;
            border-radius: 7px;
            text-align: center;
        }
        /* .show{
            background-color: lightgreen;
        } */
    </style>
</head>

<body>
<?php

$success = "";
$error = "";
$name= $phone = $message = $email = "";
$errors = array('name' => '','phone'=> '','email' => '', 'message' => '');

function SanitizeString($var)
{
    $var = strip_tags($var);
    $var = htmlentities($var);
    return stripslashes($var);
}
if (isset($_POST["submit"])) {
    if (empty(trim($_POST["name"]))) {
        $errors['name'] = "Your name is required";
    } else {
        $name = SanitizeString($_POST["name"]);
        if (!preg_match('/^[a-zA-Z\s]{6,50}$/', $name)) {
            $errors['name'] = "Only letters and spaces allowed";
        }
    }

    if (empty(trim($_POST["phone"]))) {
        $errors['phone'] = "Your phone is required";
    } else {
        $phone = SanitizeString($_POST["phone"]);
        if  (!preg_match ("/^[0-9]*$/", $phone)) {
            $errors['phone'] = "Only numbers allowed";

        }
    }

    if (empty(trim($_POST["email"]))) {
        $errors["email"] = "Your email is required";
    } else {
        $email = SanitizeString($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "Pls give a proper email address";
        }
    }
    if (empty(trim($_POST["message"]))) {
        $errors['message'] = "Your message is required";
    } else {
        $message = SanitizeString($_POST["message"]);
        if (!preg_match("/^[a-zA-Z\d\s]+$/", $message)) {
            $errors['message'] = "Only letters, spaces and maybe numbers allowed";
        }
    }

 

    if (array_filter($errors)) {
    } else {
        echo "<div class='show'>";

        echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";  
        echo "<br>";  
        echo "Your Name: " .$name;  
        echo "<br>";  
        echo "Your Email: " .$phone;  
        echo "<br>";  
        echo "Your phone: " .$email;  
        echo "<br>";  
        echo "Your message: " .$message;  
        echo "<br>";  
       
       
    }
}
?>

    

    <main class="container">
        <h4>Contact</h4>

        <hr>

        <div class="row">
            <div class="col s12 l5">
                <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcS8EDA10Fpo7k0Tv5cnVkapOuOBpSMo_jTNZu0Ofn9SxUMIh89c" alt="">
              
            </div>
            <div class="col s12 l5 offset-l2">

                <div class="success"><?php echo $success ?></div>
                <div class="error"><?php echo $error ?></div>
                <form action="index.php" method="post">

                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($name) ?>">

                        <label for="name">Your name*</label>
                        <div class="error"><?php echo $errors["name"] ?></div>
                    </div>
                    
                    <div class="input-field">
                        <i class="material-icons prefix">phone</i>
                        <input type="text" name="phone" id="phone" value="<?php echo htmlspecialchars($phone) ?>">

                        <label for="phone">Your phone*</label>
                        <div class="error"><?php echo $errors["phone"] ?></div>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">email</i>
                        <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($email) ?>">
                        <label for="email">Your email*</label>
                        <div class="error"><?php echo $errors["email"] ?></div>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea id="message" class="materialize-textarea" name="message"><?php echo htmlspecialchars($message) ?></textarea>
                        <label for="message">Your Message*</label>
                        <div class="error"><?php echo $errors["message"] ?></div>
                    </div>
                    <div class="input-field center">
                        <input type="submit" class="btn-large z-depth-0" name="submit" id="submit" value="Send"></input>
                    </div>

                </form>
            </div>
        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <?php

    
    
    ?>
</body>
</html>