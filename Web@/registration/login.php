 <?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE</title>
	<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
	   <link rel="stylesheet" type="text/css" href="../fo/css/all.min.css">
	   <link rel="stylesheet" type="text/css" href="../css/jquery.bxslider.min.css">
	   <link rel="stylesheet" type="text/css" href="../css/owl.carousel.min.css">
	   <link rel="stylesheet" type="text/css" href="../css/owl.theme.default.min.css">
	   <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	   <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container-fluid" style="margin-top: 50px">
    <div id="login-1">
    <div class="row">
    	<div class="col-md-3"></div>
    	<div class="col-md-6">
    	<form method="post" action="login.php">
    		<div class="card">
    			<div class="card-header bg-info">
    				<h2 class="text-white text-center">Login</h2>
    			</div>
    			<div class="card-body bg-primary">
    					<?php include('errors.php'); ?>
    				<div class="form-group">
			          <label>Username</label>
			           <input type="text" class="form-control" name="username" >
		            </div>
		            <div class="form-group">
			           <label>Password</label>
		            	<input type="password" class="form-control" name="password">
		             </div>
    			</div>
    			<div class="card-footer bg-primary">
    				<div class="form-group">
			<button type="submit" class="btn" name="login_user">Login</button>
			<a href="#" class="btn  btn-outline-dark text-white" id="forget">Forget password</a>
		</div>
		<p>
			Not yet a member? <a href="register.php" class="text-white" style="text-decoration: none;">Sign up</a>
		</p>
    			</div>
    		</div>
    	</form>	
    	</div>
    	<div class="col-md-3"></div>
    </div>
	</div>
  <div id="forgot">
   <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
      <form method="post" action="login.php">
        <div class="card">
          <div class="card-header bg-info">
            <h2 class="text-white text-center">Forgot password</h2>
          </div>
          <div class="card-body bg-primary">
              <?php include('errors.php'); ?>
            <div class="form-group">
                <label>Username</label>
                 <input type="text" class="form-control" name="username" >
                </div>
                <div class="form-group">
                 <label>Enter register mobile number</label>
                <input type="tel" name="mobile" class="form-control" placeholder="9148002717">
                 </div>
          </div>
          <div class="card-footer bg-primary">
            <div class="form-group">
      <button type="submit" class="btn" id="forgot-1" name="forgot">Submit</button>
    </div>
          </div>
        </div>
      </form> 
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>   
</div>
   <script type="text/javascript" src="../js/jquery-ui.js"></script>
      <script type="text/javascript" src="../js/jquery.js"></script>
      <script type="text/javascript" src="../js/jquery.bxslider.min.js"></script>
      <script type="text/javascript" src="../js/owl.carousel.min.js"></script>
      <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript" src="../js/bootstrap.min.js"></script>
      <script type="text/javascript" src="../fo/js/all.min.js"></script>
      <script type="text/javascript" src="../js/main.js"></script>
</body>
</html>