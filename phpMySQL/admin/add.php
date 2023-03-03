<?php require_once "../core/connectDB.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title></title>
</head>

<body>
    <?php 
    $categories = $con->query("SELECT * FROM categories");
    ?>
    <div class="container">
        <h1>ADD THE PRODUCT</h1>
        <form action="add.php" method="post" enctype="multipart/form-data">
            <label for="name">Product name:</label><br>
            <input type="text" name="name" placeholder="Enter new name"><br>
            <label for="category">Category:</label><br>
            <select name="category">
                <option value="">Choose the category</option>
                <?php while ($cate = $categories->fetch_assoc()) { ?>
                    <option value="<?php echo $cate["id"] ?>"><?php echo $cate["name"] ?></option>
                <?php } ?>
            </select><br>
            <label for="imgUpload">Product image:</label>
            <input type="file" name="imgUpload"><br>
            <label for="description">Description:</label><br>
            <textarea rows="8" cols="50" name="description" placeholder="Enter description"></textarea><br>
            <label for="price">Price:</label><br>
            <input type="number" name="price" placeholder="Enter price"><br>
            <label for="sale-price">Sale price</label><br>
            <input type="number" name="sale-price" value=0 placeholder="Enter sale price"><br>
            <label for="quantity">Quantity:</label><br>
            <input type="number" name="quantity" placeholder="Enter quantity"><br>
            <br>
            <button class="btn btn-primary" type="submit" name="add">Add</button>
        </form>
    </div>
    <?php 
        if (isset($_POST['add'])) {
            if (!empty($_POST['name'])&&!empty($_POST['category'])&&!isset($_FILE['name'])&&!empty($_POST['description'])&&!empty($_POST['price'])&&!empty($_POST['quantity'])) {
                $name = $_POST["name"];
                $category = $_POST["category"];
                $description = $_POST["description"];
                $price = $_POST["price"];
                $salePrice = $_POST["sale-price"];
                $quantity = $_POST["quantity"];
                
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
                $imgName = 'images/' . $folder . $file_name;
                move_uploaded_file($file_tmp, $target_dir . $folder . $file_name);
                $date = date("Y-m-d");
                $status = $con->query("INSERT INTO products(name, category_id, description, price, saleprice,image, quantity, created) 
                                        VALUES ('{$name}', {$category}, '{$description}', {$price}, {$salePrice}, '{$imgName}', {$quantity}, '{$date}')");

                if ($status) {
                    header("Location: http://localhost:8080/ltweb_php/phpMySQL/admin/admin.php?status=successful");
                } else {
                    echo $con->error;
                    // header("Location: http://localhost:8080/ltweb_php/phpMySQL/error.php");
                }
            }
        }
    ?>
</body>

</html>