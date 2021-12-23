<?php
session_start();
// if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
//   header('location:../../index.php');
//   exit();
// }
    include('../../connection.php');
    $add_id =$_SESSION['add_id'];
    $booking_date="";
    $account="";
    $cnno="";
    $shipper_name="";
    $city="";
    $area="";
    $cells="";
    $shi_landline="";
    $shi_email="";
    $add_password="";
    $pickup_add="";
    $return_add="";
    $cong_name="";
    $cong_ref="";
    $cong_email="";
    $cong_cells="";
    $cong_address="";
    $orgin_city="";
    $dest_city="";
    $service_type="";
    $pices="";
    $weight="";
    $sel_consi="";
    $cons_districation = "";
    $consi_remarks="";
    $created_at="";
    $query = "select * from add_booking where  add_id = '$add_id'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
        $add_id = $row['add_id'];
        $booking_date = $row['booking_date'];
        $account = $row['account'];
        $cnno = $row['cnno'];
        $shipper_name = $row['shipper_name'];        
        $city = $row['city'];
        $area = $row['area'];
        $cells = $row['cells'];
        $shi_landline = $row['shi_landline'];
        $shi_email = $row['shi_email']; 
        $add_password = $row['add_password']; 
        $pickup_add = $row['pickup_add'];
        $return_add = $row['return_add'];
        $cong_name = $row['cong_name'];
        $cong_ref = $row['cong_ref'];
        $cong_email = $row['cong_email'];
        $cong_cells = $row['cong_cells'];
        $cong_address = $row['cong_address'];
        $orgin_city = $row['orgin_city']; 
        $dest_city = $row['dest_city'];
        $service_type = $row['service_type'];
        $pices = $row['pices'];
        $weight = $row['weight'];
        $sel_consi = $row['sel_consi'];
        $cons_districation = $row['cons_districation'];
        $consi_remarks = $row['consi_remarks'];
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
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['shipper_name'];?></h2>
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
                    
                      <li><a href="user_dashboard.php">Dashboard</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Booking <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                      <li><a href="view_booking.php">View Booking</a></li>
                      <li><a href="edit_booking.php">Edit Booking</a></li>
                      
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
                  <a href="admin_dashboard.php" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php echo $_SESSION['shipper_name'];?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profile.php"> Profile</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
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
                          Film festivals used to be do-or-die moments for movie makers. They were where...
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
                          Film festivals used to be do-or-die moments for movie makers. They were where...
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
                          Film festivals used to be do-or-die moments for movie makers. They were where...
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
                          Film festivals used to be do-or-die moments for movie makers. They were where...
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
        <div class="right_col" role="main" >
          <div class="">
          
          <div class="container text-secondary x_panel">
                                <form action=""  method="post" id="hidden_div" enctype="multipart/form-data">
                                <div class="clearfix">
                                <h4 class="h4">Add Account</h4>
                                </div>
                                <legend>Account</legend>
                                <div class="hidden">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Time</label>
                                            <input type="date" name="booking_date" class="form-control" >
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Account</label>
                                            <input type="number" name="account" class="form-control" value="<?php echo $account;?>" >
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>CNNO</label>
                                            <input type="number" name="cnno" class="form-control" value="<?php echo $cnno;?>" >
                                        </div>
                                    </div>
                                </div>
                                <div class="x_panel">
                                <legend>Sipper</legend>
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="shipper_name" class="form-control" value="<?php echo $shipper_name;?>" >
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" name="city" class="form-control" value="<?php echo $city;?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Area</label>
                                            <input type="text" name="area" class="form-control" value="<?php echo $area;?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Cells:</label>
                                            <input type="number" name="cells" class="form-control" value="<?php echo $cells;?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Landline</label>
                                            <input type="number" name="shi_landline" class="form-control" value="<?php echo $shi_landline;?>" >
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="shi_email" class="form-control"value="<?php echo $shi_email;?>"  >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                            <label>Pickup Address</label>
                                            <input type="text" name="pickup_add" class="form-control" value="<?php echo $pickup_add;?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Return Address</label>
                                            <input type="text" name="return_add" class="form-control" value="<?php echo $return_add;?>">
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
                                            <input type="text" name="cong_name" class="form-control" value="<?php echo $cong_name;?>" >
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Consignee Ref</label>
                                            <input type="text" name="cong_ref" class="form-control"  value="<?php echo $cong_ref;?>">
                                        </div>
                                    </div>
                                </div>
 
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="cong_email" class="form-control"  value="<?php echo $cong_email;?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Consignee Cells</label>
                                            <input type="number" name="cong_cells" class="form-control" value="<?php echo $cong_cells;?>" >
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="cong_address" class="form-control" value="<?php echo $cong_address;?>"  >
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
                                            <input type="text" name="orgin_city" class="form-control" value="<?php echo $orgin_city;?>" >
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Dest City</label>
                                            <input type="text" name="dest_city" class="form-control" value="<?php echo $dest_city;?>" >
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Service Type</label>
                                            <input type="text" name="service_type" class="form-control" value="<?php echo $service_type;?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Pices</label>
                                            <input type="text" name="pices" class="form-control"  value="<?php echo $pices;?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Weight/KGS</label>
                                            <input type="text" name="weight" class="form-control"  value="<?php echo $weight;?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sel_consi" id="inlineRadio1"  checked="checked" value="<?php echo $sel_consi;?>">
                                        <label class="form-check-label" for="inlineRadio1">Domestic</label>
                                        <input class="form-check-input" type="radio" name="sel_consi" id="inlineRadio2" value="<?php echo $sel_consi;?>">
                                        <label class="form-check-label" for="inlineRadio2">International</label>    
                                    </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Discription(Production)</label>
                                            <input type="text" name="cons_districation" class="form-control"  value="<?php echo $cons_districation;?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Remarks</label>
                                            <input type="text" name="consi_remarks" class="form-control"  value="<?php echo $consi_remarks;?>">
                                        </div>
                                    </div>
                                   
                                </div>
                                 </div>

                                <div class="row justify-content-center">
                                    <div class="col-md-5"></div>
                                    <div class="col-md-4">
                                    <button id="send" type="submit" class="btn btn-success" name="update">Update</button>
                                    <!-- <a href="" class='btn btn-info' onclick="printDiv('printArea')"><i class="fa fa-print"></i>Print Data</a> -->
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

	togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('fa-eye-slash');
	});
    </script>
  </body>
</html>
<?php
	if(isset($_POST['update'])){
		include('../../connection.php');
		$query = "update add_booking set account = $_POST[account] ,cnno = $_POST[cnno], shipper_name='$_POST[shipper_name]',city = '$_POST[city]',area = '$_POST[area]',cells = $_POST[cells],shi_landline = $_POST[shi_landline],shi_email = '$_POST[shi_email]',	pickup_add = '$_POST[pickup_add]',return_add = '$_POST[return_add]',cong_name = '$_POST[cong_name]',cong_ref = '$_POST[cong_ref]',cong_email = '$_POST[cong_email]',cong_cells = $_POST[cong_cells],cong_address = '$_POST[cong_address]',orgin_city = '$_POST[orgin_city]',dest_city = '$_POST[dest_city]',service_type = '$_POST[service_type]',pices = '$_POST[pices]',weight = '$_POST[weight]',sel_consi = '$_POST[sel_consi]',cons_districation = '$_POST[cons_districation]',consi_remarks = '$_POST[consi_remarks]' where add_id = '$_SESSION[add_id]'";
		$query_run = mysqli_query($connection,$query);
		// header("location:all_employee.php");
    echo "<script>location.href='all_booking.php'</script>";
	}
?>