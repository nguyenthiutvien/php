<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <?php 
    $product = 
    array (
    'Thoi trang nam' => array(
        array(
            'id'=>1,
            'name'=>"The Cosmos(Den) Quan short kaki",
            'code'=>"TC1025011BA",
            'price'=>'398.000',
            'old_price'=>'',
            'img' => 'https://img.cdn.vncdn.io/cdn-pos/d0f3ca-7136/ps/20230207_GMw1RF3phiVKvnsm.jpeg',
            
            ),
        array(
            'id'=>2,
            'name'=>"The Cosmos(Den) Quan short kaki",
            'code'=>"TC1025011BA",
            'price'=>'398.000',
            'old_price'=>'498.000',
            'img' => 'https://img.cdn.vncdn.io/cdn-pos/d0f3ca-7136/ps/20230207_6XkQ12bbX5EolJAc.jpeg',
            ),
      
      
        array(
            'id'=>3,
            'name'=>"The Cosmos(Den) Quan short kaki",
            'code'=>"TC1025011BA",
            'price'=>'398.000',
            'old_price'=>'',
            'img' => 'https://img.cdn.vncdn.io/cdn-pos/d0f3ca-7136/ps/20230110_z0K1U5mKWfTCi6Z3.jpeg',
            ),
            array(
                'id'=>4,
                'name'=>"The Cosmos(Den) Quan short kaki",
                'code'=>"TC1025011BA",
                'price'=>'398.000',
                'old_price'=>'',
                'img' => 'https://img.cdn.vncdn.io/cdn-pos/d0f3ca-7136/ps/20230207_6XkQ12bbX5EolJAc.jpeg',
                ),
        ),

    'Thoi trang nu' => array(
        array(
            'id'=>5,
            'name'=>"The Cosmos(Den) Quan short kaki",
            'code'=>"TC1025011BA",
            'price'=>'398.000',
            'old_price'=>'',
            'img' => 'https://img.cdn.vncdn.io/cdn-pos/d0f3ca-7136/ps/20230207_fHUA79xpTfTtZPtw.jpeg',
           ),
        array(
            'id'=>6,
            'name'=>"The Cosmos(Den) Quan short kaki",
            'code'=>"TC1025011BA",
            'price'=>'398.000',
            'old_price'=>'498.000',
            
            'img' => 'https://img.cdn.vncdn.io/cdn-pos/d0f3ca-7136/ps/20230207_nSkfVziNdvxCkeLJ.jpeg',
            ),
        array(
            'id'=>7,
            'name'=>"The Cosmos(Den) Quan short kaki",
            'code'=>"TC1025011BA",
            'price'=>'398 000',
            'old_price'=>'',
            'img' => 'https://img.cdn.vncdn.io/cdn-pos/d0f3ca-7136/ps/20230110_OWYoFmcieRaZfJuA.jpeg',
            ),
            array(
                'id'=>8,
                'name'=>"The Cosmos(Den) Quan short kaki",
                'code'=>"TC1025011BA",
                'price'=>'3938 000',
                'old_price'=>'555.000',
                'img' => 'https://img.cdn.vncdn.io/cdn-pos/d0f3ca-7136/ps/20230110_OWYoFmcieRaZfJuA.jpeg',
                ),
        
        
        ));

     
?>

<div id="content">
    
    <?php 
    
    foreach ($product as $key => $value) { ?>
        <div class="title"> 
            <?php echo $key ?>
    </div>
        <div class="card-group">
                <?php 
                foreach ( $value as $k => $v ) {
                    ?>
                    <div class="card" id="card-item">
                    <div id="phone_img" class="card-img-top"><img src="<?php echo $v['img'] ?>"> </div>
                    <div class="card-body">
                        <div id="name" class="card-title"><?php echo $v['name'] ?> </div>
                        <div id="code" style="text-align:center"; class="card-title"><?php echo $v['code'] ?> </div>
                        <div id="price" style="display:flex">
                        <div id="new_price" style="text-align:center;color: red;"><?php echo $v['price']."đ" ?></div>
                        <del id="old_price" style="text-align:center;color: red;margin-left: 85px"><?php echo $v['old_price'] ?></del>
                        </div>
                        <!-- <button style="text-align: center; background-color:orange; color:white"><a href=""onclick="return confirm('Thank you for order')"class="btn">Đặt hàng</a></button> -->
                        <div id="button" style="text-align: center;"  onclick="return confirm('Thank you for order')"><button  style="text-align: center; background-color:orange; color:white" id="buy">Đặt mua</button></div>
                    </div>
                    </div>
            <?php }
                ?>
            
        </div>
    <?php } ?>
</div>
</body>
</html>