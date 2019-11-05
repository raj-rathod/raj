
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
  <div id="password">
   <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
      <form method="post" action="login.php">
        <div class="card">
          <div class="card-header bg-info">
            <h2 class="text-white text-center">Reset password</h2>
          </div>
          <div class="card-body bg-primary">
              <?php include('errors.php'); ?>
            <div class="form-group">
              <label>New password</label>
                  <input type="password" class="form-control" name="password1" placeholder="eg.rajesh@fts" >
               </div>
                <div class="form-group">
                  <label>Re-enter password</label>
                 <input type="password" class="form-control" name="password2" placeholder="eg.rajesh@fts">
                 </div>
          </div>
          <div class="card-footer bg-primary">
            <div class="form-group">
      <button type="submit" class="btn" id="password-1" name="reset">Reset</button>
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