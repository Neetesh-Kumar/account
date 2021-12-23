<?php
				session_start();
				if(isset($_POST['login'])){
          include('connection.php');
					$query = "select * from admin where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
                	$_SESSION['id'] = $row['id'];
								$_SESSION['name'] = $row['name'];
								$_SESSION['email'] = $row['email'];
								header("Location:Admin/production/admin_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password</span></center>
								<?php
							}
						}
					}
				}
			?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Login #3</title>
    
     <style>
		.text-color{
			color: rgb(255, 115, 0) !important;
		}
    .select-role .btn-group .btn.active, .select-role .btn-group .btn.active:focus, .select-role .btn-group .btn.focus.active {
    background-color: rgba(27,0,255,.05);
    border-color: rgba(27,0,255,.5);
    color: #1b00ff;
}

.select-role .btn-group .btn .icon {
    position: absolute;
    left: 15px;
    width: 30px;
    height: 30px;
    top: 50%;
    margin-top: -15px;
}
.select-role .btn-group .btn {
    margin: 0 5px;
    border: 1px solid #d4d4d4;
    text-align: left;
    padding-left: 60px;
    padding-top: 10px;
    padding-bottom: 10px;
    width: calc(50% - 10px);
    border-radius: 5px!important;
    font-size: 16px;
    line-height: 1.3;
    font-weight: 700;
    color: #333;
    position: relative;
}

@media (max-width:768px){
    .div_to_hide_on_mobile{
        display:none;
    }
}
    </style>
  </head>
  <body>
  

  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
              <h3>Login as <strong>Admin</strong></h3>
            <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
                
                <div class="row">
                    <div class="col-md-6">
                        <a href="" class="btn btn-block btn-primary p-2" style="color:black; text-decoration:none;">
                            Admin
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="user_index.php" class="btn btn-block btn-outline-warning p-2" style="color:black; text-decoration:none;">
                            User
                        </a>
                    </div>
                </div>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form action="#" method="post">
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" placeholder="your-email@gmail.com" id="username" name="email">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Your Password" id="password" name="password">
                </div>
               

                <input type="submit" value="Log In" name="login" class="btn btn-block btn-primary">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>