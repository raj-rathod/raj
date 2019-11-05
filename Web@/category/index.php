<?php

session_start();
if(!isset($_SESSION["uid"])){
  header("location:../registration/login.php");
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
           <form action="index.php" method="post">
             <input type="text" name="search-box" value="" class="search-box" placeholder="Search all items....">
           </form>
            <button class="search-btn btn btn-success" id="search1"><i class="fa fa-search" aria-hidden="true"></i></button> 
           <!-- ////// this is for other====///////---->
             <a href="#"class="dropdown-toggle" data-toggle="dropdown">
                     CATEGORY </a>
                   <div class="dropdown-menu dropdown-menu-right bg-dark" style="width:700px;">
                          <div class="row">
                          <div class="col-md-12 col-xs-12">  
                             <div class="card-group bg-dark">
                                <div class="card bg-dark">
                                  <div class="card-body">
                                   <ul>
                                    <div id="cate" ></div>
                                  </ul>
                                </div>
                                 </div>
                                 <div class="card bg-dark">
                                  <div class="card-body">
                                   <ul>
                                    <div id="brand" ></div>
                                  </ul>
                                </div>
                                 </div>
                                 </div>
                               </div>
                             </div>
                   </div> 
                       
      </div>
            <!-- user menu -->
           <div class="user-menu">
               <ul> 
                   <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="far fa-user"></i><?php echo "Hi,".$_SESSION["username"]; ?></a>
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
                            <li><a href="#" id="cart" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-shopping-cart"></i> Cart <span class="badge bg-danger">0</span> </a>
                            <div class="dropdown-menu dropdown-menu-right ">
                               <div class="card" id="panel">
                                 <div class="card-header bg-info">
                                   <div class="row">
                                     <div id="bd" class="col-md-3"><h5>SI.NO</h5></div>
                                     <div id="bd" class="col-md-3"><h5>Product Image</h5> </div>
                                     <div id="bd" class="col-md-3"><h5>Product Name</h5></div>
                                     <div id="bd" class="col-md-3"><h5>Price.</h5></div>
                                   </div>
                                 </div>
                                 <div class="card-body">
                                     <div id="cart_pro">
                                       <!--fetch data--by ajax--->
                                      </div>
                                 </div>
                                  <div class="card-footer bg-info">
                                   <a href="cart.php" id="edit" class="btn btn-success" style="width:80px;"><i class="fas fa-shopping-cart"></i> Edit</a>
                                  </div>
                                </div>
                             </div>  

                            </li>
              </ul>
           </div>
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
<div id="bhai">
<div class="container-fluid">
  <div id="pro_details"></div>
  </div>
</div>
<div class="container-fluid" style="margin-top:70px;">
  <div class="releted">
 <div class="card">
   <div class="card-header bg-dark">
     <h5 class="text-center text-white ">Releted products</h5>
   </div>
 </div>
 <div class="card-body">
    <div class="card-columns">
            <div id="releted"></div>
          </div>
 </div>
</div>
</div> 
<div class="container-fluid" style="margin-top:10px;">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="row">
        <div class="col-md-12">
        <div class="card-header bg-info">
                <h5 class="text-center"> Products</h5>
           </div>
          <div class="card-columns">
            <div id="product"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
     <ul class="pagination pagination-sm">
    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
  </div>
  <div class="col-md-4"></div>
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
              <h4 class="seller">Make Money With Us</h4>
              <li><a href="../seller/"><h5> Seller</h5></a>
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