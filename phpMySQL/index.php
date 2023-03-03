<?php require "./core/connectDB.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <style>
        .products {
            display: grid;
            grid-template-columns: repeat(4, 20%);
            gap: 1rem 2rem;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <section class="new-products">
            <h1 class="text-center">New Products</h1>
            <div class="products">
                <?php
                $sql = "select * from products where category_id = 3 and status = 0;";
                $results = $con->query($sql);
                while ($row = $results->fetch_assoc()) { ?>
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $row["image"] ?>" class="card-img-top" style="height:16rem; width:auto">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row["name"] ?></h5>
                            <p class="card-text text-danger"><?php echo $row["price"] ?> VND</p>
                            <button type="button" class="btn btn-danger" onclick='window.location.href = "http://localhost:8080/ltweb_php/phpMySQL/detail.php?id=<?php echo $row["id"] ?>"'>View Details</button>
                        </div>
                    </div>
                <?php }
                ?>
            </div>
        </section>
        <section class="men-products mt-5">
            <h1 class="text-center">Men Products</h1>
            <div class="products">
                <?php
                $sql = "select * from products where category_id = 1 and status = 0;";
                $results = $con->query($sql);
                while ($row = $results->fetch_assoc()) { ?>
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $row["image"] ?>" class="card-img-top" style="height:15rem; width:auto">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row["name"] ?></h5>
                            <p class="card-text text-danger"><?php echo $row["price"] ?> VND</p>
                            <button type="button" class="btn btn-danger" onclick='window.location.href = "http://localhost:8080/ltweb_php/phpMySQL/detail.php?id=<?php echo $row["id"] ?>"'>View Details</button>
                        </div>
                    </div>
                <?php }

                ?>
            </div>
        </section>
        <section class="women-products mt-5">
            <h1 class="text-center">Women Products</h1>
            <div class="products">
                <?php
                $sql = "select * from products where category_id = 2 and status = 0;";
                $results = $con->query($sql);
                while ($row = $results->fetch_assoc()) { ?>
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $row["image"] ?>" class="card-img-top" style="height:15rem; width:auto">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row["name"] ?></h5>
                            <p class="card-text text-danger"><?php echo $row["price"] ?> VND</p>
                            <button type="button" class="btn btn-danger" onclick='window.location.href = "http://localhost:8080/ltweb_php/phpMySQL/detail.php?id=<?php echo $row["id"] ?>"'>View Details</button>
                        </div>
                    </div>
                <?php }

                ?>
            </div>
        </section>
    </div>
</body>

</html>