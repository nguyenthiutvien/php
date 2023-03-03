<?php require_once "../core/connectDB.php" ?>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .products-section {
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <section class="products-section">
            <h1 class="text-center">PRODUCTS</h1>
            <?php
            $results = $con->query("SELECT * FROM products");
            while ($row = $results->fetch_assoc()) { ?>
                <div class="card mb-3" style="max-width: 540px; margin: auto auto">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?php echo "../".$row["image"] ?>" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row["name"] ?></h5>
                                <p class="card-text text-danger"><?php echo $row["price"] ?>VND</p>
                                <button class="btn btn-danger" onclick="window.location.href='index.php?page=remove&id=<?php echo $row['id']?>'"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                <button class="btn btn-danger" onclick="window.location.href='index.php?page=edit&id=<?php echo $row['id']?>'"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </section>
    </div>
</body>

</html>