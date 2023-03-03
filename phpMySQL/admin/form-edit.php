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
    <title>Edit</title>
</head>

<body>
    <?php $result = $con->query("SELECT * FROM products WHERE id={$_GET['id']}");
    $pro = $result->fetch_assoc();
    $categories = $con->query("SELECT * FROM categories");
    ?>
    <div class="container">
        <h1>EDIT THE PRODUCT</h1>
        <form action="edit.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
            <label for="name">Product name:</label><br>
            <input type="text" name="name" placeholder="Enter new name" value="<?php echo $pro["name"] ?>"><br>
            <label for="category">Category:</label><br>
            <select name="category">
                <option value="">Choose the category</option>
                <?php while ($cate = $categories->fetch_assoc()) { ?>
                    <option value="<?php echo $cate["id"] ?>" <?php echo $cate["id"]==$pro["category_id"]?'selected':''?>><?php echo $cate["name"] ?></option>
                <?php } ?>
            </select><br>
            <label for="img">Product image:</label>
            <input type="file" name="imgUpload"><br>
            <label for="description">Description:</label><br>
            <textarea rows="8" cols="50" name="description" placeholder="Enter description" value="<?php echo $pro["description"] ?>"></textarea><br>
            <label for="price">Price:</label><br>
            <input type="number" name="price" placeholder="Enter price" value="<?php echo $pro["price"] ?>"><br>
            <label for="sale-price">Sale price</label><br>
            <input type="number" name="sale-price" value=0 placeholder="Enter sale price" value="<?php echo $pro["saleprice"] ?>"><br>
            <label for="quantity">Quantity:</label><br>
            <input type="number" name="quantity" placeholder="Enter quantity" value="<?php echo $pro["quantity"] ?>"><br>
            <br>
            <button class="btn btn-primary" type="submit" name="save">Save</button>
        </form>
    </div>

</body>

</html>