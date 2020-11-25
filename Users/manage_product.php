<?php
ob_start();

include ('../includes/user-header.php');
include ('../config/db.php');

if(isset($_POST['insertdata'])){
  
  $image_name=$_FILES['img']['name'];
  $tmp_name= $_FILES['img']['tmp_name'];
  $img_type  = $_FILES['img']['type'];
  $allowed_type = array('image/png', 'image/gif', 'image/jpg', 'image/jpeg');
  

        $pro_name=$_POST['proname'];
        $pro_desc=$_POST['prdesc'];
        $userid= $_SESSION['Uid'];

        if(!in_array($img_type, $allowed_type)) {
            echo 'error';
           
        } 

  else {

    $path='images/'; 


 move_uploaded_file($tmp_name,$path.$image_name);
 $query="INSERT INTO products (product_name,U_id,descreption,product_image) values ('$pro_name','$userid','$pro_desc','$image_name')";

 mysqli_query($conn,$query);
 header('location:index.php');
  }
      }//isset
?>

<?php
//DELETE A PRODUCT
if(isset($_GET['idd'])){
    $id=$_GET['idd'];
    
    $query= "DELETE FROM products where product_id= {$id}";
    if(mysqli_query($conn,$query));
    //unlink($image_name);
   
    header('location:index.php');
    }

?>

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                           <div class="row">
                              <div class="col-lg-12">
                                
                                 <?php include ('add_pro.php'); ?>
                                            

                                                                                                
                              </div>
                           </div>
                     </div>
                 </div>
</div>

<!--list of products-->



<?php include ('../includes/user-footer.php'); ?>