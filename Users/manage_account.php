<?php
ob_start();
include ('../includes/user-header.php');
include ('../config/db.php');

if(isset($_POST['edittdata'])){

        $full_name= $_POST['username'];
        $useremail=$_POST['email'];
        $user_pass=md5($_POST['pass']);
        $date=$_POST['date'];  
        $x=$_SESSION['Uid'];

$query="UPDATE users SET fullname='$full_name',
user_email  ='$useremail',
user_pass  ='$user_pass',
dateofbirth ='$date'
WHERE user_id =$x";

mysqli_query($conn,$query);
header("location:index.php");

}

//fetch old Data

$query="SELECT * FROM users where user_id= {$_SESSION['Uid']}";

$result=mysqli_query($conn,$query);
$pro=mysqli_fetch_assoc($result);
$x=$_GET['id'];


?>



<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                
                         <?php include ('edit_account.php'); ?>
                                            

                                                                                                
                                    </div>
</div>
                               </div>
                       </div>
                 </div>

<!--list of products-->



<?php include ('../includes/user-footer.php'); ?>