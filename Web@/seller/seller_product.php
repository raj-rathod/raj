<?php include('server1.php')
 ?>
 <?php 
    if(!isset($_SESSION["uid"])){
       header("location:index.php");
     } 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Seller product add</title>
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
    <img src="image/icon.png" alt="logo">
  </a>
   <h1 class="name"> F T S</h1>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <li id="db"><a href="#" class="dropdown-toggle nav-link text-white" data-toggle="dropdown"><h5><i class="far fa-user"></i> <?php echo "Hi,".$_SESSION["sellername"]; ?></h5></a>
                                <!-- dropdown box  -->
                                 <div class="dropdown-menu dropdown-menu-right " style="width:250px;">
                                     <a href="#"class="dropdown-item " id="store1"><i class="fas fa-store"></i> &nbsp;Your Store</a>
                                     <a href="#"class="dropdown-item " id="list1"><i class="fas fa-cube"></i> &nbsp; Your Products</a>
                                     <a href="#"class="dropdown-item " id="sell1"><i class="fas fa-wallet"></i> &nbsp; Your Orders</a>
                                     <a href="#"class="dropdown-item " id="ret_order"> &nbsp; Return order</a>
                                     <a href="#"class="dropdown-item " id="sell_order"><i class="fas fa-gift"></i> &nbsp; selled products</a>
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
     <li class="nav-item">
      <a class="nav-link text-white" href="#"><h5>Best seller</h5></a>
    </li>
    </ul>
   </nav>
   <!--- this is for form--->
   <div id="add1" class="container-fluid">
   	<h2 class="head1 text-center">Here you should add the product those you want to sell</h2>
    <a href="addproduct.php" id="add2" class="btn btn-info"><h4>Add product</h4></a>
   </div> 
   <!---this is store---->
<div id="store" class="container-fluid">
  <div class="row"> 
    <div class="col-md-2"></div>
     <div class="col-md-8">
      <div id="store3"></div>
    
     </div>
      <div class="col-md-2"></div>
  </div>
</div>
<!-- this is for seller product list---->
<div id="list" class="container-fluid">
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
       <div class="col-md-2"><b>offer %</b></div>
      
     </div>
   </div>
   <div class="card-body">
    <div id="product_list"></div>
 
   </div>
  </div>
</div>
<!--- this is for sell product list--->
<div id="sell" class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><h4 class="text-center text-primary">Your Orders </h4> </div>
      </div>
    </div>
  </div>
  <div class="card">
   <div class="card-header bg-info">
     <div class="row">
       <div class="col-md-1"><b>Action</b></div>
       <div class="col-md-2"><b>Product Name</b></div>
       <div class="col-md-2"><b>Product Image</b></div>
       <div class="col-md-1"><b>Payment</b></div>
       <div class="col-md-1"><b>Quantity</b></div>
       <div class="col-md-1"><b>Price</b></div>
       <div class="col-md-2"><b>Name and mobile</b></div>
       <div class="col-md-2"><b>Address</b></div>
     </div>
   </div>
    <div id="sell_product"></div>
 <!-- <div class="card-body">
    <div id="sell_product"></div>
     <div class="row">
       <div class="col-md-1">
        <a href="" class="btn btn-success"><i class="far fa-plus-square"></i></a>
       </div>
       <div class="col-md-2">Product Name</div>
       <div class="col-md-2"><img src="image/image-6.jpeg" width="100px" height="150px"></div>
       <div class="col-md-1"><h4><b><small>COD</small></b></h4></div>
       <div class="col-md-1"><input type="text" class="form-control" value="1" disabled="type" ></div>
       <div class="col-md-1"><input type="text" class="form-control" value="500" disabled="type"></div>
       <div class="col-md-2"><b>Rajesh singh <br>9148002717</b></div>
       <div class="col-md-2"><h5><b>Address1 <br>Adress2</b></h5></div>
     </div>
   </div>--->
   <div class="card-footer">
     <p class="text-center">Please click on blue button for conform your product's order</p>
   </div>
  </div>
</div>
<div id="return1" class="container-fluid">
  <div class="row">
    <div class="col-md-12">
       <div class="card">
        <div class="card-header"><h4 class="text-center text-primary">Your return Orders </h4> </div>
      </div>
    </div>
  </div>
  <div class="card">
   <div class="card-header bg-info">
     <div class="row">
       <div class="col-md-1"><b>Order Status</b></div>
       <div class="col-md-2"><b>Product Name</b></div>
       <div class="col-md-2"><b>Product Image</b></div>
       <div class="col-md-1"><b>Payment</b></div>
       <div class="col-md-1"><b>Quantity</b></div>
       <div class="col-md-1"><b>Price</b></div>
       <div class="col-md-2"><b>Name and mobile</b></div>
       <div class="col-md-2"><b>Address</b></div>
     </div>
   </div>
    <div id="return2"></div>
 
  
  </div>
</div>
<div id="sell_order1" class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><h4 class="text-center text-primary">Your Successfully selled Orders </h4> </div>
      </div>
    </div>
  </div>
  <div class="card">
   <div class="card-header bg-info">
     <div class="row">
       <div class="col-md-1"><b>Order Status</b></div>
       <div class="col-md-2"><b>Product Name</b></div>
       <div class="col-md-2"><b>G. Manager</b></div>
       <div class="col-md-2"><b>Payment</b></div>
       <div class="col-md-1"><b>Quantity</b></div>
       <div class="col-md-1"><b>Price</b></div>
       <div class="col-md-2"><b>User id</b></div>
       <div class="col-md-1"><b>Product Id </b></div>
     </div>
   </div>
    <div id="sell_order2"></div>
    
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