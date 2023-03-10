<?php

error_reporting(0);
include("../connect.php");
include("../controller/getProduct.php");

$id = $_GET['id'];

// echo $id;

$getid = new GetProduct();
$allData = $getid->Product($id);

// echo json_encode($allData);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>

    <style>
        .product{
            width:1000px;
            margin:auto;
            text-align:center;
            background:#674846;
        }
        ul {
            list-style:none;
        }
        li{
            font-size:30px;
            color:#fff;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    
 <div class="product">
     <?php 
       foreach($allData as $data){
        ?>
          <ul>
            <li>PC Name : <?php echo $data['name'] ?></li>
            <li>The Price : <?php echo $data['price'] ?></li>
            <li>The old Price : <?php echo $data['price_old'] ?></li>
            <li>Notice : <?php echo $data['notice'] ?></li>
            <li>Content : <?php echo $data['content'] ?></li>
          </ul>
        <?php
       }
     ?>
 </div>

</body>
</html>