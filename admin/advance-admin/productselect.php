﻿<?php session_start();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">COMPANY NAME</a>
            </div>

            <div class="header-right">

              <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>


            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php echo $_SESSION['user']?>
                            <br />
                                <small>hello:<?php echo $_SESSION['user']?></small>
                                <a href="logout.php">Logout</a>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a  href="index.html"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    
                    
                     <li>
                        <a href="#"><i class="fa fa-yelp "></i>Product <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
<li>
                                <a href="product.php"><i class="fa fa-flash "></i>Product</a>
                            </li>
                            <li>
                                <a href="selectproduct.php"><i class="fa fa-flash "></i>Product_list</a>
                            </li>
                            
                           
                        </ul>
                    </li>
                    
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Data Table</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kitchen Sink
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <?php
                                         include ('control.php');
                                         $get_data=new data();
                                         $select=$get_data->select_product();
                                         ?>
                                        <tr>
                                            <th>ID_product</th>
                                            <th>name</th>
                                            <th>number</th>
                                            <th>picture</th>
                                            <th>category</th>
                                            <th>date</th>
                                            <th>price</th>
                                            <th>description</th>
                                            <th colspan="2">option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach($select as $se)
                                    {
                                    ?>
                                    
                                   
                                        <tr>
                                            <td><?php echo $se['ID_Pro']; ?></td>
<td><?php echo $se['NamePro']; ?></td>
                                            <td><?php echo $se['NumberPro']; ?></td>
                                            <td><img  src="upload/<?php echo $se['picture']?>"
                                            width="50px" height="50px"></td>
                                            <td><?php echo $se['Picture']; ?></td>
                                            <td><?php echo $se['CategoryPro']; ?></td>
                                            <td><?php echo $se['DatePro']; ?></td>
                                            <td><?php echo $se['PricePro']; ?></td>
                                            <td><a href="product_delete.php?del=<?php echo $se['ID_Pro'];?>"
                                                 onclick="if(confirm('Bạn có chắc chắn muốn xoá?'))
                                                 return true; else return false;""> Delete</a></td>
                                           
                                            <td> <a href="product_update.php">Update</a></td>

                                        </tr>
                                        <?php
                                        }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                
                      <!-- End  Basic Table  -->
               
                     <!--  End  Bordered Table  -->
               
                </div>
            </div>
                <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
     <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>