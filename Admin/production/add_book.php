<?php
session_start();
if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
  header('location:../../index.php');
  exit();
}
?>
<?php
include('../../connection.php');
 $last_nmbr = '';
 $query = "select * from add_booking order by add_password desc limit 1";
 
 $stmt = $connection->query($query);
   if(mysqli_num_rows($stmt) > 0) {
       if ($row = mysqli_fetch_assoc($stmt)) {
           $last_nmbr = $row['add_password'];
           $last_nmbr = substr($last_nmbr, 5, 8);//separating numeric part
           $last_nmbr = $last_nmbr + 1;//Incrementing numeric part
           $last_nmbr = "user" . sprintf('%04s', $last_nmbr);//concatenating incremented value
           $add_password = $last_nmbr;
       }
   } 
   else {
       $last_nmbr = "user0001";
       $add_password = $last_nmbr;
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
    <style>
    .hidden {
        display: none;
    }
    </style>
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
                <div class="">

                    <div class="container text-secondary x_panel">
                        <form action="create_book.php" method="post" id="hidden_div" enctype="multipart/form-data">
                            <div class="clearfix">
                                <h4 class="h4">Add Account</h4>
                            </div>
                            <legend>Account</legend>
                            <div class="hidden">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Time</label>
                                            <input type="date" name="booking_date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Account</label>
                                        <input type="number" name="account" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>CNNO</label>
                                        <input type="number" name="cnno" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="x_panel">
                                <legend>Sipper</legend>
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="shipper_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" name="city" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Area</label>
                                            <input type="text" name="area" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Cells:</label>
                                            <input type="number" name="cells" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Landline</label>
                                            <input type="number" name="shi_landline" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="shi_email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Pickup Address</label>
                                            <!-- <input type="text" name="pickup_add" class="form-control"> -->
                                            <textarea class="form-control" name="pickup_add"
                                                id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Return Address</label>
                                            <!-- <input type="text" name="return_add" class="form-control"> -->
                                            <textarea class="form-control" name="return_add"
                                                id="exampleFormControlTextarea1" rows="3"></textarea>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="x_panel">
                                <legend>Consignee Name</legend>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Consigue Name</label>
                                            <input type="text" name="cong_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Consignee Ref</label>
                                            <input type="text" name="cong_ref" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="cong_email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>User Id</label>
                                                <input type="text" name="add_password" id="add_password"
                                                    class="form-control" value="<?php echo $add_password; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Consignee Cells</label>
                                            <input type="number" name="cong_cells" class="form-control">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" name="cong_address"
                                                id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="x_panel">
                                <legend>Consignment</legend>
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Orgin City</label>
                                            <input type="text" name="orgin_city" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Dest City</label>
                                            <select class="form-control" name="dest_city">
                                                <option>-Select City</option>
                                                <option>Karachi</option>
                                                <option>Lahore</option>
                                                <option>Islamabad</option>
                                                <option>Rawalpandi</option>
                                                <option>Sukkur</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Service Type</label>
                                            <select class="form-control" name="service_type">
                                                <option>-Select Type</option>
                                                <option>COD</option>
                                                <option>Overland COD</option>
                                                <option>Zero COD</option>
                                                <option>Not Selected</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Pices</label>
                                            <input type="text" name="pices" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Weight/KGS</label>
                                            <input type="text" name="weight" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sel_consi"
                                                id="inlineRadio1" value="Domestic" checked="checked">
                                            <label class="form-check-label" for="inlineRadio1">Domestic</label>
                                            <input class="form-check-input" type="radio" name="sel_consi"
                                                id="inlineRadio2" value="International">
                                            <label class="form-check-label" for="inlineRadio2">International</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Discription(Production)</label>
                                            <input type="text" name="cons_districation" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Remarks</label>
                                            <textarea class="form-control" name="consi_remarks"
                                                id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Remarks</label>
                                                <input type="text" name="created_at" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-5"></div>
                                <div class="col-md-4">
                                    <button id="send" type="submit" class="btn btn-success" name="login">Book
                                        Now</button>
                                    <a href="" class='btn btn-info' onclick="printDiv('printArea')"><i
                                            class="fa fa-print"></i>Print Data</a>
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="clearfix"></div>

                </div>
            </div>

            <!-- /page content -->

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
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function(e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye / eye slash icon
        this.classList.toggle('fa-eye-slash');
    });
    </script>
</body>

</html>