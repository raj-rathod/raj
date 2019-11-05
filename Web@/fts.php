<?php
  session_start();
    if($_SESSION["username"]!="rajesh"){
       header("location:index.php");
     }

?>
<!DOCTYPE html>
<html>
<head>
  <title>FREE TIME SHOP</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
     <link rel="stylesheet" type="text/css" href="fo/css/all.min.css">
     <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.min.css">
     <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
     <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">
</head>  
<body>
  <div class="wrapper">
    <!-- navigation bar--->
   <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
  <!-- Brand -->
  <a class="navbar-brand" href="#" id="fts2"><img src="image/icon.png" style="cursor: default;"></a>
  <h1 class="name"> F T S</h1>
   <div class="user-menu">
               <ul> 
                   <li id="db"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="far fa-user"></i> <?php echo "Hi,".$_SESSION["username"]; ?></a>
                                <!-- dropdown box  -->
                          <div class="dropdown-menu dropdown-menu bg-dark" style="width:250px;">
                                 <a href="#"class="dropdown-item sell_info"><i class="far fa-user"></i> &nbsp; Seller </a>
                                 <a href="#"class="dropdown-item gm_info"><i class="fas fa-cube"></i> &nbsp;G manager</a>
                                     <a href="#"class="dropdown-item today"><i class="fas fa-wallet"></i> &nbsp;Today's Orders</a>
                                     <a href="#"class="dropdown-item can_order"><i class="fas fa-gift"></i> &nbsp;Today's cancle order</a>
                                    <a href="#"class="dropdown-item ret_order"><i class="fas fa-gift"></i> &nbsp;Today's return order</a>
                                     <div class="dropdown-divider"></div>
                                      <p class="text-center text-white" style="height: 30px; line-height:30px;"><small>please fill your details here</small></p>
                                      <a href="registration/logout.php"class="dropdown-item text-center bg-danger"><i class="far fa-user"></i> &nbsp; LOG OUT</a>
                         </div>          
                   </li>
                            <li><a href="#" class="dropdown-toggle " data-toggle="dropdown">FTS POS </a>
                            <div class="dropdown-menu dropdown-menu-center bg-dark "style="width:250px;">
                                <a href="#"class="dropdown-item seller_payment"><i class="fas fa-cube"></i> &nbsp;Seller payment</a> 
                                 <a href="#"class="dropdown-item gm_payment"><i class="fas fa-cube"></i> &nbsp;G Manager payment</a> 
                                <a href="#"class="dropdown-item seller_prod"><i class="fas fa-cube"></i> &nbsp; Selled Product</a> 
                             </div>  

                            </li>
              </ul>
           </div>
   </div>
  </nav>
</div>

<div class="container-fluid" style="margin-top: 70px;">
  <div class="card ">
    <div class="card-header bg-info" id="title"><h3 class="text-white text-center">FTS POS SYSTEM</h3></div>
  </div>
  <div id="sell_info1">
  <div class="row">
    <div class="col-md-3"></div>
     <div class="col-md-6">
       <div class="card">
       <div class="card-header bg-primary">Please Enter Refrence ID</div>
       <form>
         <div id="input-group" class=form-group>
          <input type="text" name="name" class="form-control" id="refid" value="" >
         </div>
       </form> 
       </div>
     </div> 
     <div class="col-md-3"></div>
  </div>
  <div class="card">
    <div class="card-header text-center"><a href="#" id="fts" class=" text-dark" style="cursor: default;"><h4>Seller Information</h4></a></div>
    <div class="card-header bg-info">
      <div class="row">
        <div class="col-md-2"><h6>Name</h6></div>
         <div class="col-md-1"><h6>Contact</h6></div>
           <div class="col-md-2"><h6>Refrence Id:</h6></div>
             <div class="col-md-2"><h6>Account Number</h6></div>
             <div class="col-md-1"><h6>Ifsc Code</h6></div>
            <div class="col-md-2"><h6>G.Manager Name</h6></div>
             <div class="col-md-2"><h6>Store name</h6></div>
      </div>
    </div>
    <div class="card-body">
      <div id="ftsp"></div>
      </div>
    </div>
  </div>
  <div id="gm_info1">
    <div class="card">
       <div class="card-header text-center"><h4>G Manager Information</h4></div>
      <div class="card-header bg-primary">
        <div class="row">
          <div class="col-md-1"><h6>Name</h6></div>
          <div class="col-md-2"><h6>Contact</h6></div>
           <div class="col-md-2"><h6>Refrence Id:</h6></div>
             <div class="col-md-2"><h6>Account Number</h6></div>
             <div class="col-md-2"><h6>Ifsc Code</h6></div>
             <div class="col-md-2"><h6>Address</h6></div>
             <div class="col-md-1"><h6>action</h6></div>
        </div>
      </div>
      <div class="card-body">
        <div id="gm_info2"></div>
      </div>
    </div>
  </div>
  <div id="today">
    <div class="card">
       <div class="card-header text-center"><h4 class="text-primary"><b>Today's Ordered</b></h4></div>
      <div class="card-header bg-primary">
        <div class="row">
          <div class="col-md-1"><h6>Quantity</h6></div>
          <div class="col-md-2"><h6>Product Name</h6></div>
           <div class="col-md-2"><h6>Order Id:</h6></div>
             <div class="col-md-2"><h6>Order Status</h6></div>
             <div class="col-md-2"><h6>Payment mode</h6></div>
             <div class="col-md-2"><h6>Main price</h6></div>
             <div class="col-md-1"><h6>Date</h6></div>
        </div>
      </div>
      <div class="card-body">
        <div id="today1"></div>
      </div>
    </div>
  </div>
   <div id="can_order">
    <div class="card">
       <div class="card-header text-center"><h4 class="text-primary"><b>Today's Cancle  Ordered</b></h4></div>
      <div class="card-header bg-primary">
        <div class="row">
          <div class="col-md-1"><h6>Quantity</h6></div>
          <div class="col-md-2"><h6>Product Name</h6></div>
           <div class="col-md-2"><h6>Order Id:</h6></div>
             <div class="col-md-2"><h6>Order Status</h6></div>
             <div class="col-md-2"><h6>Payment mode</h6></div>
             <div class="col-md-2"><h6>Main price</h6></div>
             <div class="col-md-1"><h6>Date</h6></div>
        </div>
      </div>
      <div class="card-body">
        <div id="can_order1"></div>
      </div>
    </div>
  </div>
   <div id="ret_order">
    <div class="card">
       <div class="card-header text-center"><h4 class="text-primary"><b>Today's  Return  Ordered</b></h4></div>
      <div class="card-header bg-primary">
        <div class="row">
          <div class="col-md-1"><h6>Quantity</h6></div>
          <div class="col-md-2"><h6>Product Name</h6></div>
           <div class="col-md-2"><h6>Order Id:</h6></div>
             <div class="col-md-2"><h6>Order Status</h6></div>
             <div class="col-md-2"><h6>Payment mode</h6></div>
             <div class="col-md-2"><h6>Main price</h6></div>
             <div class="col-md-1"><h6>Date</h6></div>
        </div>
      </div>
      <div class="card-body">
        <div id="ret_order1"></div>
      </div>
    </div>
  </div>
   <div id="sell_prod">
    <div class="card">
       <div class="card-header text-center"><h4 class="text-primary"><b>Today's Paymentable Ordered </b></h4></div>
      <div class="card-header bg-primary">
        <div class="row">
          <div class="col-md-1"><h6>Quantity</h6></div>
          <div class="col-md-2"><h6>Product Name</h6></div>
           <div class="col-md-2"><h6>G Manager</h6></div>
             <div class="col-md-2"><h6>Order Status</h6></div>
             <div class="col-md-2"><h6>Payment mode</h6></div>
             <div class="col-md-2"><h6>Main price</h6></div>
             <div class="col-md-1"><h6>Date</h6></div>
        </div>
      </div>
        <div id="sell_prod1"></div>
    </div>
  </div>
</div>
  

      
      <script type="text/javascript" src="js/jquery-ui.js"></script>
      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
      <script type="text/javascript" src="js/owl.carousel.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="fo/js/all.min.js"></script>
      <script type="text/javascript" src="js/printThis.js"></script>
      <script type="text/javascript" src="js/main.js"></script>

</body>
</html>