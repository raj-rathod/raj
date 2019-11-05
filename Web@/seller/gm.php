<?php include('server1.php') ?>
<!DOCTYPE html>
<html>
<head>
 <title>G Manager</title>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
      <a class="nav-link text-white" href="#"><h5>About us</h5></a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="#"><h5> Benifits</h5></a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="#"><h5> Make money</h5></a>
    </li>
  </ul>
</nav>
   <div class="slider-area">
        <div class="slider">
                    <div class="bg-dark">
                      <a href="#">
                        <img src="../image/img1.jpg">
                      </a>
                      <div class="slider-content">
                          <a href="#"><button class="btn btn-outline-danger ml-5"> Read More</button></a>
                        </div>
                    </div>
                     <div class="bg-dark">
                      <a href="#">
                        <img src="../image/img6.jpeg">
                      </a>
                          <div class="slider-content">
                          <h3 class="text-white text-capitalize"> this product is good for you!<br>50% off buy now!</h3>
                         
                          <a href="#"><button class="btn btn-outline-danger ml-5"> Read More</button></a>
                        </div>
                    </div>
                     <div class="bg-dark">
                      <a href="#">
                        <img src="../image/img2.jpg">
                      </a>
                           <div class="slider-content">
                          <h3 class="text-white text-capitalize "> this product is good for you!<br>50% off buy now!</h3>
                         
                          <a href="#"><button class="btn btn-outline-danger ml-5"> Read More</button></a>
                        </div>
                    </div>
                     <div class="bg-dark">
                      <a href="#">
                        <img src="../image/img3.jpg">
                      </a>
                           <div class="slider-content">
                          <h3 class="text-white text-capitalize"> this product is good for you!<br>50% off buy now!</h3>
                         
                          <a href="#"><button class="btn btn-outline-danger ml-5"> Read More</button></a>
                        </div>
                    </div>
                    <div class="bg-dark">
                      <a href="#">
                        <img src="../image/img4.jpg">
                      </a>
                           <div class="slider-content">
                          <h3 class="text-white text-capitalize"> this product is good for you!<br>50% off buy now!</h3>
                          <a href="#"><button class="btn btn-outline-danger ml-5"> Read More</button></a>
                        </div>
                    </div>
          </div>
    </div>
   </div>

<div id="contain" class="container-fluid bg-info">
  <div class="head">
    <h2 class="text-capitalize text-white text-center">BECOME A PARTNER OF FTS</h2>
    <p class="text-center text-white">You are a Genral Manager of FTS</p>
  </div>
  <div class="bt">
    <h4>If you are a new register first </h4>
    <span id="bt1"><h4 class=" btn btn-outline-danger text-white text-center"> Register Now</h4></span>
     <h5>If you are alredy register login now</h5>
     <span id="bt2"><h4 class=" btn btn-outline-warning text-white text-center">Login Now</h4></span>
  </div>
</div>
<!---this is register form--->
<div class="container-fluid form" >
  <div class="row">
    <div class="col-md-3"></div>
     <div class="col-md-6">
      <div class="progress" style="margin-bottom:10px; margin-top: 10px;">
    <div class="progress-bar progress-bar-striped progress-bar-animated" id="prog1" style="width:33%"></div>
  </div>
       <form method="post" action="gm.php">
        <div class="card">
          <div id="step-1">
             <div class="card-header bg-info "> <h4 class="text-white text-center" >Insert Your basic  Information</h4>
           <h6 class="card-text text-white "><b>Step - 1</b></h6>
         </div>
          <?php include('error.php'); ?>
            <div class="card-body bg-primary">
               <div  class="form-group">
                <label for="Name">Your Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Your name" >
               </div>
                <div class="form-group">
                 <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" placeholder="gm@gmail.com">
                </div>
                  <div class="form-group">
                   <label>Mobile no.</label>
                  <input type="tel" name="mobile" class="form-control" placeholder="9192939492">
                   </div>
            </div>
             <div class="card-footer bg-dark">
             <a href="#" class="btn btn-outline-danger" id="nextg1">NEXT <i class="fas fa-arrow-circle-right"></i></a>
               </div>
          </div>
           <div id="step-2">
             <div class="card-header bg-info "> <h4 class="text-white text-center" >Insert Your account details </h4>
           <h6 class="card-text text-white "><b>Step - 2</b></h6>
         </div>
            <div class="card-body bg-primary">
               <div class="form-group">
                 <label for="city">City</label>
                  <input type="text" name="city" class="form-control" placeholder="Bhind" >
                </div>
               <div class="form-group">
                 <label for="Name">Bank account</label>
                  <input type="text" name="account" class="form-control" placeholder="account no." >
                </div>
                <div class="form-group">
                  <label for="Name">IFSC Code</label>
                  <input type="text" name="ifsc" class="form-control" placeholder="IFSC CODE" >
                </div>
            </div>
             <div class="card-footer bg-dark">
             <a href="#" class="btn btn-outline-danger" id="prevg1"><i class="fas fa-arrow-circle-left"></i> Previous</a>
             <a href="#" class="btn btn-outline-danger" id="nextg2">NEXT <i class="fas fa-arrow-circle-right"></i></a>
               </div>
          </div>
          <div id="step-3">
             <div class="card-header bg-info "> <h4 class="text-white text-center" >Insert Your Address </h4>
           <h6 class="card-text text-white "><b>Step - 3</b></h6>
         </div>
            <div class="card-body bg-primary">
               <div class="form-group">
                  <label>Address 1</label>
                  <input type="text" name="address_1" class="form-control">
                </div>
               <div class="form-group">
                  <label>Address 2</label>
                 <input type="text" name="address_2" class="form-control">
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
             <div class="card-footer bg-dark">
             <a href="#" class="btn btn-outline-danger" id="prevg2"><i class="fas fa-arrow-circle-left"></i> Previous</a>
              <div class="form-group">
                 <button type="submit"  id="bt3" class="btn btn-outline-danger form-control" name="gm_info">Register</button>
               </div>
               </div>
          </div>
        </div>
         </form>
        </div>
      <div class="col-md-3"></div>
  </div>
</div>

<!--this is login form---->
<div class="container-fluid form1">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <div class="card">
      <div class="card-header bg-info">
          <h5 class="text-white text-center text-capitalize">Login now</h5>
      </div>
       <?php include('error.php'); ?>
      <div class="card-body bg-primary">
         <form  method="post" action="gm.php">
           <div class="form-group"  id="input-group">
             <label for="Name">Your Name</label>
             <input type="text" name="name" class="form-control" placeholder="Your name" >
           </div>
         <div class="form-group" id="input-group">
           <label>Password</label>
           <i class="far fa-eye-slash" id="eye"></i><i class="far fa-eye" id="eye1"></i>
           <input type="password" id="pwd" name="password_1" class="form-control">
        </div>
         <div id="input-group" class=form-group>
         <button type="submit"  id="bt3" class="btn btn-danger" name="gmlogin">Login</button>
       </div>
         </form> 
      </div>
      </div>
    </div>
    <div class="col-md-3"></div>
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
