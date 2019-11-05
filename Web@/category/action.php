<?php
 include("../registration/server.php");
$con = mysqli_connect('localhost', 'root', '', 'fts');
if(!$con){
    echo 'connection error';
} 
/*----this is for category---*/ 
 if (isset($_POST["category"])) {
 	$cat_query="SELECT * FROM category";
 	$run_query=mysqli_query($con,$cat_query);
 	if (mysqli_num_rows($run_query) > 0) {
 		while($row=mysqli_fetch_array($run_query)) {
 			$cid=$row["cat_id"];
 			$cat_name=$row["pcategory"];
 			echo " <li><a href='#'  class='dropdown-item category' cid='$cat_name'>$cat_name</a></li>";

 		}
 	}	 
 }
 /*------this is for brand--*/
 if (isset($_POST["brand"])) {
 	$brand_query="SELECT * FROM brands";
 	$run_query=mysqli_query($con,$brand_query);
 	if (mysqli_num_rows($run_query) > 0) {
 		while($row=mysqli_fetch_array($run_query)) {
 			$bid=$row["brand_id"];
 			$brand_name=$row["pbrand"];
 			echo " <li><a href='#' class='dropdown-item brand' bid='$brand_name'>$brand_name</a></li>";
 		}
 		
 	}
 }
 /*---this is for product fetch----*/
 if (isset($_POST["product"])) {
  $product_query="SELECT * FROM products ORDER BY RAND()";
 	$run_query=mysqli_query($con,$product_query);
 	if (mysqli_num_rows($run_query) > 0) {
 		while($row=mysqli_fetch_array($run_query)) {
 			$proid=$row["pro_id"];
 			$pcat_name=$row["pcategory"];
 			$pbrand=$row["pbrand"];
 			$product_name=$row["product_name"];
 			$product_qty=$row["qty"];
 			$product_price=$row["price"];
 			$product_off=$row["offer"];
 			$product_image=$row["p_image"];
 			$product_desc=$row["descr"];
     $tt=(($product_price* $product_off)/100);
 			echo " <div id='card' class='card'>
       <div class='row'>
       <div class='media'>
        <div class='col-sm-1'></div>
        <div class='media-right'>
          <a href='#'><img pid='$proid' id='chekout' class='card-img-top mx-auto d-block' src='../image/$product_image'></a>
           </div>
          <div class='col-xsm-1'></div>
           <div class='col-md-10'>
          <div class='media-body'>
           <div class='card-body'>
              <h5 class='card-title'><a href='#'pid='$proid'  id='chekout'>$product_name</a></h5>
              <p class='card-text'><strong>Price: $product_price  INR</strong></p>
              <p class='card-text text-info'><strong>Off:  $product_off  %</strong></p>
              <p class='card-text text-primary'><strong>Save:  $tt  </strong></p>
              <a href='#' pid='$proid'  id='add_cart' class='btn btn-outline-danger btn-sm'> <i class='fas fa-shopping-cart '></i> Add</a>
              <span id='more'><a href='#'pid='$proid' id='chekout' class='btn btn-outline-info btn-sm'>Detail</a></span>
           </div>
           </div>
           </div>
           </div>
          </div> 
         </div> ";
 		}
 		
 	}
 }
 if (isset($_POST["relative"])) {
  $pid=$_POST["pid"];
  $product_query="SELECT * FROM products WHERE pro_id='$pid'";
  $run_query=mysqli_query($con,$product_query);
   while($row=mysqli_fetch_array($run_query)) {
      $proid=$row["pro_id"];
      $pcat_name=$row["pcategory"];
    }
    $sql="SELECT * FROM products WHERE pcategory='$pcat_name' ORDER BY RAND()";
     $run_query=mysqli_query($con,$sql);
  if (mysqli_num_rows($run_query) > 0) {
    while($row=mysqli_fetch_array($run_query)) {
      $proid=$row["pro_id"];
      $pcat_name=$row["pcategory"];
      $pbrand=$row["pbrand"];
      $product_name=$row["product_name"];
      $product_qty=$row["qty"];
      $product_price=$row["price"];
      $product_off=$row["offer"];
      $product_image=$row["p_image"];
      $product_desc=$row["descr"];
      $tt=(($product_price* $product_off)/100);
      echo " <div id='card' class='card'>
       <div class='row'>
       <div class='media'>
        <div class='col-sm-1'></div>
        <div class='media-right'>
          <a href='#'><img pid='$proid' id='chekout' class='card-img-top mx-auto d-block' src='../image/$product_image'></a>
           </div>
          <div class='col-xsm-1'></div>
           <div class='col-md-10'>
          <div class='media-body'>
           <div class='card-body'>
              <h5 class='card-title'><a href='#' pid='$proid'  id='chekout'>$product_name</a></h5>
              <p class='card-text'><strong>Price: $product_price  INR</strong></p>
              <p class='card-text text-info'><strong>Off:  $product_off  %</strong></p>
              <p class='card-text text-primary'><strong>Save:  $tt  </strong></p>
              <a href='#' pid='$proid'  id='add_cart' class='btn btn-outline-danger btn-sm'> <i class='fas fa-shopping-cart '></i> Add</a>
              <span id='more'><a href='#'pid='$proid' id='chekout' class='btn btn-outline-info btn-sm'>Detail</a></span>
           </div>
           </div>
           </div>
           </div>
          </div> 
         </div>";
    }
    
  }
 }
 /*----this is filter function----*/
 if(isset($_POST["product_cat"]) || isset($_POST["selectBrand"])|| isset($_POST["keyword"])){
   if (isset($_POST["product_cat"])) {
     $cid= $_POST['cat_name'];
     $sql="SELECT * FROM products WHERE pcategory='$cid'";
    }
    else if (isset($_POST["selectBrand"])) {
      	 $bid= $_POST['brand_name'];
          $sql="SELECT * FROM products WHERE pbrand='$bid'";
      }
      else{
       $key=$_POST["key"];
       $sql="SELECT * FROM products WHERE pbrand LIKE '%$key%' OR product_name LIKE '%$key%' OR descr LIKE '%$key%' ";
       $run_query=mysqli_query($con,$sql);
      }  
     $run_query=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($run_query)) {
 			$proid=$row["pro_id"];
 			$pcat_name=$row["pcategory"];
 			$pbrand=$row["pbrand"];
 			$product_name=$row["product_name"];
 			$product_qty=$row["qty"];
 			$product_price=$row["price"];
 			$product_off=$row["offer"];
 			$product_image=$row["p_image"];
 			$product_desc=$row["descr"];
      $tt=(($product_price* $product_off)/100);
 			echo " <div id='card' class='card'>
       <div class='row'>
       <div class='media'>
        <div class='col-sm-1'></div>
        <div class='media-right'>
          <a href='#'><img pid='$proid' id='chekout' class='card-img-top mx-auto d-block' src='../image/$product_image'></a>
           </div>
          <div class='col-xsm-1'></div>
           <div class='col-md-10'>
          <div class='media-body'>
           <div class='card-body'>
              <h5 class='card-title'><a href='#'pid='$proid'  id='chekout'>$product_name</a></h5>
              <p class='card-text'><strong>Price: $product_price  INR</strong></p>
              <p class='card-text text-info'><strong>Off:  $product_off  %</strong></p>
              <p class='card-text text-primary'><strong>Save:  $tt  </strong></p>
              <a href='#' pid='$proid'  id='add_cart' class='btn btn-outline-danger btn-sm'> <i class='fas fa-shopping-cart '></i> Add</a>
              <span id='more'><a href='#'pid='$proid' id='chekout' class='btn btn-outline-info btn-sm'>Detail</a></span>
           </div>
           </div>
           </div>
           </div>
          </div> 
         </div> ";
 		}
 }
 if (isset($_POST["prod"])) {
 $pid=$_POST["pid"];
  $sql="SELECT * FROM products WHERE pro_id='$pid'";
  $run_query=mysqli_query($con,$sql);
   while($row=mysqli_fetch_array($run_query)) {
      $proid=$row["pro_id"];
      $pcat_name=$row["pcategory"];
      $pbrand=$row["pbrand"];
      $product_name=$row["product_name"];
      $product_qty=$row["qty"];
      $product_price=$row["price"];
      $product_off=$row["offer"];
      $product_image=$row["p_image"];
      $product_desc=$row["descr"];
      $p1=$row["p1"];
      $p2=$row["p2"];
      $p3=$row["p3"];
      $p4=$row["p4"];
      $p5=$row["p5"];
      $discount=($product_price * $product_off)/100;
      $save= $product_price -  $discount;
      echo " <div class='card-columns'>
    <div class='card'>
      <div class='card-body'>
        <img src='../image/$product_image' class='img-fluid'>
         <div class='media'>
    <div class='media-left'>
     <h4 class='text-primary'><b>Price : $product_price /</b></h4>
    </div>
    <div class='media-body'>
      <h4 class='text-center text-primary'>Offer :   $product_off % </h4>
    </div>
  </div>
  <p class='text-primary'>You can <b class='text-danger'> Save : $discount  </b>.On buying this product</p>
  
      </div>
       <div class='card-footer bg-dark'>
     <a href='#' pid='$proid'  id='add_cart' class='btn btn-outline-danger btn-sm'> <i class='fas fa-shopping-cart '></i> Add</a>
  </div>
    </div>
    <div class='card bg-primary'>
      <div class='card-heading'>
       <h3 class='text-capitalize text-white text-center'>  $product_name</h3>
      </div>
      <div class='card-body'>
         <h5 class='text-white text-capitalize text-center'>Description about product</h5>
       <ul class='list-group '>
  <li class='list-group-item '> $p1</li>
  <li class='list-group-item '> $p2 </li>
  <li class='list-group-item '> $p3</li>
  <li class='list-group-item '> $p4</li>
  <li class='list-group-item '> $p5</li>
  <li class='list-group-item '> $product_desc</li>
</ul> 
<br>
<br>
      </div>
    </div><div class='card bg-info'>
      <div class='card-heading'>
       <h3 class='text-capitalize text-white text-center'>Details provide by fts</h3>
      </div>
      <div class='card-body'>
         <ul class='list-group ''>
  <li class='list-group-item '> <h4 class='text-primary'> <i class='fas fa-truck'></i> <b>Free delivery And fast delivered</b></h4></li>
  <li class='list-group-item '><h4 class='text-primary'><i class='fas fa-exchange-alt'></i> Easy to return</h4>  </li>
  <li class='list-group-item '><h4 class='text-primary'> 1 year warranty</h4>( Except physically damage ) </li>
  <li class='list-group-item '><h4 class='text-primary'><i class='fab fa-cc-paypal'></i> Easy to pay online</h4>( Secure your payment don't worry)</li>
  <li class='list-group-item '><h4 class='text-primary'> Cash on delivery is available</h4></li>
</ul> 
  </div>
 
    </div>
  </div>";
  }
}
 //------this is add to cart---
 if (isset($_POST["addToCart"])) {
   $p_id=$_POST["pro_id"];
   $user_id=$_SESSION["uid"];
   $sql="SELECT * FROM cart WHERE pro_id='$p_id'AND user_id='$user_id'";
   $run_query=mysqli_query($con,$sql);
   $count=mysqli_num_rows( $run_query);
   if ($count > 0) {
     echo "<div class='alert alert-warning'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
              <b>Product is already added into the cart Continue Shopping..!</b>
          </div>";
   }else{
    $sql="SELECT * FROM products WHERE pro_id=' $p_id' ";
    $run_query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($run_query);
       $pid=$row["pro_id"];
       $offer=$row["offer"];
       $qty=$row["qty"];
       $seller_id=$row["seller_id"];
       $product_name=$row["product_name"];
       $p_image=$row["p_image"];
       $product_price=$row["price"];
       $offer=$row["offer"];
       $descr=$row["descr"];
      $sql="INSERT INTO `cart` (`id`, `pro_id`, `ip_add`, `user_id`,seller_id, `product_name`, `product_image`, `qty`,offer, `price`, `total_amt`,descr)VALUES (NULL, '$pid', '0', '$user_id','$seller_id','$product_name','$p_image', '1','$offer', ' $product_price', ' $product_price','$descr')";
     $run_query=mysqli_query($con,$sql);
     if ($run_query) {
         echo "<div class='alert alert-warning'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
              <b>Product is  added into the cart Continue Shopping..!</b>
          </div>";
       }  
   }
 }
 // ----this is for cart edit--
 if (isset($_POST["add_To_Cart"])||isset($_POST["cart_edit"])) {
    $uid=$_SESSION["uid"];
    $sql="SELECT * FROM cart WHERE user_id='$uid'";
    $run_query=mysqli_query($con,$sql);
    $count=mysqli_num_rows( $run_query);
    if ($count > 0) {
     
       $n=1;
       $total_amt=0;
      while ($row=mysqli_fetch_array( $run_query)) {
        $id=$row["id"];
        $pro_id=$row["pro_id"];
        $product_name= $row["product_name"];
        $p_image=$row["product_image"];
        $qty=$row["qty"];
        $price=$row["price"];
        $offer=$row["offer"];
        $main_price=$price-ceil(($price* $offer)/100);
        $price_array=array($main_price);
        $total_sum=array_sum($price_array);
        $total_amt=$total_amt + $total_sum;
          if(isset($_POST["add_To_Cart"]))  {
            
         echo " <div class='row'>
                <div id='bd' class='col-md-3'><h6>$n</h6></div>
                <div id='bd' class='col-md-3'><img src='../image/$p_image' width='70px'height='80px'></div>
                <div id='bd' class='col-md-3'><h6> $product_name</h6></div>
                <div id='bd' class='col-md-3'><h6>$price..</h6></div>
              </div>";
              $n=$n+1;
           }else{
            echo " <div class='row'>
                   <div class='col-md-2'>
                     <div class='btn-group'>
                      <a href='#'remove_id='$pro_id' class='btn btn-danger remove'><i class='fas fa-trash-alt'></i></a>
                      <a href='#' update_id='$pro_id'class='btn btn-success update'><i class='far fa-plus-square'></i></a>
                     </div>
                   </div>
                   <div class='col-md-2'><a href='#' pid='$pro_id'  id='checkout'> $product_name</a></div>
                   <div class='col-md-2'><a href='#' pid='$pro_id'  id='checkout'><img src='../image/$p_image' width='100px'height='150px'></a></div>
                   <div class='col-md-2'><input type='text' class='form-control price' pid='$pro_id' id='price-$pro_id' value='$price' disabled='type'></div>
                   <div class='col-md-2'><input type='text' class='form-control qty' pid='$pro_id' id='qty-$pro_id' value='$qty' ></div>
                   <div class='col-md-2'><input type='text' class='form-control total' pid='$pro_id' id='total-$pro_id' value='$price' disabled='type'></div>
                 </div>";
        } 
                                  
      }
       if (isset($_POST["cart_edit"])) { 
         echo "<div class='row'>
       <div class='col-md-8'></div>
       <div  class='col-md-4'>
        <div id='total'> <h4><b>Total price= $total_amt</b></h4></div>
       </div>
     </div>";



         }
    }
 }
 // this is update remove and count product in the cart
 if (isset($_POST["cart_count"])) {
  $uid=$_SESSION["uid"];
    $sql="SELECT * FROM cart WHERE user_id='$uid'";
    $run_query=mysqli_query($con,$sql);
     echo $count=mysqli_num_rows( $run_query);
    
 }
 if (isset($_POST["remove"])) {
   $pid=$_POST["removeId"];
   $uid=$_SESSION["uid"];
   $sql="DELETE FROM cart WHERE user_id='$uid'AND pro_id='$pid'";
   $run_query=mysqli_query($con,$sql);
   if ($run_query) {
    echo "<div class='alert alert-warning'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
              <b>Product is deleted from the cart Continue Shopping..!</b>
          </div>";
   }
 }
 if (isset($_POST["update"])) {
    $uid=$_SESSION["uid"];
    $pid=$_POST["updateId"];
    $qty=$_POST["qty"];
    $price=$_POST["price"];
    $total=$_POST["total"];
    $sql="UPDATE cart SET qty='$qty',price='$price',total_amt='$total' WHERE user_id='$uid'AND pro_id=' $pid'";
    $run_query=mysqli_query($con,$sql);
    if ($run_query) {
      echo "<div class='alert alert-warning'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
              <b>Product is updated Continue Shopping..!</b>
          </div>";
    }
 }
 //----- this is for product detail...in cart .php
if (isset($_POST["product_d"])){
   $uid=$_SESSION["uid"];
   $pid=$_POST["pid"];
   $sql="SELECT * FROM cart WHERE pro_id='$pid'AND user_id='$uid' ";
   $run_query=mysqli_query($con,$sql);
   while ($row=mysqli_fetch_array( $run_query)) {
        $pro_id=$row["pro_id"];
        $product_name= $row["product_name"];
        $p_image=$row["product_image"];
        $qty=$row["qty"];
        $price=$row["price"];
        $offer=$row["offer"];
        $descr=$row["descr"];
        $main_price=$price-ceil(($price* $offer)/100);
        $main_price=($main_price*$qty);
        echo " <div class='container-fluid'>
  <div class='row'>
    <div class='col-md-5'>
      <div class='exzoom' id='exzoom'>
         <div class='exzoom_img_box'>
           <ul class='exzoom_img_ul'>
           <li><img src='../image/$p_image'></li>
           </ul>
          </div>
          <div class='exzoom_nav'></div>
      </div>
     </div>
      <div class='col-md-7'>
        <div class='card'>
          <div class='card-header bg-info'>
            <h5><big> $product_name</big></h5>
          </div>
          <div class='card-body'>
           <ul class='list-group' >
             <li class='list-group-item col-md-3'>100% Quailty</li>
              <li class='list-group-item col-md-3' ><i class='fas fa-shipping-fast'></i> Free Fast Delivery</li>
           </ul><br>
            <ul class='list-group'>
              <li class='list-group-item col-md-3'> 100% Returns</li>

            </ul>
          </div>
           <div class='card-footer bg-danger'>
                <h5 class='card-text text-center'>$descr</h5>
           </div>
          </div>
          <div class='card'>
            <div class='row'>
              <div class='col-md-3'>
                <form method='post' action='cart.php' id='form4'>
                   <div id='input-group' class='form-group'>
                    <label for='Size'><h4><b>Size</b></h4></label>
                      <select name='size' class='form-control size' pid='$pid' id='size-$pid'>
                           <option value='default'>please select size</option>
                           <option value='5'>5</option>
                           <option value='6'>6</option>
                           <option value='7'>7</option>
                           <option value='8'>8</option>
                           <option value='9'>9</option>
                           <option value='10'>10</option>
                           <option value='L'>LIMIT</option>
                           <option value='xl'>xl</option>
                           <option value='xxl'>xxl</option>
                           <option value='S'>S</option>
                           <option value='M'>M</option>
                     </select>
                    </div>
                    <div id='input-group' class='form-group'>
                        <label for='color'><h4><b>Color</b></h4></label>
                        <select name='color' class='form-control color' pid='$pid' id='color-$pid'>
                          <option value='default'>Select color</option>
                           <option value='red'>Red</option>
                           <option value='grey'>grey</option>
                           <option value='white'>white</option>
                           <option value='black'>black</option>
                           <option value='purpal'>purpal</option>
                           <option value='light-blue'>light_blue</option>
                       </select>
                   </div>
                </form> 
              </div>
              <div class='col-md-3'>
                <br>
                <h4 class='card-body '><b>Price= $price/</b></h4>
                <br>
                <h5 class='card-body '>Offer%=$offer%</h5>
                <h5 class='card-body '>Quantity: $qty</h5>
              </div>
              <div class='col-md-6'>
                 <div class='card'>
                <div class='card-header bg-info'>
                  <h5>After discount the main price of this product</h5>
                </div>
                <div class='card-body'><h3><b>Price= $main_price/</b></h3></div>
                <br>
                 <div class='card-footer'>
                <a href='#' pid='$pid' class='btn btn-warning conform'><h4><b>Continue Order</b></h4></a>
                 </div>
              </div>
              </div>
            </div>
            <div class='card-footer'>
             <a href='#' pid='$pid' class='btn btn-success check'style='margin-top: 30px;margin-left: 40px;'>Check Order</a>
            </div>
          </div>
        </div>
    </div>
 </div> ";
   }  
 
}
///this is product size and color edit ---
if (isset($_POST["conform"])) {
   $uid=$_SESSION["uid"];
   $pid=$_POST["pid"];
   $size=$_POST["size"];
   $color=$_POST["color"];
   $sql="SELECT * FROM order_p WHERE user_id='$uid' AND pro_id='$pid' ";
    $run_query=mysqli_query($con,$sql);
    $count=mysqli_num_rows( $run_query);
   if ($count > 0) {
      $sql="UPDATE  order_p SET size='$size',color='$color' WHERE user_id='$uid'AND pro_id=' $pid'";
      $run_query=mysqli_query($con,$sql);
   }else{
  $sql="SELECT * FROM cart WHERE user_id='$uid' AND pro_id='$pid' ";
  $run_query=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($run_query);
       $pid=$row["pro_id"];
       $offer=$row["offer"];
       $qty=$row["qty"];
       $seller_id=$row["seller_id"];
       $product_name=$row["product_name"];
       $p_image=$row["product_image"];
       $price=$row["price"];
       $main_prc=$price-ceil(($price* $offer)/100);
       $main_price=($main_prc*$qty);
       $sql="INSERT INTO `order_p` (`id`, `pro_id`, `user_id`, `seller_id`, `product_name`, `qty`, `price`, `offer`, `p_image`, `size`, `color`, `main_p`) VALUES (NULL, '$pid', '$uid', '$seller_id', '$product_name', '$qty', '$price', '$offer','$p_image', '$size', '$color', '$main_price')";
        $run_query=mysqli_query($con,$sql);
        if ($run_query) {
        echo "<div class='alert alert-warning'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
              <b>Your order is conform .Now check your order and payment ... and enjoy Shopping</b>
          </div>";

        }
    }
}
if (isset($_POST["check"])) {
  $pid=$_POST["pid"];
  $uid=$_SESSION["uid"];
   $sql="SELECT * FROM order_p WHERE user_id='$uid' AND pro_id='$pid' ";
  $run_query=mysqli_query($con,$sql);
  $count=mysqli_num_rows( $run_query);
  if ($count==0) {
    echo "<div class='alert alert-warning'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
              <b>First Edit your order After that you can check your order!</b>
          </div>";
  } else{
           $sql="SELECT * FROM order_p WHERE user_id='$uid' AND pro_id='$pid' ";
           $run_query=mysqli_query($con,$sql);
           while ($row=mysqli_fetch_array( $run_query)) {
                  $pid=$row["pro_id"];
                  $product_name= $row["product_name"];
                  $p_image=$row["p_image"];
                  $qty=$row["qty"];
                  $price=$row["price"];
                  $offer=$row["offer"];
                  $main_price=$row["main_p"];
                  $size=$row["size"];
                  $color=$row["color"];
              echo "<div class='card-header bg-info'>
          <h4><b>$product_name</b></h4>
        </div>
        <div class='card-body'>
          <div class='row'>
            <div class='col-md-6'>
              <img src='../image/$p_image' width='150px;'' height='200px;'>
            </div>
            <div class='col-md-3 ''>
              <h5><b>Price: $price/</b></h5><br>
              <h6>Offer%= $offer%</h6><br>
              <h6><b>Main Price:$main_price/</b></h6>
            </div>
            <div class='col-md-3 ''>
              <h5>Quantity: $qty</h5><br>
              <h6>Size:  $size</h6><br>
              <h5>Color:  $color</h5>
            </div>
          </div>
        </div>
         <div class='card-footer'>
          <a href='#' pid='$pid' class='btn btn-success payment'>Payment Now</a>";           
     }         
    }

}
  if (isset($_POST["address"])) {
 $uid=$_SESSION["uid"];
 $sql="SELECT * FROM user_info WHERE user_id=' $uid'";
 $run_query=mysqli_query($con,$sql);
 while ($row=mysqli_fetch_array( $run_query)) {
                $user_name=$row["username"];
                $email=$row["email"];
                $mobile=$row["mobile"];
                $address1=$row["address1"];
                $address2=$row["address2"];
    
         echo " <div class='card'>
         <div class='card-title'>
         <h4 class='text-center'><b> This is your address where you want to delivered.<br> If you want change address then change it.<b></h4>
         </div>
        <div class='card-header'>
          <h5 class='card-text'> $user_name</h5>
           <div class='row'>
            <div class='col-md-3'></div>
             <div class='col-md-3'></div>
              <div class='col-md-6'>
                <input type='text' class='form-control' name='mobile' value='$mobile' disabled='type' ><br>
                 <input type='text' class='form-control' name='email' value='$email'  disabled='type' >
              </div>
          </div>
        </div>
        <div class='card-body'>
          <h5><b>Address</b></h5>
             <a href='#' uid='$uid' class='btn btn-warning address_edit'>Edit</a>
          <div class='row'>
            <div class='col-md-3'></div>
             <div class='col-md-3'></div>
              <div class='col-md-6'>
                <input type='text' class='form-control' uid='$uid' id='address1-$uid'  value='$address1' ><br>
                 <input type='text' class='form-control'uid='$uid' id='address2-$uid'  value='$address2' >
              </div>
          </div>
        </div>
         <div class='card-footer'>
         <div id='massage'></div>
        </div>
      </div>"; 
      }      
}
if (isset($_POST["address_edit"])) {
   $uid=$_SESSION["uid"];
   $address1=$_POST["address1"];
   $address2=$_POST["address2"];
   $sql="UPDATE user_info SET address1='$address1',address2='$address2' WHERE user_id='$uid'";
   $run_query=mysqli_query($con,$sql);
    if ($run_query) {
         echo "<div class='alert alert-warning'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
              <b>Your address is changed .Now check your order and payment ... and enjoy Shopping</b>
          </div>";
        }
}
if (isset($_POST["payment"])) {
     $pid=$_POST["pid"];
     $uid=$_SESSION["uid"];
     $sql="SELECT * FROM order_p WHERE user_id='$uid' AND pro_id='$pid' ";
     $run_query=mysqli_query($con,$sql);
      while ($row=mysqli_fetch_array( $run_query)) {
                  $pid=$row["pro_id"];
                  $product_name= $row["product_name"];
                  $p_image=$row["p_image"];
                  $qty1=$row["qty"];
                  $price=$row["price"];
                  $offer=$row["offer"];
                  $main_price=$row["main_p"];
                  $size=$row["size"];
                  $color=$row["color"];
                  $seller_id=$row["seller_id"];
      }
      if ($run_query) {
        echo " <li class='text-center'>Select payment mode</li>
        <br>
        <br>
           <li><a href='../payment/TxnTest.php' class='text-white credebit' style='text-decoration: none;' pid='$pid'><h5><i class='fab fa-cc-visa'></i> Payment by Credit and Debit card </h5></a></li>
        <br>
           <li><a href='#' class='text-white paytm' style='text-decoration: none;' pid='$pid'><h5><i class='fas fa-money-bill-alt'></i> Paytm Bhim and Google pay </h5></a></li>
         <br>
           <li><a href='#' class='text-white cod' style='text-decoration: none;' pid='$pid'><h5><i class='fas fa-money-bill-wave-alt'></i> Case on delivery</h5></a></li>";
      }
}
if (isset($_POST["cod"])) {
     $pid=$_POST["pid"];
     $uid=$_SESSION["uid"];
         $sql="SELECT * FROM orders WHERE  pro_id='$pid'AND user_id='$uid' ";
         $run_query=mysqli_query($con,$sql);
         $count=mysqli_num_rows( $run_query);
       if ( $count>0) {
       echo "<div class='alert alert-warning'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
              <b>this product is alredy ordered plese check your account</b>
          </div>";
     }else{
                 $sql="SELECT * FROM order_p WHERE user_id='$uid' AND pro_id='$pid' ";
                 $run_query=mysqli_query($con,$sql);
                  while ($row=mysqli_fetch_array( $run_query)) {
                  $pid=$row["pro_id"];
                  $product_name= $row["product_name"];
                  $p_image=$row["p_image"];
                  $qty1=$row["qty"];
                  $price=$row["price"];
                  $offer=$row["offer"];
                  $main_price=$row["main_p"];
                  $size=$row["size"];
                  $color=$row["color"];
                  $seller_id=$row["seller_id"];
               }
              $sql="SELECT * FROM user_info WHERE user_id=' $uid'";
               $run_query=mysqli_query($con,$sql);
               while ($row=mysqli_fetch_array( $run_query)) {
                $user_name=$row["username"];
                $email=$row["email"];
                $mobile=$row["mobile"];
                $address1=$row["address1"];
                $address2=$row["address2"];
              }
             $date=date("d/m/y");
             $address="$address1\n$address2";
             $txn_id=uniqid('FTS',true);
             $sql="INSERT INTO `orders` (`order_id`, `user_id`,`Date1`, `seller_id`, `pro_id`, `p_image`, `product_name`, `color`, `size`, `qty`, `main_p`, `trx_id`, `p_status`,pay_type,username,mobile,address) VALUES (NULL, '$uid','$date', '$seller_id', '$pid','$p_image', '$product_name', ' $color', '$size', '$qty1', '$main_price', '$txn_id', 'On the way','COD','$user_name',' $mobile','$address')";
              $run_query=mysqli_query($con,$sql);
              if ($run_query) {
                 $sql="DELETE FROM order_p WHERE pro_id='$pid'AND user_id='$uid'";
                 $run_query=mysqli_query($con,$sql);
              }
              $sql="SELECT * FROM orders WHERE  pro_id='$pid' ";
              $run_query=mysqli_query($con,$sql);
              $count=mysqli_num_rows( $run_query);
              while ($row=mysqli_fetch_array( $run_query)) {
                  $pid=$row["pro_id"];
                  $product_name= $row["product_name"];
                  $p_image=$row["p_image"];
                  $txn_id=$row["trx_id"];
                  $color=$row["color"];
                  $size=$row["size"];
                  $main_price=$row["main_p"];
                  $qty=$row["qty"];
                  $seller_id=$row["seller_id"];
                  $p_status=$row["p_status"];
          }
            if ( $count>0) {
                  echo " <div class='alert alert-success '>
                      <div class='card-header bg-dark'>
                     <h3 class='text-center text-white'><b>Thanks For Shopping with F T S</b></h3>
                   </div>
                   <div class='card-title'>
                   <h4 class='text-center'><b>$product_name</b></h4>
                   </div>
                   <div class='card-body'>
                   <div class='row'>
                   <div class='col-md-3'>
                   <img src='../image/$p_image' width='150px;'' height='200px;'>
                   </div>
                   <div class='col-md-6 '>
                   <h5><b>FTS ID:</b> $txn_id</h5><br>
                   <h6><b>Payment: $main_price</b></h6><br>
                   <h6>Payment mode: CASE ON DELIVERY</h6>
                   </div>
                   <div class='col-md-3 '>
                   <h6>Quantity: $qty</h6><br>
                   <h6>Size:  $size</h6><br>
                   <h6>Color:  $color</h6>
                   </div>
                   </div>
                   </div>
                   <div class='card-footer'>
                   <p><small>Order will be delivered with in two days</small></p>
                    <a href='#' class='btn btn-success massage' pid='$pid'>Order placed</a>
                   </div>
                   </div>";
           }
        }         
}
if (isset($_POST["massage"])) {
     $uid=$_SESSION["uid"];
     $pid=$_POST["pid"];
      $sql="DELETE FROM cart WHERE pro_id='$pid'AND user_id='$uid'";
      $run_query=mysqli_query($con,$sql); 
      $sql="SELECT * FROM user_info WHERE user_id=' $uid'";
      $run_query=mysqli_query($con,$sql);
        while ($row=mysqli_fetch_array( $run_query)) {
                $user_name=$row["username"];
                $email=$row["email"];
                $mobile=$row["mobile"];
          }
         $sql="SELECT * FROM orders WHERE  pro_id='$pid' ";
         $run_query=mysqli_query($con,$sql);
         $count=mysqli_num_rows( $run_query);
         while ($row=mysqli_fetch_array( $run_query)) {
                  $pid=$row["pro_id"];
                  $product_name= $row["product_name"];
                  $p_image=$row["p_image"];
                  $txn_id=$row["trx_id"];
                  $color=$row["color"];
                  $size=$row["size"];
                  $main_price=$row["main_p"];
                  $qty=$row["qty"];
                  $seller_id=$row["seller_id"];
                  $p_status=$row["p_status"];
          }
         
          $from="rajeshrathore05011998@gmail.com";
          $header= $from;
          $massage="Hi $user_name your ordered\n FTS id: $txn_id\n Payment:$main_price..\n Product is: $product_name\nQuantity:  $qty\n Get ready with case Your order delivered within 2 days";
          $subject='FROM FTS';
          $carrier="txtlocal.co.uk";
          $to= $mobile.'@'.$carrier;
         
     
  // Authorisation details.
  $username = "rajeshrathore05011998@gmail.com";
  $hash = "8db6f81ef15add6ebdd1e16de08fa3f3136c447606fe0357262c1a574a47ba18";

  // Config variables. Consult http://api.textlocal.in/docs for more info.
  $test = "0";

  // Data for text message. This is the text message data.
  $sender = "TXTLCL"; // This is who the message appears to be from.
  $numbers = " $mobile"; // A single number or a comma-seperated list of numbers
  $message = " $massage";
  // 612 chars or less
  // A single number or a comma-seperated list of numbers
  $message = urlencode($message);
  $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
  $ch = curl_init('http://api.textlocal.in/send/?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch); // This is the result from the API
  curl_close($ch);
  echo("massage send to".$to);
  header('location:../profile.php');
  
}
 if (isset($_POST["accnt"])) {
   $uid=$_SESSION["uid"];
   $sql="SELECT * FROM user_info WHERE user_id='$uid'";
    $run_query=mysqli_query($con,$sql);
     while ($row=mysqli_fetch_array( $run_query)) {
                $user_name=$row["username"];
                $email=$row["email"];
                $mobile=$row["mobile"];
                $address1=$row["address1"];
                $address2=$row["address2"];
    
         echo " <div class='card'>
        <div class='card-header'>
          <h5 class='card-text'> $user_name</h5>
           <div class='row'>
            <div class='col-md-3'></div>
             <div class='col-md-3'></div>
              <div class='col-md-6'>
                <input type='text' class='form-control' name='mobile' value='$mobile' disabled='type' ><br>
                 <input type='text' class='form-control' name='email' value='$email'  disabled='type' >
              </div>
          </div>
        </div>
        <div class='card-body'>
          <h5><b>Address</b></h5>
          <div class='row'>
            <div class='col-md-3'></div>
             <div class='col-md-3'></div>
              <div class='col-md-6'>
                <input type='text' class='form-control' uid='$uid' id='address1-$uid'  value='$address1' ><br>
                <input type='text' class='form-control'uid='$uid' id='address2-$uid'  value='$address2' >
              </div>
          </div>
        </div>
         <div class='card-footer'>
         <div id='massage'></div>
        </div>
      </div>"; 
      } 
 }
if (isset($_POST["order"])) {
  $uid=$_SESSION["uid"];
    $sql="SELECT * FROM orders WHERE user_id='$uid'";
    $run_query=mysqli_query($con,$sql);
    if (mysqli_num_rows($run_query)>0) {
      while ($row=mysqli_fetch_array( $run_query)) {
                  $pid=$row["pro_id"];
                  $product_name= $row["product_name"];
                  $p_image=$row["p_image"];
                  $main_price=$row["main_p"];
                  $qty=$row["qty"];
                  $seller_id=$row["seller_id"];
                  $p_status=$row["p_status"];
                  $pay_type=$row["pay_type"];
                  $fts_id=$row["trx_id"];
                    if ( $p_status=="On the way") {
                     echo " <div class='card-body'>
                     <div class='row'>
                       <div class='col-md-1'>
                             <a href='#'pid='$pid' class='btn btn-danger' id='cancle'>Order cancle</a>
                       </div>
                       <div class='col-md-2'>$product_name</div>
                       <div class='col-md-2'><img src='../image/$p_image' width='100px' height='150px'></div>
                       <div class='col-md-1'><h4><b><small>$pay_type</small></b></h4></div>
                       <div class='col-md-1'> $qty</div>
                       <div class='col-md-1'>  $main_price</div>
                       <div class='col-md-2'><b> $fts_id</b></div>
                       <div class='col-md-2'><h5><b>$p_status</b></h5></div>
                     </div>
                    </div>";
                  }elseif (($p_status=="Successfully delevered")||($p_status=="Ready to delivery")){
                     echo " <div class='card-body'>
                     <div class='row'>
                       <div class='col-md-1'>
                             <a href='#'pid='$pid' class='btn btn-info' id='return'>Return</a>
                       </div>
                       <div class='col-md-2'>$product_name</div>
                       <div class='col-md-2'><img src='../image/$p_image' width='100px' height='150px'></div>
                       <div class='col-md-1'><h4><b><small>$pay_type</small></b></h4></div>
                       <div class='col-md-1'> $qty</div>
                       <div class='col-md-1'>  $main_price</div>
                       <div class='col-md-2'><b> $fts_id</b></div>
                       <div class='col-md-2'><h5><b>$p_status</b></h5></div>
                     </div>
                    </div>";
                  }
                  elseif ($p_status=="order cancle") {
                    $sql="DELETE FROM orders WHERE user_id='$uid'AND p_status='$p_status'";
                    $run_query=mysqli_query($con,$sql);
                  }
      }
    }
}
if (isset($_POST["cancle"])||isset($_POST["return"])) {
  if (isset($_POST["cancle"])) {
    $pid=$_POST["pid"];
    $uid=$_SESSION["uid"];
    $date=date("d/m/y");
    $sql="UPDATE orders SET p_status='order cancle',Date1='$date' WHERE user_id='$uid'AND pro_id=' $pid'";
    $run_query=mysqli_query($con,$sql);
     if ($run_query) {
         echo "<div class='alert alert-warning'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
              <b>Order is cancled please Continue Shopping..!</b>
          </div>";
       } 
  }else{
      $date=date("d/m/y");
     $pid=$_POST["pid"];
    $uid=$_SESSION["uid"];
    $sql="UPDATE orders SET p_status='return product',Date1='$date' WHERE user_id='$uid'AND pro_id=' $pid'";
    $run_query=mysqli_query($con,$sql);
     if ($run_query) {
         echo "<div class='alert alert-warning'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
              <b>Your product return request is sended to the seller thanks for  Shopping with us..!</b>
          </div>";
       } 
  }
}


?>