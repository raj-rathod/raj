 <?php
 session_start();
if(!isset($_SESSION["uid"])){
  header("location:../");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>FREE TIME SHOP</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
	   <link rel="stylesheet" type="text/css" href="../fo/css/all.min.css">
     <link rel="stylesheet" type="text/css" href="../css/jquery.exzoom.css">
	   <link rel="stylesheet" type="text/css" href="../css/jquery.bxslider.min.css">
	   <link rel="stylesheet" type="text/css" href="../css/owl.carousel.min.css">
	   <link rel="stylesheet" type="text/css" href="../css/owl.theme.default.min.css">
	   <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	   <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	   <link rel="stylesheet" type="text/css" href="css/style.css">
</head>  
<body>
  <div class="wrapper">
  	<!-- navigation bar--->
	 <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><img src="../image/icon.png"></a>
  <h1 class="name"> F T S</h1>
  <div class="search-area">
           <!-- ////// this is for category====///////---->
                   
      </div>
            <!-- user menu -->
           <div class="user-menu">
               <ul> 
                   <li id="db"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="far fa-user"></i> <?php echo "Hi,".$_SESSION["username"]; ?></a>
                                <!-- dropdown box  -->
                             <div class="dropdown-menu dropdown-menu-right bg-dark" style="width:250px;">
                                 <a href="#"class="dropdown-item accnt"><i class="far fa-user"></i> &nbsp;Your Account</a>
                                 <a href="#"class="dropdown-item order"><i class="fas fa-cube"></i> &nbsp; Your Order</a>
                                     <a href="#"class="dropdown-item"><i class="far fa-heart"></i> &nbsp; Wishlist</a>
                                     <a href="#"class="dropdown-item"><i class="fas fa-gift"></i> &nbsp; Gift Card</a>
                                     <div class="dropdown-divider"></div>
                                      <p class="text-center text-white" style="height: 30px; line-height:30px;"><small>please fill your details here</small></p>
                                      <a href="../"class="dropdown-item text-center bg-danger"><i class="far fa-user"></i> &nbsp; LOG OUT</a>
                              </div>          
                   </li>
                            <li><a href="#"  id="cart"  class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-shopping-cart"></i> Cart <span class="badge bg-danger">0</span> </a>
                            <div class="dropdown-menu dropdown-menu-right " style="width:650px;">
                               <div class="card">
                                 <div class="card-header bg-info ">
                                   <div class="row">
                                     <div  id="bd" class="col-md-3"><h5>SI.NO</h5></div>
                                     <div  id="bd" class="col-md-3"><h5>Product Image</h5> </div>
                                     <div  id="bd" class="col-md-3"><h5>Product Name</h5></div>
                                     <div  id="bd" class="col-md-3"><h5>Price.</h5></div>
                                   </div>
                                 </div>
                                 <div class="card-body">
                                     <div id="cart_pro">
                                       <!--fetch data--by ajax--->
                                      </div>
                                 </div>
                                  <div class="card-footer bg-info">
                                     <a href="cart.php" id="edit" class="btn btn-success" style="width:120px;"><i class="fas fa-shopping-cart"></i> View cart</a>
                                  </div>
                                </div>
                             </div>  

                            </li>
                          </ul>
              
</nav>
</div>
<div id="sell" class="alert alert-warning">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div id="cart_msg"></div>
    </div>
  </div>
  <div class="card text-dark">
   <div class="card-header bg-info">
     <div class="row">
       <div class="col-md-1"><b>Action</b></div>
       <div class="col-md-2"><b>Product Name</b></div>
       <div class="col-md-2"><b>Product Image</b></div>
       <div class="col-md-1"><b>Payment</b></div>
       <div class="col-md-1"><b>Quantity</b></div>
       <div class="col-md-1"><b>Price</b></div>
       <div class="col-md-2"><b>F T S ID</b></div>
       <div class="col-md-2"><b>Order Status</b></div>
     </div>
   </div>
    <div id="u_order"></div>
  </div>
</div>
</div>
<div id="accnt" class="row">
  <div class="col-md-3"></div>
   <div class="col-md-3"></div>
  <div class="col-md-6">
  <div class="alert alert-dark alert-dismissible">
       <button type="button" class="close" data-dismiss="alert">&times;</button>
  <div id="accnt1"></div>
  </div>
  </div>
</div>  
<div id="cart1" class="container-fluid">

  <div class="row">
    <div class="col-md-12">
      <div id="cart_msg"></div>
    </div>
  </div>
	<div class="card">
   <div class="card-header bg-info">
     <div class="row">
       <div class="col-md-2"><b>Action</b></div>
       <div class="col-md-2"><b>Product Name</b></div>
       <div class="col-md-2"><b>Product Image</b></div>
       <div class="col-md-2"><b>Product Price</b></div>
       <div class="col-md-2"><b>Quantity</b></div>
       <div class="col-md-2"><b>Price</b></div>
     </div>
   </div>
   <div class="card-body">
    <div id="cart_edit"></div>
  
   </div> 
  </div>
	
</div>
<br>
<div class="container-fluid">
   <div id="alert"></div>
</div>
<div id="product_view"></div>

<div id="check-order" class="container-fluid">
  <div class="row">
    <div class="col-md-7">
      <div id="check_order1"></div>
 
    </div>
    <div class="col-md-5">
      <div class="card">
        <div id="check_order"></div>
     
          <ul style="margin-left: 20px;">
            <li>Cash on delivery is available</li>
            <li> All types of card accepted</li>
            <li>Paytm Bhim and google pay is available</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="payment" class="container-fluid">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <div class="card-header bg-dark">
        <h3 class="text-center text-white"><b>F T S</b></h3>
      </div>
         <div class="card-body btn-primary">
          <ul>
            <div id="payment_mode"></div>
         </ul>
         </div>
        <div class="card-footer bg-dark">
          <p class="text-white"><small> Please before select the payment mode read</small> <a href="#"> T&C</a></p>
        </div>
    </div>
   <div class="col-md-3"></div>
  </div>
</div>
<div id="orders" class="container-fluid">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
     <div class="card">
      <div id="order"></div>
    </div>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>

      <script type="text/javascript" src="../js/jquery-ui.js"></script>
      <script type="text/javascript" src="../js/jquery.js"></script>
      <script type="text/javascript" src="../js/jquery.exzoom.js"></script>
      <script type="text/javascript" src="../js/jquery.bxslider.min.js"></script>
      <script type="text/javascript" src="../js/owl.carousel.min.js"></script>
      <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript" src="../js/bootstrap.min.js"></script>
      <script type="text/javascript" src="../fo/js/all.min.js"></script>
      <script type="text/javascript" src="js/main.js"></script>

</body>
</html>              