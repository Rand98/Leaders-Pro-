<?php
ob_start();
include ('../includes/user-header.php');
include ('../config/db.php');

if(isset($_POST['sub'])){
   
    $image_name=$_FILES['img']['name'];
    $tmp_name= $_FILES['img']['tmp_name'];
    $path='images/'; 
    move_uploaded_file($tmp_name,$path.$image_name);

        $pro_name= $_POST['proname'];
        $pro_desc=$_POST['descr'];
        $x=$_GET['id'];

$query="UPDATE products SET product_name='$pro_name',
descreption  ='$pro_desc',
product_image ='$image_name'

WHERE product_id =$x";

mysqli_query($conn,$query);
header("location:index.php");

}


$query="SELECT * FROM products where product_id= {$_GET['id']}";

$result=mysqli_query($conn,$query);
$pro=mysqli_fetch_assoc($result);
$x=$_GET['id'];


?>




<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Update Prodact</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Ediet Product</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post"  enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Product Name</label>
                                                <input id="cc-name" name="proname" type="text" class="form-control" required value="<?php echo $pro['product_name'] ;?>">
                                            </div>
                                           
                                            
                                            
                                            <div class="form-group">
                                                <label for="cc-area" class="control-label mb-1">Discreption</label>
                                                <input type="text" id="cc-name" name="descr" required class="form-control"  value="<?php echo $pro['descreption'] ;?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-image" class="control-label mb-1">Product image</label>
                                                <input id="cc-img" name="img" type="file" required class="form-control" aria-required="true" value="" >
                                            </div>
                                                
                    
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="sub" >
                                                    
                                                    <span id="payment-button-amount">Update</span>
                                                    
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
</div>
</div>
</div>
</div>
<?php include ('../includes/user-footer.php'); ?>