<?php require_once "../core/connectDB.php";
$id = $_GET['id'];
$product = $con->query("SELECT * FROM products WHERE id={$id}")->fetch_assoc();
$category = $con->query("SELECT name FROM categories WHERE id={$product['category_id']}")->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['name'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #back-home__btn {
            padding: 10px;
            color: black;
            font-weight: bold;
        }

        main {
            display: flex;
            flex-direction: row;
            width: 70%;
            margin: auto auto;
        }

        #product__big-img {
            margin-right: 3rem;
            width: 300px;
            height: 400px;
        }

        #price {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <button id="back-home__btn" class='btn btn-outline-warning' onclick="window.location.href='http://localhost:8080/ltweb_php/phpMySQL/'">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            Back to home page
        </button>
        <main>
            <img id="product__big-img" src="<?php echo $product["image"] ?>">
            <section class="info">
                <h2 id="product-name"><?php echo $product["name"] ?></h2>
                <h3 id="price"><?php echo $product["price"] ?> VND</h3>
                <p id="description">Description: <?php echo $product["description"] ?></p>
                <p id="category">Category: <?php echo $category["name"] ?></p>
                <p id="quantity">Quantity: <?php echo $product["quantity"] ?></p>
            </section>
        </main>
    </div>
</body>

</html>