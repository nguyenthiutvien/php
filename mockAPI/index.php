<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link rel="stylesheet" href="showroom.css">
    <link rel="stylesheet" href="./js/bootstrap.min.js">
    <link rel="stylesheet" href="./js/jquery-3.6.1.min.js">
  
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php
// Lấy dữ liệu từ Mock API
// $curl = curl_init();
// curl_setopt_array($curl, [
//     CURLOPT_RETURNTRANSFER => 1,
//     CURLOPT_URL => 'https://63a5720d318b23efa793a600.mockapi.io/api/products',
// ]);
// $response = curl_exec($curl);
// curl_close($curl);

$URL_handmade = 'https://63a5720d318b23efa793a600.mockapi.io/api/products';

?>
<script>
function getData2() {
    axios.get(`${URL_handmade}`)
        .then(
            console.log(res.data)
            function  (res) {
                showHandmade(res)
            }
        )
}
getData2();
</script>


// Phân tích dữ liệu trả về
<?php
function showHandmade(res) {?>


<div class="row" >
    <?php foreach ($data as $product) { ?>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?php echo $product['image']; ?>" style="width:300px;height:200px" alt="<?php echo $product['name']; ?>">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $product['name']; ?></h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group" style="background-color: gray; color:white">
                            <button type="button"  class="btn btn-sm btn-outline-secondary">Add to cart</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        </div>
                        <small class="text-muted">$<?php echo $product['price']; ?></small>
                    </div>
                </div>
            </div>
        </div>
    <?php }
    } ?>

</div>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</body>
</html>