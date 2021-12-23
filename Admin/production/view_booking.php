<?php
	session_start();
    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
      header('location:../../index.php');
      exit();
  }
    include('../../connection.php');

    $query = "select * from add_booking where add_id = '$_GET[aid]'";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
            extract($row);
        }
            
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella
                                Alela!</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2><?php echo $_SESSION['name'];?></h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">

                                        <li><a href="admin_dashboard.php">Dashboard</a></li>

                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i> Booking <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="add_book.php">Add Booking</a></li>
                                        <li><a href="form_advanced.html">Bulk Upload</a></li>
                                        <li><a href="form_validation.html">Booking History</a></li>
                                        <li><a href="form_wizards.html">Bucket Booking</a></li>

                                    </ul>
                                </li>

                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="admin_dashboard.php" class="user-profile dropdown-toggle"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/img.jpg" alt=""><?php echo $_SESSION['name'];?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="profile.php"> Profile</a></li>
                                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                    <li>
                                        <a>
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="" id="printArea">
                    <div class="x_panel">
                        <div class="container-fluid">
                            <div class="container" style=" border: 1px solid #ccc; border-radius: 1px;">
                                <div class="row text-center">
                                    <div class="col-md-12">
                                        <h1>
                                            CONSIGNEE COPY
                                        </h1>
                                        <h5>For Delivery Services You Can Cell Us +92300444</h5>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3">
                                        <div class="first" style="padding-left:10px;">
                                            <img src="./images/logo.png" alt="" width="200px" height="90px"
                                                class="img-fluid">
                                            <p>Shipper</p>
                                            <p>City</p>
                                            <p>Customer Ref#</p>
                                            <p>Product Details</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="second">
                                            <img src="./images/code.png" alt="" width="200px" height="90px"
                                                class="img-fluid">
                                            <p><?php echo $shipper_name;?></p>
                                            <p><?php echo $city;?></p>
                                            <p></p>
                                            <br>

                                            <p>1Yrs</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Date</p>
                                                <p>Services</p>
                                                <p>Fangile</p>
                                                <p>Origin</p>
                                                <p>COD Account PKR</p>
                                                <p>Conignee</p>
                                                <p>Contact</p>
                                                <p>Address</p>
                                                <p>Remarks</p>
                                            </div>
                                            <div class="col-md-3">
                                                <p><?php echo $booking_date;?></p>
                                                <p><?php echo $service_type;?></p>
                                                <p><?php echo $city;?></p>
                                                <p><?php echo $orgin_city;?></p>
                                                <p><?php echo $city;?></p>
                                                <p><?php echo $cong_name;?></p>
                                                <p><?php echo $cong_cells;?></p>
                                                <p><?php echo $cong_address;?></p>
                                                <p><?php echo $consi_remarks;?></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p>Time</p>
                                                <p>Weight</p>
                                                <p>Pieces</p>
                                                <p>Dest</p>
                                                <p>Desh In Value</p>
                                            </div>
                                            <div class="col-md-3">
                                                <p><?php echo $created_at;?></p>
                                                <p><?php echo $weight;?></p>
                                                <p><?php echo $pices;?></p>
                                                <p><?php echo $dest_city;?></p>
                                                <p><?php echo $city;?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>

                        <!-- Account copy -->

                        <div class="container-fluid">
                            <div class="container" style=" border: 1px solid #ccc; border-radius: 1px;">
                                <div class="row text-center">
                                    <div class="col-md-12">
                                        <h1>
                                            ACCOUNT COPY
                                        </h1>
                                        <!-- <h5>For Delivery Services You Can Cell Us +92300444</h5> -->
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3">
                                        <div class="first" style="padding-left:10px;">
                                            <img src="./images/logo.png" alt="" width="200px" height="90px"
                                                class="img-fluid">
                                            <p>Shipper</p>
                                            <p>City</p>
                                            <p>Customer Ref#</p>
                                            <p>Product Details</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="second">
                                            <img src="./images/code.png" alt="" width="200px" height="90px"
                                                class="img-fluid">
                                            <p><?php echo $shipper_name;?></p>
                                            <p><?php echo $city;?></p>
                                            <p></p>
                                            <br>

                                            <p>1Yrs</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Date</p>
                                                <p>Services</p>
                                                <p>Fangile</p>
                                                <p>Origin</p>
                                                <p>COD Account PKR</p>
                                                <p>Conignee</p>
                                                <p>Contact</p>
                                                <p>Address</p>
                                                <p>Remarks</p>
                                            </div>
                                            <div class="col-md-3">
                                                <p><?php echo $booking_date;?></p>
                                                <p><?php echo $service_type;?></p>
                                                <p><?php echo $city;?></p>
                                                <p><?php echo $orgin_city;?></p>
                                                <p><?php echo $city;?></p>
                                                <p><?php echo $cong_name;?></p>
                                                <p><?php echo $cong_cells;?></p>
                                                <p><?php echo $cong_address;?></p>
                                                <p><?php echo $consi_remarks;?></p>
                                            </div>
                                            <div class="col-md-3">
                                                <p>Time</p>
                                                <p>Weight</p>
                                                <p>Pieces</p>
                                                <p>Dest</p>
                                                <p>Desh In Value</p>
                                            </div>
                                            <div class="col-md-3">
                                                <p><?php echo $created_at;?></p>
                                                <p><?php echo $weight;?></p>
                                                <p><?php echo $pices;?></p>
                                                <p><?php echo $dest_city;?></p>
                                                <p><?php echo $city;?></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>




                        <!-- Account Copy Close -->
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5"></div>
                    <div class="col-md-4">
                        <a href="" class='btn btn-info' onclick="printDiv('printArea')"><i class="fa fa-print"></i>Print
                            Data</a>
                    </div>
                </div>

                <!-- /page content -->

                <!-- footer content -->

                <!-- /footer content -->
            </div>
        </div>

        <!-- jQuery -->
        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="../vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="../vendors/nprogress/nprogress.js"></script>
        <!-- iCheck -->
        <script src="../vendors/iCheck/icheck.min.js"></script>
        <!-- Datatables -->
        <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
        <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
        <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
        <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
        <script src="../vendors/jszip/dist/jszip.min.js"></script>
        <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
        <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.3.1/jquery.maskedinput.min.js"
            integrity="sha512-D30F0yegJduD5FxOxI3qM1Z0YrbtXE3YLoyNDYvps4Qq63Y0l/ObPmjlsj27pgFx8mLdMQ24I3gGtdYZO741HQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
        </script>

</body>

</html>