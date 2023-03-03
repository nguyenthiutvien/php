<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
     
        
        #price{
            color: red;
            text-align: center;
        }
        .card{
            width: 25%;
            height: 710px;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        } 
        #fashion_img img {
            margin:auto;
            width: 100%;
            height: 500px;
        }
        #fashion_img {
            margin: auto;
            
        }
        #name {
            text-align: center;
            font-weight: bold;
        }
        #container {
            width: 90%;
            margin: auto;
        }
        .card-group{
            display: flex;
            gap: 20px;
            
        }
        .card-body #code{
            text-align: center;
        }
        #container .title{
            margin-top: 20px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
            color:#ffff;
            font-size: 34px;
            background-color:yellowgreen;
            border-radius: 50px;
        }
      
        #button button{
            align-items: center;
            border:0px;
            /* border-radius: 16px; */
        
        }
    </style>
    <title>Thời Trang</title>
</head>
<body>
<h3>Add Product</h3>
<div id="container">
<form action=""method="POST">
    <table>
        <tr>
            <td> Nhập tên sản phẩm:</td>
            <td><input type="text" name="name"></td>
        </tr>
        
        <tr>
            <td> Nhập mã sản phẩm:</td>
            <td><input type="text" name="code"></td>
        </tr>
        <tr>
            <td> Nhập giá sản phẩm:</td>
            <td><input type="text" name="price"></td>
        </tr>
        <tr>
            <td> Nhập giá cũ nếu có:</td>
            <td><input type="text" name="old_price"></td>
        </tr>
       

        <tr>
            <td> Nhập link hình ảnh:</td>
            <td><input type="text" name="img" ></td>
        </tr>
    </table>
    <input type="submit"name="btn-sub"value="Add">


</form>


<?php 
$name = $_POST['name'];
$code =$_POST['code'];
$price =$_POST['price'];
$old_price=$_POST['old_price'];
$img=$_POST['img'];



$newProducts => array(

    'name'=> $name,
    'code' =$code,
    'price' =$price,
    'old_price'=$old_price,
    'img'=$img,

)
array_push($products, $newProducts);?>



    <?php 
    $products = 
    array (
    'Thời trang nam' => array(
        array(
            'id'=>1,
            'name'=>"The Cosmos(Den) Quan short kaki",
            'code'=>"ATGFG340",
            'old_price' => '500 000',
            'price'=>'398.000',
            'img' => 'https://img.cdn.vncdn.io/cdn-pos/d0f3ca-7136/ps/20230207_GMw1RF3phiVKvnsm.jpeg',
            
            ),

        array(
            'id'=>2,
            'name'=>"Quan Tay Au",
            'code'=>"ATGFG340",
            'old_price' => "",
            'price'=>'348.000',
            'img' => 'https://img.cdn.vncdn.io/cdn-pos/d0f3ca-7136/ps/20230207_6XkQ12bbX5EolJAc.jpeg',
    
            ),
      
      
        array(
            'id'=>3,
            'name'=>"The Cosmos(Den) Quan short kaki",
            'code'=>"ATGFG340",
            'old_price' => "",
            'price'=>'391.000',
            'img' => 'https://img.cdn.vncdn.io/cdn-pos/d0f3ca-7136/ps/20230110_z0K1U5mKWfTCi6Z3.jpeg',
            ),
        array(
            'id'=>4,
            'name'=>"The Cosmos(Den) Quan short kaki",
            'code'=>"ATGFG340",
            'old_price' => "",
            'price'=>'392.000',
            'img' => 'https://img.cdn.vncdn.io/cdn-pos/d0f3ca-7136/ps/20230207_6XkQ12bbX5EolJAc.jpeg',
            ),
        ),

    'Thời trang nữ' => array(
        array(
            'id'=>1,
            'name'=>"The Cosmos(Den) Quan short kaki",
            'code'=>"ATGFG340",
            'old_price' => "",
            'price'=>'392.000',
            'img' => 'https://img.cdn.vncdn.io/cdn-pos/d0f3ca-7136/ps/20230207_fHUA79xpTfTtZPtw.jpeg',
           ),
        array(
            'id'=>2,
            'name'=>"The Cosmos(Den) Quan short kaki",
            'code'=>"ATGFG340",
            'old_price' => "445 713",
            'price'=>'398.000',
            'img' => 'https://img.cdn.vncdn.io/cdn-pos/d0f3ca-7136/ps/20230207_nSkfVziNdvxCkeLJ.jpeg',
        ),
        array(
            'id'=>3,
            'name'=>"The Cosmos(Den) Quan short kaki",
            'code'=>"ATGFG340",
            'old_price' => "",
            'price'=>'398 000',
            'img' => 'https://img.cdn.vncdn.io/cdn-pos/d0f3ca-7136/ps/20230110_OWYoFmcieRaZfJuA.jpeg',
            ),
        array(
            'id'=>4,
            'name'=>"The Cosmos(Den) Quan short kaki",
            'code'=>"ATGFG340",
            'old_price' => "456 210",
            'price'=>'3938 000',
            'img' => 'https://img.cdn.vncdn.io/cdn-pos/d0f3ca-7136/ps/20230110_OWYoFmcieRaZfJuA.jpeg',
            ),
    
    
    ));
?>

<div id="container">

<?php 

foreach ($products as $key => $value) { ?>
    <div style="background-color: #e67e22"class="title"> 
        <?php echo $key ?>
    </div>
    <div class="card-group">
            <?php 
            foreach ( $value as $k => $v ) {
                ?>
                <div class="card" id="card-item">
                <div id="fashion_img" class="card-img-top"><img src="<?php echo $v['img'] ?>"> </div>
                <div class="card-body">
                    <div id="name" class="card-title"><?php echo $v['name'] ?> </div>
                    <div id="code" style="text-align:center; class="card-title"><?php echo $v['code'] ?> </div>
                    <div id="price" style="text-align:center;color: red;"><?php echo $v['price'] ?> 
                    <span id="old_price" style="text-align:center;color: gray;"><strike><?php echo $v['old_price'] ?></strike></span>
                    </div>
                    <br><br>
                    <div id="button" style="text-align: center;" onclick ="return confirm('Thank you for order')"><button  style="text-align: center; background-color:orange; color:white" id="buy">Đặt mua</button></div>
                </div>
                </div>
        <?php }
            ?>
        
    </div>
<?php } ?>
</div>


</body>
</html>