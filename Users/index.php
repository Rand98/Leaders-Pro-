<?php  
session_start();
if(!isset($_SESSION['Uid'])){
header('location:login.php');
}
include ('../config/db.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    
    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                        <li>
                            <a href="manage_product.php">
                                <i class="fas fa-chart-bar"></i>Manage product</a>
                        </li>
                        
                        
                  
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        
                    
                        <li>
                            <a href="manage_product.php">
                                <i class="fas fa-chart-bar"></i>Add product</a>
                        </li>
                        <li>
                            <a href="manage_account.php">
                                <i class="fas fa-chart-bar"></i>Edit Account</a>
                        </li>

                        
                 <!--       <li>
                            <a href="manage_category.php">
                                <i class="fas fa-chart-bar"></i>Manage Category</a>
                        </li> 
                        <li>
                            <a href="manage_repositry.php">
                                <i class="fas fa-chart-bar"></i>Manage repositry</a>
                        </li>-->
                        
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu"> 
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        
                                       
                                        <div class="email-dropdown js-dropdown">
                                           
                                            
                                                                                            
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                         <!--   <img src="images/icon/avatar-01.jpg" alt="John Doe" />-->
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['Uname']; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                          <!--      <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>-->
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $_SESSION['Uname']; ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $_SESSION['Uemail']; ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                           <!--     <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>-->
                                             <!--   <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>-->
                                             <!--   <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>-->
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-11 col-lg-11">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                            <h2>
                                                
                                            <?php echo $_SESSION['Uname']; ?>
                                            </h2>
                                                <span>Email :</span>
                                                <h2>
                                                
                                                
                                            <?php 
                                            
                                            
                                            $user_id= $_SESSION['Uid'];
                                            $query="SELECT dateofbirth from users where user_id= $user_id";
                                            $result=mysqli_query($conn,$query);
                                            
                                            while($pro= mysqli_fetch_assoc($result)){
                                                $date= $pro['dateofbirth'];
                                               // echo $date;
                                              //  $today= date("Y-M-D");
                                               // $diff = date_diff(date_create($date),date_create($today));
                                               // echo $diff;
                                                 // echo '<br>';
                                                $date2=date_create($date);
                                                $date1=date_create(date('Y-m-d'));
                                                $diff=date_diff($date2,$date1);
                                                echo  $diff->y .'<span> years </span>'.$diff->m .'<span> months </span>'.$diff->d .'<span> days </span>';
                                               
                                           
                                            }
                                            
                                            ?> 
                                        
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                            
                            
                    <!--    <div class="row" >
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">-->
                                        
   <!-- #################################  Table Of Products  ####################################### -->                      
                      <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      <div class="row m-t-30">
                            <div class="col-md-12">
                            
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <h2>List Of Products</h2>
                                        <thead>
                                            <tr>
                                                <th>pro-id</th>
                                                <th>Name</th>
                                                <th>description</th>
                                                <th>pro-image</th>
                                                <th>View - Edit -Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                            
                                            
                                            $user_id= $_SESSION['Uid'];
                                            $query="SELECT * FROM products where U_id= $user_id";
                                            $result=mysqli_query($conn,$query);
                                            
                                            while($pro= mysqli_fetch_assoc($result)){
                                            
                                               
                                                
                                         echo ' <tr>';
                                         echo  "<td>{$pro['product_id']}</td>";
                                         echo "<td>{$pro['product_name']}</td>";
                                         echo  "<td>{$pro['descreption']}</td>";
                                         echo "<td><img src='images/{$pro['product_image']}' style='width:64px;border-radius: 25%;'></td>";
                                           
                                         echo  "<td><a href='view_product.php?idview={$pro['product_id']}'><i class='fas fa-eye' style='font-size:36px;color:green'></i></a>
                                         <a href='ediet_product.php?id={$pro['product_id']}'><i class='fa fa-edit' style='font-size:36px'></i></a>
                                         <a href='manage_product.php?idd={$pro['product_id']}' ><i class='fas fa-trash' style='font-size:36px;color:red'></i></a>
                                         </td>";
                                         
                                         
                                         
                                          
                                              
                                          echo  '</tr>';
                                            } 
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
<!--</div>
</div>
</div>-->

                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->