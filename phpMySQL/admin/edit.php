<?php 
    require_once "../core/connectDB.php";
    $name = $_POST["name"];
    $category = $_POST["category"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $salePrice = $_POST["sale-price"];
    $quantity = $_POST["quantity"];
    if (isset($_FILES['imgUpload'])) {
        $file_name = $_FILES['imgUpload']['name'];
        $file_tmp = $_FILES['imgUpload']['tmp_name'];
        $target_dir = '../images/';
        switch ($category) {
            case 1: {
                $folder = 'fashion_boy/';
                break;
            }
            case 2: {
                $folder = 'fashion_girl/';
                break;
            }
            case 3: {
                $folder = 'hangmoive/';
                break;
            }
        }
        $imgName = 'images/'.$folder.$file_name;
        move_uploaded_file($file_tmp, $target_dir.$folder.$file_name);
    }
    $imgSQL= empty($imgName) ? '' : ",image='".$imgName."'";
    $status = $con->query("UPDATE products SET name='{$name}', category_id={$category}, description='{$description}', 
                price={$price}, saleprice={$salePrice}, quantity={$quantity}{$imgSQL}
                WHERE id={$_GET['id']}");

    if ($status) {
        header("Location: http://localhost:8080/ltweb_php/phpMySQL/admin/admin.php?status=successful");
    } else {
        header("Location: http://localhost:8080/ltweb_php/phpMySQL/error.php");
    }
?>