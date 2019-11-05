<?php include('server1.php')
 ?>
 <?php 
    if(!isset($_SESSION["gid"])){
       header("location:gm.php");
     } 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>General Manager profile</title>
	 <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
     <link rel="stylesheet" type="text/css" href="../fo/css/all.min.css">
     <link rel="stylesheet" type="text/css" href="../css/jquery.bxslider.min.css">
     <link rel="stylesheet" type="text/css" href="../css/owl.carousel.min.css">
     <link rel="stylesheet" type="text/css" href="../css/owl.theme.default.min.css">
     <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
   <nav class="navbar navbar-expand-sm bg-dark navbar-dark  fixed-top">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="../image/icon.png" alt="logo">
  </a>
   <h1 class="name"> F T S</h1>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <li id="db"><a href="#" class="dropdown-toggle nav-link text-white" data-toggle="dropdown"><h5><i class="far fa-user"></i> <?php echo "Hi,".$_SESSION["gmname"]; ?></h5></a>
                                <!-- dropdown box  -->
                     <div class="dropdown-menu dropdown-menu-right " style="width:250px;">
                         <a href="#"class="dropdown-item " id="gmp1"><i class="fas fa-store"></i> &nbsp;Your account</a>
                         <a href="#"class="dropdown-item " id="seller1"><i class="fas fa-cube"></i> &nbsp; Your Seller</a>
                         <a href="#"class="dropdown-item " id="wallet1"><i class="fas fa-wallet"></i> &nbsp; Wallet</a>  
                        <div class="dropdown-divider"></div>
                        <p class="text-center" style="height: 30px; line-height:30px;"><small>please fill your details here</small></p>
                        <a href="../registration/logout.php"class="dropdown-item text-center bg-danger"><i class="far fa-user"></i> &nbsp; LOG OUT</a>
                   </div>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="#"><h5> Benifits</h5></a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="#"><h5> Make money</h5></a>
    </li>
    </ul>
   </nav>
  
<div id="gmp" class="container-fluid" style="margin-top: 75px;">
  <div class="row"> 
    <div class="col-md-2"></div>
     <div class="col-md-8">
      <div id="gmp-1"></div>
     </div>
      <div class="col-md-2"></div>
  </div>
</div>
<div id="gm_seller" class="container-fluid" style="margin-top: 75px;">
  <div class="card"> 
    <div class="card-header bg-info">
      <div class="row">
        <div class="col-md-2">Seller Name</div>
        <div class="col-md-2">Mobile</div>
        <div class="col-md-2">Address</div>
        <div class="col-md-2">Total Earn</div>
        <div class="col-md-2">FTS TAX</div>
        <div class="col-md-2">YOUR amount</div> 
      </div>
    </div>
    <div id="seller-1"></div>
  </div>
</div>

	<!---- footer===--->
  <div class="jumbotron bg-dark">
  <div class="card-group">
    <div class="card bg-dark">
     <ul> 
        <h4 class="follow" > Follow us </h4>
        <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i> Facebook </a></li>
        <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
        <li><a href="#"><i class="fab fa-twitter-square"></i> Twitter </a></li>    
        <li><a href="#"><i class="fab fa-google-plus-square"></i> Google+</a></li>
     </ul>
    </div>
    <div class="card bg-dark">
       <ul> 
          <h4 class="follow" > Contact us </h4>
         <li><a href="mailto:rajeshrathore05011998@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> Gmail</a></li>
         <li> <span id="add">       
            <i class="fa fa-phone" aria-hidden="true"></i> +919148002717<br>
            <i class="fa fa-phone" aria-hidden="true"></i> +918708155131<br>
            <i class="fa fa-phone" aria-hidden="true"></i> +919140638845<br>
            <i class="fa fa-phone" aria-hidden="true"></i> +917338151015
          </span> 
        </li>
        <span id="add">
         <h6> Address:</h6>
         <h7>BTI ROAD  WARD N-11  SHANTI NAGAR BHIND (MP)<br>PIN-477001 </h7>
        </span>
      </ul>
     </div>
      <div class="card bg-dark">
           <ul> 
              <h4 class="follow" >About Us</h4>
           </ul>
     </div>
       <div class="card bg-dark">
         <ul> 
            <h4 class="follow" >Information</h4>
         </ul>
       </div>
  </div>
     <p class="copy text-white">
      Copy Right <strong>&copy</strong>-2018..
     </p>
</div>  




      
      <script type="text/javascript" src="../js/jquery-ui.js"></script>
      <script type="text/javascript" src="../js/jquery.js"></script>
      <script type="text/javascript" src="../js/jquery.bxslider.min.js"></script>
      <script type="text/javascript" src="../js/owl.carousel.min.js"></script>
      <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript" src="../js/bootstrap.min.js"></script>
      <script type="text/javascript" src="../fo/js/all.min.js"></script>
      <script type="text/javascript" src="js/main.js"></script>


</body>
</html>