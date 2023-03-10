
<?php

error_reporting(0);
include("../connect.php");
include("../controller/readData.php");
include("../controller/addData.php");
include("../controller/filter.php");




if(isset($_POST['position'])){
    $add = new addData();
    $add->Insert($_POST['position'],$_POST['url'],$_POST['name'],
    $_POST['articul'],$_POST['price'],$_POST['price_old'],
    $_POST['notice'],$_POST['content'],$_POST['visible'],);

    header("location:http://localhost/shogo/view/allproduct.php");
}


if(isset($_POST['name'],$_POST['maxprice'],$_POST['minprice']) ){
    // if(empty($_POST['name'])){

    // }else{
        $filter = new Filter();
        $get = $filter->filterdata($_POST['name'],$_POST['maxprice'],$_POST['minprice']);
       
    // }
  
}else{
    $dt = new readData();
    $get =  $dt->readData();
  
}






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
      table {
        border-collapse: collapse;
        margin:auto;
       }

        table, th, td {
            border: 1px solid;
        }
        td,th{
            padding:10px;
        }
        th{
            background:#FFEFD5;
        }

        input{
            width:50%;
            height: 30px ;
            margin:  5px auto;
            border-radius:10px;
            outline:none;
            border:none;
            padding:0 10px 0 10px;
        }

        textarea{
            border:none;
            border-radius:10px;
            outline:none;
        }
        .container{
            width:1000px;
            margin:auto;
        }
        form{
            width:800px;
            margin: 5px auto;
            background:#89CFF0;
            text-align:center;
            border-radius:10px;
           
        }

        .add{
            background:#007FFF;
            font-size:22px;
            outline:none;
            border-radius:10px;
            padding:5px 30px 5px 30px;
            color:#fff;
            border:none;
            margin:10px;
            cursor:pointer;
        }

        .search{
            background:#007FFF;
            font-size:12px;
            outline:none;
            border-radius:50%;
            padding:10px 10px 10px 10px;
            color:#fff;
            border:none;
            margin:10px;
            cursor:pointer;
        }
    </style>
</head>
<body>
    


    <div class="container">
       
       
          <form action="allproduct.php" method="POST">
            <input type="number" name="position" placeholder="Position">
            <input type="text" name="url" placeholder="url">
            <input type="text" name="name" placeholder="name">
            <input type="text" name="articul" placeholder="Articul">
            <input type="number" name="price" placeholder="price">
            <input type="number" name="price_old" placeholder="price_old">

            <input type="number" name="visible" placeholder="visible"><br>

            <textarea name="notice" id="" cols="25" rows="5" >

            </textarea>

            <textarea name="content" id="" cols="25" rows="5" >

            </textarea><br>

            

            <button class="add">send</button>
          </form>
       

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
          <form action="allproduct.php" method="POST">
             <input type="text" name="name" placeholder="search for product">
             <input type="number" name="maxprice" placeholder="Max price">
             <input type="number" name="minprice" placeholder="Min price"><br>
             <button class="search">search</button>
          </form>
    </div>





   <table>
    <tr>
        <th>Id</th>
        <th>position</th>
        <th>Url</th>
        <th>Name</th>
        <th>Articul</th>
        <th>Price</th>
        <th>Price_old</th>
        <th>Notice</th>
        <th>Content</th>
        <th>Visible</th>
    </tr>
  
   <?php

         foreach($get as $data){
    ?>
   <tr>
        <td><?php echo $data['id'] ?></td>
        <td><?php echo $data['position'] ?></td>
        <td><?php echo $data['url'] ?></td>
        <td><a href="http://localhost/shogo/view/product.php?id=<?php echo $data['id'] ?>"> <?php echo $data['name'] ?></td></a>
        <td><?php echo $data['articul'] ?></td>
        <td><?php echo $data['price'] ?></td>
        <td><?php echo $data['price_old'] ?></td>
        <td><?php echo $data['notice'] ?></td>
        <td><?php echo $data['content'] ?></td>
        <td><?php echo $data['visible'] ?></td>
    </tr>
    <?php
       }

    ?>
   </table>
      


</body>
</html>