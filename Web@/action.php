<?php
 include("registration/server.php");
$con = mysqli_connect('localhost', 'root', '', 'fts');
if(!$con){
    echo 'connection error';
} 
if (isset($_POST["category"])) {
  $cat_query="SELECT * FROM category";
  $run_query=mysqli_query($con,$cat_query);
  if (mysqli_num_rows($run_query) > 0) {
    while($row=mysqli_fetch_array($run_query)) {
      $cid=$row["cat_id"];
      $cat_name=$row["pcategory"];
      echo " <a class='dropdown-item' href='category/''> $cat_name</a>";

    }
  } 
   
 } 
 if (isset($_POST["products"])||isset($_POST["pro_ece"])||isset($_POST["pro_clothes"])||isset($_POST["pro_shoes"])||isset($_POST["pro_fas"])||isset($_POST["pro_fas2"])||isset($_POST["pro_home"])||isset($_POST["book"])||isset($_POST["sport"])||isset($_POST["fast"])||isset($_POST["sweet"])||isset($_POST["milk"])||isset($_POST["laptop"])||isset($_POST["keyword"])) {
  if (isset($_POST["products"])) {
     $category=$_POST["cat"];
     $sql="SELECT * FROM products WHERE pcategory='$category'ORDER BY RAND() ";
  }elseif (isset($_POST["pro_clothes"])) {
    $category=$_POST["cat2"];
     $sql="SELECT * FROM products WHERE pcategory='$category'ORDER BY RAND() ";
  }
  elseif (isset($_POST["pro_shoes"])) {
    $category=$_POST["cat3"];
     $sql="SELECT * FROM products WHERE pcategory='$category'ORDER BY RAND() ";
  }
   elseif (isset($_POST["pro_fas"])){
    $category=$_POST["cat4"];
     $sql="SELECT * FROM products WHERE pcategory='$category'ORDER BY RAND() ";
  }
   elseif (isset($_POST["pro_fas2"])){
    $category=$_POST["cat5"];
     $sql="SELECT * FROM products WHERE pcategory='$category'ORDER BY RAND() ";
  }
   elseif (isset($_POST["pro_home"])){
    $category=$_POST["cat6"];
     $sql="SELECT * FROM products WHERE pcategory='$category'ORDER BY RAND() ";
  }
   elseif (isset($_POST["sport"])){
    $category=$_POST["cat7"];
     $sql="SELECT * FROM products WHERE pcategory='$category'ORDER BY RAND() ";
  }
   elseif (isset($_POST["fast"])){
    $category=$_POST["cat8"];
     $sql="SELECT * FROM products WHERE pcategory='$category'ORDER BY RAND() ";
  }
   elseif (isset($_POST["book"])){
    $category=$_POST["cat12"];
     $sql="SELECT * FROM products WHERE pcategory='$category'ORDER BY RAND() ";
  }
   elseif (isset($_POST["sweet"])){
    $category=$_POST["cat9"];
     $sql="SELECT * FROM products WHERE pcategory='$category'ORDER BY RAND() ";
  }
   elseif (isset($_POST["milk"])){
    $category=$_POST["cat10"];
     $sql="SELECT * FROM products WHERE pcategory='$category'ORDER BY RAND() ";
  }
  elseif (isset($_POST["laptop"])){
    $category=$_POST["cat11"];
     $sql="SELECT * FROM products WHERE pcategory='$category'ORDER BY RAND() ";
  }
  elseif (isset($_POST["keyword"])){
     $key=$_POST["key"];
    $sql="SELECT * FROM products WHERE pbrand LIKE '%$key%' OR product_name LIKE '%$key%' OR descr LIKE '%$key%' ";
  }
  else{
     $category=$_POST["cat1"];
      $sql="SELECT * FROM products WHERE pcategory='$category'ORDER BY RAND() ";
  }
  $run_query=mysqli_query($con,$sql);
  if (mysqli_num_rows($run_query) > 0) {
     $n=0;
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
      $n++;
      if ($n==4) {
        break;
      }
      echo "
      <div id='card1' class='card'>
       <div class='row'>
       <div class='media'>
        <div class='col-sm-1'></div>
        <div class='media-right'>
          <a href='#'><img pid='$proid' id='chekout' class='card-img-top mx-auto d-block' src='image/$product_image'></a>
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
         </div>";
    }
    
  }
 }
if (isset($_POST["addToCart"])) {
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
        $total=$row["total_amt"];
          if(isset($_POST["addToCart"]))  {
            
         
         echo " <div class='row'>
                <div id='bd' class='col-md-3'><h6>$n</h6></div>
                <div id='bd' class='col-md-3'><img src='image/$p_image' width='70px' height='80px'></div>
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
                   <div class='col-md-2'> $product_name</div>
                   <div class='col-md-2'><img src='image/$p_image' width='100px' height='150px'></div>
                   <div class='col-md-2'><input type='text' class='form-control price' pid='$pro_id' id='price-$pro_id' value='$price' disabled='type'></div>
                   <div class='col-md-2'><input type='text' class='form-control qty' pid='$pro_id' id='qty-$pro_id' value='$qty' ></div>
                   <div class='col-md-2'><input type='text' class='form-control total' pid='$pro_id' id='total-$pro_id' value='$total' disabled='type'></div>
                 </div>";
        } 
                                  
      }
    
    }
 }
 if (isset($_POST["cart_count"])) {
    $uid=$_SESSION["uid"];
    $sql="SELECT * FROM cart WHERE user_id='$uid'";
    $run_query=mysqli_query($con,$sql);
     echo $count=mysqli_num_rows( $run_query);
    
 }
 if (isset($_POST["add_ToCart"])) {
   if(!isset($_SESSION["uid"])){
       header("location:registration/login.php");
     }else{
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
       $seller_id=$row["seller_id"];
       $descr=$row["descr"];
       $product_name=$row["product_name"];
       $p_image=$row["p_image"];
       $product_price=$row["price"];
     $sql="INSERT INTO `cart` (`id`, `pro_id`, `ip_add`, `user_id`, seller_id, `product_name`, `product_image`, `qty`,offer, `price`, `total_amt`,descr)VALUES (NULL, '$pid', '0', ' $user_id',' $seller_id', '$product_name','$p_image', '1', ' $offer', ' $product_price', ' $product_price','$descr')";
     $run_query=mysqli_query($con,$sql);
     if ($run_query) {
         echo "<div class='alert alert-warning'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
              <b>Product is  added into the cart Continue Shopping..!</b>
          </div>";
       }  
   }
 }
}
 if (isset($_POST["product_in"])||isset($_POST["product_in1"])) {
   $sql="SELECT * FROM products ORDER BY RAND()";
   $run_query=mysqli_query($con,$sql);
   $count=mysqli_num_rows( $run_query);
   $n=0;
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
      $n++;
      if ($n==4) {
        break;
      }
      echo "
              <div class='card'>
              <p class='card-header'><a href='#'> $pcat_name</a></p>
              <div id='card-img'  class='card-body text-center'>
                  <a href='#'><img class='card-img-top mx-auto d-block' src='image/$product_image'></a>
              </div>
              <span class='card-footer'>
              <p><strong>Start from Price: $product_price  INR</strong></p>
              <a href='#' class='btn btn-outline-danger'>More about</a><span id='span'><p><strong> $product_off % 0ff</strong></p></span>
              </span>
              </div>
            ";
    }
 if (isset($_POST["product_in1"])) {
   $sql="SELECT * FROM products ORDER BY RAND()";
   $run_query=mysqli_query($con,$sql);
   $count=mysqli_num_rows( $run_query);
   $n=0;
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
      $n++;
      if ($n==4) {
        break;
      }
      echo "
              <div class='card'>
              <p class='card-header'><a href='#' class='category_fetch' cid='$pcat_name'> $pcat_name</a></p>
              <div id='card-img'  class='card-body text-center'>
               <a href='#'><img class='card-img-top mx-auto d-block' src='image/$product_image'></a>
              </div>
              <span >
              <p><strong>Start from Price: $product_price  INR</strong></p>
              <a href='#' class='btn btn-outline-danger'>More about</a><span id='span'><p><strong> $product_off % 0ff</strong></p></span>
              </span>
              </div>
            ";
    }
   }
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
                       <div class='col-md-2'><img src='image/$p_image' width='100px' height='150px'></div>
                       <div class='col-md-1'><h4><b><small>$pay_type</small></b></h4></div>
                       <div class='col-md-1'> $qty</div>
                       <div class='col-md-1'>  $main_price</div>
                       <div class='col-md-2'><b> $fts_id</b></div>
                       <div class='col-md-2'><h5><b>$p_status</b></h5></div>
                     </div>
                    </div>";
                  }elseif (($p_status=="Successfully delevered")||($p_status=="Ready to delivery")) {
                     echo " <div class='card-body'>
                     <div class='row'>
                       <div class='col-md-1'>
                             <a href='#'pid='$pid' class='btn btn-info' id='return'>Return</a>
                       </div>
                       <div class='col-md-2'>$product_name</div>
                       <div class='col-md-2'><img src='image/$p_image' width='100px' height='150px'></div>
                       <div class='col-md-1'><h4><b><small>$pay_type</small></b></h4></div>
                       <div class='col-md-1'> $qty</div>
                       <div class='col-md-1'>  $main_price</div>
                       <div class='col-md-2'><b> $fts_id</b></div>
                       <div class='col-md-2'><h5><b>$p_status</b></h5></div>
                     </div>
                    </div>";
                  }
   
      }
}
if (isset($_POST["refrence"])) {
 $refrence_id=$_POST["ref_id"];
          $sql="SELECT * FROM seller_info";
          $run_query=mysqli_query($con,$sql);
           while ($row=mysqli_fetch_array( $run_query)) {
                  $seller_id=$row["seller_id"];
                }
  $sql="SELECT * FROM gm_info WHERE refrence_id='$refrence_id'";
  $run_query=mysqli_query($con,$sql);
   while ($row=mysqli_fetch_array( $run_query)) {
                  $gm_name=$row["gm_name"];
                  $refrence_id=$row["refrence_id"];
   }
        if (empty($refrence_id)||($refrence_id==$seller_id)) {
          if (($refrence_id== $seller_id)) {
             $sql="SELECT * FROM seller_info WHERE seller_id='$refrence_id'";
          }else{
              $sql="SELECT * FROM seller_info";
          }
          $run_query=mysqli_query($con,$sql);
           while ($row=mysqli_fetch_array( $run_query)) {
                  $seller_name=$row["seller_name"];
                  $refrence_id=$row["refrence_id"];
                  $sto_name=$row["store_name"];
                  $mobile=$row["mobile"];
                  $address_1=$row["address1"];
                  $address_2=$row["address2"];
                  $accnt=$row["b_account"];
                  $ifsc=$row["ifsc"];
                  $adress="$address_1 \n $address_2";
                  echo " <div class='row'>
        <div class='col-md-2'><h6> $seller_name</h6></div>
         <div class='col-md-1'><h6> $mobile</h6></div>
           <div class='col-md-2'><h6> $refrence_id</h6></div>
            <div class='col-md-2'><h6>$accnt</h6></div>
             <div class='col-md-1'><h6>$ifsc</h6></div>
            <div class='col-md-2'><h6></h6></div>
             <div class='col-md-2'><h6> $sto_name</h6></div>
      </div>
      <hr>";
      }   
                } else{ 
                 $sql="SELECT * FROM seller_info WHERE refrence_id='$refrence_id'";
                 $run_query=mysqli_query($con,$sql);
                 while ($row=mysqli_fetch_array( $run_query)) {
                  $seller_name=$row["seller_name"];
                  $refrence_id=$row["refrence_id"];
                  $sto_name=$row["store_name"];
                  $mobile=$row["mobile"];
                  $address_1=$row["address1"];
                  $address_2=$row["address2"];
                  $accnt=$row["b_account"];
                  $ifsc=$row["ifsc"];
                  $adress="$address_1 \n $address_2";      
          echo " <div class='row'>
        <div class='col-md-2'><h6> $seller_name</h6></div>
         <div class='col-md-1'><h6> $mobile</h6></div>
           <div class='col-md-2'><h6> $refrence_id</h6></div>
            <div class='col-md-2'><h6>$accnt</h6></div>
             <div class='col-md-1'><h6>$ifsc</h6></div>
            <div class='col-md-2'><h6>$gm_name</h6></div>
             <div class='col-md-2'><h6> $sto_name</h6></div>
      </div>
      <hr>";
      }       
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
        <img src='image/$product_image' class='img-fluid'>
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
if (isset($_POST["gm_info"])) {
   $sql="SELECT * FROM gm_info";
    $run_query=mysqli_query($con,$sql);
     while ($row=mysqli_fetch_array( $run_query)) {
                $gid=$row["gm_id"];
                  $gm_name=$row["gm_name"];
                  $refrence_id=$row["refrence_id"];
                  $mobile=$row["mobile"];
                  $address_1=$row["address1"];
                  $address_2=$row["address2"];
                  $accnt=$row["account"];
                  $ifsc=$row["ifsc"];
                  $address=" $address_1 \n $address_2";
  echo "  <div class='row'>
          <div class='col-md-1'>  $gm_name</div>
          <div class='col-md-2'> $mobile</div>
           <div class='col-md-2'>  $refrence_id</div>
             <div class='col-md-2'>   $accnt</div>
             <div class='col-md-2'> $ifsc</div>
              <div class='col-md-2'>  $address</div>
             <div class='col-md-1'><a href='#' gid='$gid' class='btn btn-info'>payment</a></div>
        </div>";
}
}
if (isset($_POST["today"])||isset($_POST["can_order"])||isset($_POST["ret_order"])) {
  $date=date("d/m/y");
   $sql="SELECT * FROM orders WHERE Date1='$date'";
    $run_query=mysqli_query($con,$sql);
     while ($row=mysqli_fetch_array( $run_query)) {
                $trx_id=$row["trx_id"];
                  $pro_name=$row["product_name"];
                  $qty=$row["qty"];
                  $main_price=$row["main_p"];
                  $order_status=$row["p_status"];
                  $pay_type=$row["pay_type"];
                  $date1=$row["Date1"];
                  if (isset($_POST["can_order"])) {
                   if ($order_status=="order cancle") {
                        echo "  <div class='row'>
                           <div class='col-md-1'>  $qty</div>
                           <div class='col-md-2'> $pro_name</div>
                           <div class='col-md-2'> $trx_id </div>
                           <div class='col-md-2'> $order_status</div>
                           <div class='col-md-2'>  $pay_type </div>
                           <div class='col-md-2'>   $main_price </div>
                           <div class='col-md-1'> $date1</div>
                           </div>";
                   }
                  }elseif (isset($_POST["ret_order"])) {
                    if ($order_status=="return product") {
                        echo "  <div class='row'>
                           <div class='col-md-1'>  $qty</div>
                           <div class='col-md-2'> $pro_name</div>
                           <div class='col-md-2'> $trx_id </div>
                           <div class='col-md-2'> $order_status</div>
                           <div class='col-md-2'>  $pay_type </div>
                           <div class='col-md-2'>   $main_price </div>
                           <div class='col-md-1'> $date1</div>
                           </div>"; 
                    }
                  }else{
                     echo "  <div class='row'>
                           <div class='col-md-1'>  $qty</div>
                           <div class='col-md-2'> $pro_name</div>
                           <div class='col-md-2'> $trx_id </div>
                           <div class='col-md-2'> $order_status</div>
                           <div class='col-md-2'>  $pay_type </div>
                           <div class='col-md-2'>   $main_price </div>
                           <div class='col-md-1'> $date1</div>
                           </div>";
                  }
 
    }
}
if (isset($_POST["sell_prod"])) {
   $sql="SELECT * FROM sell_product";
    $run_query=mysqli_query($con,$sql);
    $total=0;
     while ($row=mysqli_fetch_array($run_query)) {
                  $pro_name=$row["product_name"];
                  $qty=$row["qty"];
                  $main_price=$row["total_amt"];
                  $order_status=$row["p_status"];
                  $pay_type=$row["pay_type"];
                  $date1=$row["Date1"];
                   $seller_id=$row["seller_id"];
                   $gm_name=$row["g_name"];
                   $total=$total +  $main_price;
                   $fts_tax=ceil(($total*10)/100);
                   $payment=$total-$fts_tax;
               echo "<div class='card-body'>
                 <div class='row'>
                           <div class='col-md-1'>  $qty</div>
                           <div class='col-md-2'> $pro_name</div>
                           <div class='col-md-2'> $gm_name </div>
                           <div class='col-md-2'> $order_status</div>
                           <div class='col-md-2'>  $pay_type </div>
                           <div class='col-md-2'>   $main_price </div>
                           <div class='col-md-1'> $date1</div>
                           </div>
                           </div>";
              }
              echo "  <div class='card-footer bg-primary'>
        <h5 class='text-white card-text'>Total Amount :  $total</h5>
        <h5 class='text-white'>FTS TAX :   $fts_tax</h5>
         <h5 class='text-white'>Seller's Payment : $payment </h5>
      </div>";
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