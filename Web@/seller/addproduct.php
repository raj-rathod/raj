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
 
   </nav>
   <!--- this is for form--->
   <div id="raj" class="container-fluid">
     <?php include('error.php'); ?>
   <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
         <h4 class="text-center text-primary text-capitalize">Insert the product detail</h4>
       <div class="progress" style="margin-bottom:10px; margin-top: 10px;">
    <div class="progress-bar progress-bar-striped progress-bar-animated" id="progress" style="width:33%"></div>
  </div>
  <div class="card">
  <form method="post" action="seller_product.php" enctype="multipart/form-data">
    <div id="step1">
       <div class="card-header text-center bg-primary">
      <h5 class="card-text "><b>Product Details</b></h5>
      <h6 class="card-text text-white "><b>Step - 1</b></h6>
    </div>
   <div class="card-body bg-info">
      <div  class=form-group>
      <label for="Name">Product Name</label>
      <input type="text" name="pname" class="form-control" placeholder="Product name" >
    </div>
    <div class=form-group>
      <label for="Category">Category</label>
      <select name="cat" class="form-control">
        <option value="Electronics & Electrical">Electronics & Electrical</option>
        <option value="Laptops">Laptops</option>
        <option value="Mobiles">Mobiles</option>
        <option value="Clothes">Clothes</option>
        <option value="Milk_products">Milk_products</option>
        <option value="Shoes">Shoes</option>
        <option value="Fashion">Fashion</option>
        <option value="Books">Books</option>
        <option value="Home_mart">Home_mart</option>
        <option value="Sweets">Sweets</option>
        <option value="Fast_food">Fast_food</option>
        <option value="Sports">Sports</option>
        <option value="Ladies_fas">Ladies_fas</option>
       <option value="Ladies_fas">Others</option>
      </select>
    </div>
    <div class=form-group>
      <label for="brand">Brand</label>
      <select name="brand" class="form-control">
        <option value="HP">HP</option>
        <option value="Samsung">Samsung</option>
        <option value="Vivo">Vivo</option>
        <option value="Whirlpool">Whirlpool</option>
        <option value="LG">LG</option>
        <option value="Dell">Dell</option>
        <option value="Oppo">Oppo</option>
        <option value="Iphone">Iphone</option>
        <option value="Nokia">Nokia</option>
        <option value="One+">One+</option>
        <option value="huwai">huwai</option>
        <option value="Intex">Intex</option>
        <option value="Sony">Sony</option>
        <option value="Other">Other</option>
      </select>
    </div>
    <div class=form-group>
      <label for="Name">Product price</label>
      <input type="text" name="price" class="form-control" placeholder="Product_price" >
    </div>
    </div>
    <div class="card-footer bg-dark">
      <a href="#" class="btn btn-outline-danger" id="next-1">NEXT <i class="fas fa-arrow-circle-right"></i></a>
    </div>
      </div>
      <!-----this is for 2nd step---->
  <div id="step2">
     <div class="card-header text-center bg-primary">
     <h5 class="card-text "><b>Product images</b></h5>
       <h6 class="card-text text-white "><b>Step - 2</b></h6>
    </div>
   <div class="card-body bg-info">
     <div   class=form-group>
      <label>Product_image</label>
      <input type="file" name="image" class="form-control" >
    </div>
      <div class=form-group>
      <label for="email">Offer</label>
      <input type="text" name="off" class="form-control" placeholder="Off%">
    </div>
    <div class=form-group>
      <label>Product Quintity</label>
      <input type="number" name="qty" class="form-control">
    </div>
   </div>
    <div class="card-footer bg-dark">
      <a href="#" class="btn btn-outline-danger" id="prev-1"><i class="fas fa-arrow-circle-left"></i> Previous</a>
       <a href="#" class="btn btn-outline-danger" id="next-2">Next <i class="fas fa-arrow-circle-right"></i> </a>
    </div>
 </div>
 <!--- this is for discription of product--->
 <div id="step3">
     <div class="card-header text-center bg-primary">
     <h5 class="card-text "><b>Description of the product</b></h5>
       <h6 class="card-text text-white "><b>Step - 3</b></h6>
    </div>
  <div id="step-3a">
   <div class="card-body bg-info">
     <div  class=form-group>
      <label>Line 1</label>
      <input type="text" name="p1" class="form-control" placeholder="1. Display size: 25 inch. 1080 HD resolution " >
    </div>
     <div  class=form-group>
      <label>Line 2 </label>
      <input type="text" name="p2" class="form-control" placeholder="2. Processor : intel CORE i9 " >
    </div>
     <div   class=form-group>
      <label>Line 3</label>
      <input type="text" name="p3" class="form-control" placeholder="3. Operating system : Window 10 Pro (64 bits)" >
    </div>
     <div  class=form-group>
      <label>Line 4</label>
      <input type="text" name="p4" class="form-control" placeholder="4. Battery : 5000 Mah ( six hours work one time charge)" >
    </div>
     <div  class=form-group>
      <label>Line 5 </label>
      <input type="text" name="p5" class="form-control" placeholder="5. Ram : 12 GB & Rom : 1 TB" >
    </div>
     <div  class=form-group>
      <label>Write according to you about this product </label>
      <input type="text" name="p6" class="form-control" placeholder="This product made by us or other .. 1 year warranty" >
    </div>
   </div>
 </div>
    <div class="card-footer bg-dark">
      <a href="#" class="btn btn-outline-danger" id="prev-2"><i class="fas fa-arrow-circle-left"></i> Previous</a>
      <hr>
       <div id="input-group" class=form-group>
    <button type="submit"  id="bt3" class="btn btn-outline-danger form-control" name="product">Submit Details</button>
    </div>
    </div>
 </div>
    </form>
      <div class="col-md-3"></div>
    </div>
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
      <script type="text/javascript" src="js/main.js"></script>


</body>
</html>