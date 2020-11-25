<?php
ob_start();
include ('../includes/user-header.php');

include ('../config/db.php');?>

<head>
<style>
.detail{
color:100px;
font-size:30px;
}

.lable{
color:blue;
font-size:20px;
}
</style>
</head>
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">

<?php



if(isset($_GET['idview'])){
    $id=$_GET['idview'];
    $query= "SELECT * FROM products where product_id= {$id}";
    if($result=mysqli_query($conn,$query));
   
      // echo  '<br><br><br><br><br><br><br> ';                                  
  while($pro= mysqli_fetch_assoc($result)){
       echo "<div class='container'>";
       echo "<div class='row'>";
       echo "<div class='col-6'>";
    echo "<div><img src='images/{$pro['product_image']}' style='width:400px;border-radius: 25%;'></div>";
    echo "</div>"; //col
    echo "<div class='col-6'>";
    echo  "<div>Pro ID:{$pro['product_id']}</div><br>"; 
    echo"<div class='lable'> Product Name: </div>";
    echo "<br><div class='detail'>{$pro['product_name']}</div><br><br>";
    echo"<div class='lable'>Descreption Of Product: </div>";
    echo  "<div class='detail'>{$pro['descreption']}</div>";
   echo "<div>";//col
   echo "<div>";//row
   echo "<div>";//cont
   echo "</div>";
   // header('location:manage_product.php');
    }
}

?>

</div>
</div>
</div>
</div>
</div>
<br><br><br><br><br>
<?php include ('../includes/user-footer.php'); ?>
