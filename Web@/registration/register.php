<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration </title>
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
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
	<form method="post" action="register.php">		
			<div class="card">
				<div class="card-header bg-info"><h4 class="text-white text-center">Register</h4></div>
			</div>
			<div class="card-body bg-primary">
				<?php include('errors.php'); ?>	
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="form-group">
			<label>Address 1</label>
			<input type="text" class="form-control" name="address_1" value="<?php echo $address_1; ?>">
		</div>
		<div class="form-group">
			<label>Address 2</label>
			<input type="text" class="form-control" name="address_2" value="<?php echo $address_2; ?>">
		</div>
		<div class="form-group">
			<label>Mobile no.</label>
			<input type="tel"class="form-control" name="mobile" value="<?php echo $mobile; ?>">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password_1" class="form-control">
		</div>
		<div class="form-group">
			<label>Confirm password</label>
			<input type="password" name="password_2" class="form-control">
		</div>
			</div>
			<div class="card-footer bg-primary">
				<div class="form-group">
			<button type="submit" class="btn btn-outline-danger form-control" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php" class=" text-white" style="text-decoration: none;">Sign in</a>
		</p>
			</div>
			</form>	
			</div>
			<div class="col-md-3"></div>
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