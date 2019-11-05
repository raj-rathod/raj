<?php

  session_start();
    if(!isset($_SESSION["uid"])){
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
  <a class="navbar-brand" href="fts.php"><img src="image/icon.png" style="cursor: default;"></a>
  <h1 class="name"> F T S</h1>
    <div class="search-area">
           <form action="profile.php" method="post">
             <input type="text" name="search-box" class="search-box" value="" placeholder="Search all items....">
           </form>
             <button class="search-btn btn btn-success" id="search1"><i class="fa fa-search" aria-hidden="true"></i></button> 
           <!-- ////// this is for category====///////---->
                    <a href="#"class="dropdown-toggle" data-toggle="dropdown">
                     CATEGORY </a>
                   <div class="dropdown-menu dropdown-menu-right bg-dark" style="width: 600px;">
                          <div id="category" ></div>  
                   </div>    
      </div>
            <!-- user menu -->
           <div class="user-menu">
               <ul> 
                   <li id="db"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="far fa-user"></i> <?php echo "Hi,".$_SESSION["username"]; ?></a>
                                <!-- dropdown box  -->
                          <div class="dropdown-menu dropdown-menu-right bg-dark" style="width:250px;">
                                 <a href="#"class="dropdown-item accnt"><i class="far fa-user"></i> &nbsp;Your Account</a>
                                 <a href="#"class="dropdown-item order"><i class="fas fa-cube"></i> &nbsp; Your Order</a>
                                     <a href="#"class="dropdown-item"><i class="fas fa-wallet"></i> &nbsp; Wallet</a>
                                     <a href="#"class="dropdown-item"><i class="fas fa-gift"></i> &nbsp; Gift Card</a>
                                     <div class="dropdown-divider"></div>
                                      <p class="text-center text-white" style="height: 30px; line-height:30px;"><small>please fill your details here</small></p>
                                      <a href="registration/logout.php"class="dropdown-item text-center bg-danger"><i class="far fa-user"></i> &nbsp; LOG OUT</a>
                         </div>          
                   </li>
                            <li><a href="#" id="cart" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-shopping-cart"></i> Cart <span class="badge bg-danger">0</span> </a>
                            <div class="dropdown-menu dropdown-menu-right ">
                               <div class="card" id="panel">
                                 <div class="card-header bg-info ">
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
                                  <div class="card-footer">
                                    <a href="category/cart.php" id="edit" class="btn btn-success" style="width:120px;"><i class="fas fa-shopping-cart"></i> View cart</a>
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
 <!-- <div class="card-columns">
    <div class="card">
      <div class="card-body">
        <img src="image/31.jpg" class="img-fluid">
         <div class="media">
    <div class="media-left">
     <h4 class="text-primary"><b>Price : 25000/</b></h4>
    </div>
    <div class="media-body">
      <h4 class="text-center text-primary">Offer : 50% </h4>
    </div>
  </div>
  <p class="text-primary">You can save : 4000 INR .On buying this product</p>
   <p class="text-primary">You will be get  a laptop bag</p>
      </div>
       <div class="card-footer">
    <a href="#" class="btn text-primary btn-outline-danger">add to cart</a>
  </div>
    </div>
    <div class="card bg-primary">
      <div class="card-heading">
       <h3 class="text-capitalize text-white text-center">Product name</h3>
      </div>
      <div class="card-body">
         <h5 class="text-white text-capitalize text-center">Description about product</h5>
       <ul class="list-group ">
  <li class="list-group-item "> 1. Display size: 25 inch. 1080 HD resolution</li>
  <li class="list-group-item ">2. Battery : 5000 Mah </li>
  <li class="list-group-item ">3. Processor : intel CORE i9</li>
  <li class="list-group-item ">4. Operating system : Window 10 Pro (64 bits)</li>
  <li class="list-group-item ">5. Bandwidth : 5 Ghz</li>
  <li class="list-group-item ">6. Ram : 12 GB</li>
  <li class="list-group-item ">7. Rom : 1 TB</li>
  <li class="list-group-item ">8. Grafic Card : 2 GB</li>
</ul> 
<br>
<br>
      </div>
    </div><div class="card bg-info">
      <div class="card-heading">
       <h3 class="text-capitalize text-white text-center">Details provide by fts</h3>
      </div>
      <div class="card-body">
         <ul class="list-group ">
  <li class="list-group-item "> <h4 class="text-primary"> <i class="fas fa-truck"></i> <b>Free delivery And fast delivered</b></h4></li>
  <li class="list-group-item "><h4 class="text-primary"><i class="fas fa-exchange-alt"></i> Easy to return</h4>  </li>
  <li class="list-group-item "><h4 class="text-primary"> 1 year warranty</h4>( Except physically damage ) </li>
  <li class="list-group-item "><h4 class="text-primary"><i class="fab fa-cc-paypal"></i> Easy to pay online</h4>( Secure your payment don't worry)</li>
  <li class="list-group-item "><h4 class="text-primary"> Cash on delivery is available</h4></li>
</ul> 
  </div>
 
    </div>
  </div>--->
</div>
</div>
<div id="neetu">
  <div class="slider-area">
        <div class="slider">
                    <div class="bg-dark">
                      <a href="#">
                        <img src="image/img1.jpg">
                      </a> 
                        <!-- slider content-->
                        <div class="slider-content">
                          <h3 class="text-white text-capitalize"> this product is good for you!<br>50% off buy now!</h3>
                          <a href="#"><button class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Buy Now</button></a>
                          <a href="#"><button class="btn btn-outline-danger ml-5"> Read More</button></a>
                        </div>
                    </div>
                     <div class="bg-dark">
                      <a href="#">
                        <img src="image/img6.jpeg">
                      </a>
                          <div class="slider-content">
                          <h3 class="text-white text-capitalize"> this product is good for you!<br>50% off buy now!</h3>
                          <a href="#"><button class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Buy Now</button></a>
                          <a href="#"><button class="btn btn-outline-danger ml-5"> Read More</button></a>
                        </div>
                    </div>
                     <div class="bg-dark">
                      <a href="#">
                        <img src="image/img2.jpg">
                      </a> 
                           <div class="slider-content">
                          <h3 class="text-white text-capitalize "> this product is good for you!<br>50% off buy now!</h3>
                          <a href="#"><button class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Buy Now</button></a>
                          <a href="#"><button class="btn btn-outline-danger ml-5"> Read More</button></a>
                        </div>
                    </div>
                     <div class="bg-dark">
                      <a href="#">
                        <img src="image/img3.jpg">
                      </a>
                           <div class="slider-content">
                          <h3 class="text-white text-capitalize"> this product is good for you!<br>50% off buy now!</h3>
                          <a href="#"><button class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Buy Now</button></a>
                          <a href="#"><button class="btn btn-outline-danger ml-5"> Read More</button></a>
                        </div>
                    </div> 
                    <div class="bg-dark">
                      <a href="#">
                        <img src="image/img4.jpg">
                      </a>
                           <div class="slider-content">
                          <h3 class="text-white text-capitalize"> this product is good for you!<br>50% off buy now!</h3>
                          <a href="#"><button class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Buy Now</button></a>
                          <a href="#"><button class="btn btn-outline-danger ml-5"> Read More</button></a>
                        </div>
                    </div>
          </div>
    </div>
  <div class="card-group">
    <div class="card">
      <div id="card-body" class="card-body text-center">
        <a href="#"><img src="image/off1.jpg"></a>
      </div>
    </div>
    <div class="card">
      <div id="card-body" class="card-body text-center">
         <a href="#"><img src="image/off2.jpg"></a>
      </div>
    </div>
    <div class="card ">
      <div id="card-body" class="card-body text-center">
      <a href="#"><img src="image/off3.png"></a>
      </div>
    </div> 
  </div>
</div>
    <div id="search_p" class="container-fluid bg-dark">
    <a href="#"><h5>Search Products</h5></a>
  </div>
    <div class="card-columns">
    <div id="search"></div>
   </div>
 <!--- this is for product fetching----->
  <div class="container-fluid bg-dark">
   <a href="#"><h4>Products</h4></a>
 </div>
 <div id="demo" class="carousel slide " data-ride="carousel">
     <ul class="carousel-indicators">
       <li data-target="#demo" data-slide-to="0" class="active"></li>
       <li data-target="#demo" data-slide-to="1"></li>
       <li data-target="#demo" data-slide-to="2"></li>
    </ul>
     <div class="carousel-inner">
       <div class="carousel-item active">
         <div class="card-columns">
          <div id="product_in"></div>
          
        </div>
    </div>
    <div class="carousel-item">
       <div class="card-columns">
        <div id="product_in1"></div>
     </div>
    </div>    
    </div>

     <a class="carousel-control-prev" href="#demo" data-slide="prev">
     <span class="carousel-control-prev-icon"></span>
     </a>
     <a class="carousel-control-next" href="#demo" data-slide="next">
     <span class="carousel-control-next-icon"></span>
     </a>
</div>
<!--products fetch mobiles--->
 <div class="container-fluid bg-dark" >
  <a href="category/index.php"><h5>Mobiles</h5></a>
  </div>
    <div class="card-columns">
    <div id="products"></div>
   </div>
    <div class="container-fluid bg-dark">
  <a href="category/index.php"><h5>Laptops</h5></a>
  </div>
    <div class="card-columns">
    <div id="laptop"></div>
   </div>
     <div class="container-fluid bg-dark">
       <a href="category/index.php"><h5>Eletronics & Eletricals</h5></a>
    </div>
    <div class="card-columns">
        <div id="electronics"></div>
   </div>
    <div class="container-fluid bg-dark">
       <a href="category/index.php"><h5>Clothes</h5></a>
    </div>
    <div class="card-columns">
        <div id="clothes"></div>
   </div>
    <div class="container-fluid bg-dark">
       <a href="category/index.php"><h5>SHOES</h5></a>
    </div>
    <div class="card-columns">
        <div id="shoes"></div>
   </div>
   <div class="container-fluid bg-dark">
       <a href="category/index.php"><h5>FASHION</h5></a>
    </div>
    <div class="card-columns">
        <div id="fashion"></div>
   </div>
    <div class="container-fluid bg-dark">
       <a href="category/index.php"><h5>Health & Beauty</h5></a>
    </div>
    <div class="card-columns">
        <div id="fashion2"></div>
   </div>
    <div class="container-fluid bg-dark">
       <a href="category/index.php"><h5>Home_mart</h5></a>
    </div>
    <div class="card-columns">
        <div id="home_mart"></div>
   </div>
     <div class="container-fluid bg-dark">
       <a href="#"><h5>Books</h5></a>
    </div>
    <div class="card-columns">
        <div id="books"></div>
   </div>
    <div class="container-fluid bg-dark">
       <a href="category/index.php"><h5>Sport</h5></a>
    </div>
    <div class="card-columns">
        <div id="sport"></div>
   </div>
    <div class="container-fluid bg-dark">
       <a href="category/index.php"><h5>Fast_Food</h5></a>
    </div>
    <div class="card-columns">
        <div id="fast"></div>
   </div>
    <div class="container-fluid bg-dark">
       <a href="category/index.php"><h5>Sweets</h5></a>
    </div>
    <div class="card-columns">
        <div id="sweet"></div>
   </div>
    <div class="container-fluid bg-dark">
       <a href="category/index.php"><h5>Milk Product</h5></a>
    </div>
    <div class="card-columns">
        <div id="milk_pro"></div>
   </div>

   <div id="team" class="card">
  <div class="card-header bg-info">
    <h4 class="text-center text-capitalize text-white">Meet my team members</h4>
  </div>
<div id="about_us" class="jumbotron">
  <div class="card-group">
    <div class="card bg-primary">
      <div class="card-body text-center">
           <img class="card1 rounded-circle" src="image/rajesh.jpg">
        <p class="h">I am Rajesh Singh Rathore , persuing BE from computer science and Engeneering From Visvesvaraya Technological University.I am Good at web devlopment.I am Basically From Bhind Distt Madhya Pradesh. Today's Education is Just Like a Jumbled Game where people Uses to try those things where their Field of intrest lies within.So I am also trying my hand Best in web Devlopment.</p>
      </div>
    </div>
    <div class="card  bg-primary ">
      <div class="card-body text-center">
         <img class="card2 rounded-circle" src="image/pc.jpg">
        <p class="i">I am Pushkar Choudhary , persuing BE from computer science and Engeneering From Visvesvaraya Technological University.I am Good at Game devlopment.I am Basically From Gorakhpur Distt Uttar Pradesh. Today's Education is Just Like a Jumbled Game where people Uses to try those things where their Field of intrest lies within.So I am also trying my hand Best in Game Devlopment.</p>
      </div>
    </div>
    <div class="card  bg-primary ">
      <div class="card-body text-center">
         <img class="card3 rounded-circle" src="image/s.jpg">
        <p class="j">I am Shubham Sindhu , persuing BE from computer science and Engeneering From Visvesvaraya Technological University.
        I am Good at Computer Languages.I am Basically From Jind Distt Haryana. Today's Education is Just Like a Jumbled Game where people Uses to try those things where their Field of intrest lies within.So I am also trying my hand Best in computer Languages.</p>
      </div>
    </div> 
    <div class="card  bg-primary">
      <div class="card-body text-center">
         <img class="card4 rounded-circle" src="image/img2.jpg">
        <p class="k">I am Nishant Sinha , persuing BE from computer science and Engeneering From Visvesvaraya Technological University.
        I am Good at web devlopment.I am Basically From Bihar. Today's Education is Just Like a Jumbled Game where people Uses to try those things where their Field of intrest lies within.So I am also trying my hand Best in web Devlopment.</p>
      </div>
    </div>  
    <div class="card bg-primary">
      <div class="card-body text-center">
           <img class="card5 rounded-circle" src="image/r.jpg">
        <p class="l">I am Rajeev Kumar , persuing BE from computer science and Engeneering From Visvesvaraya Technological University.I am Good at web devlopment.I am Basically From katihar Distt Bihar. Today's Education is Just Like a Jumbled Game where people Uses to try those things where their Field of intrest lies within.So I am also trying my hand Best in web Devlopment.</p>
      </div>
    </div>
  </div>
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
                <li><a href="#team" class="about"><h5>Meet My team</h5></a>
           </ul>
     </div>
      <div class="card bg-dark">
           <ul> 
              <h4 class="seller">Boost Your Business</h4>
              <li><a href="seller/"><h5> Seller</h5></a>
             <li><a href="seller/gm.php"><h5>G Manager</h5></a>
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




      
      <script type="text/javascript" src="js/jquery-ui.js"></script>
      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
      <script type="text/javascript" src="js/owl.carousel.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="fo/js/all.min.js"></script>
      <script type="text/javascript" src="js/main.js"></script>

</body>
</html>