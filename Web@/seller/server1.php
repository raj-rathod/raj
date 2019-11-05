<?php
 session_start();
    $errors = array(); 
	 $p_image="";
$con = mysqli_connect('localhost', 'root', '', 'fts');
if(!$con){
    echo 'connection error';
} 
  if (isset($_POST['product'])) {
    $seller_id=$_SESSION["uid"];
   $target="../image/".basename($_FILES['image']['name']);
    $p_name=$_POST['pname'];
    $p_cat=$_POST['cat'];
    $p_brand=$_POST['brand'];
    $qty=$_POST['qty'];
    $price=$_POST['price'];
    $off=$_POST['off'];
    $p_image=$_FILES['image']['name'];
     $p1=$_POST["p1"];
         $p2=$_POST["p2"];
           $p3=$_POST["p3"];
             $p4=$_POST["p4"];
               $p5=$_POST["p5"];
                 $p6=$_POST["p6"];
   $p_desc=  $p6;
    if (empty($p_name)) { array_push($errors, "Product_name is required"); }
    if (empty($p_cat)) { array_push($errors, "Product category is required"); }
    if (empty($p_brand)) { array_push($errors, "product brand is required"); }
    if (empty($qty)) { array_push($errors, "Quantity is required"); }
    if (empty($price)) { array_push($errors, "Product price is required"); }
    if (empty($p_image)) { array_push($errors, "Product image is required"); }
    if (count( $errors)==0) {
	$query = "INSERT INTO products (seller_id, pcategory, pbrand,product_name,qty,price, offer,p_image,p1,p2,p3,p4,p5,descr) 
				VALUES('$seller_id', '$p_cat', '$p_brand','$p_name', '$qty', '$price', '$off','$p_image', '$p1','$p2','$p3','$p4','$p5','$p_desc')";
			mysqli_query($con, $query);
		}
		 if (mysqli_select_db($con,'fts')&&(count($errors)==0)) {
           header('location:seller_product.php');
        }
	}
    /*---this is for seller_info----*/
     if (isset($_POST['seller_info'])){
         $seller_name=$_POST['name'];
         $store_name=$_POST['sname'];
         $email=$_POST['email'];
         $mobile=$_POST['mobile'];
         $b_account=$_POST['account'];
         $ifsc=$_POST['ifsc'];
         $address_1=$_POST['address_1'];
         $address_2=$_POST['address_2'];
         $password_1=$_POST['password_1'];
         $password_2=$_POST['password_2'];
         $refrence_id=$_POST['refrence'];
         $gst=$_POST["gst"];
         $s_type=$_POST["stype"];
         $total_amt=0;
    if (empty($seller_name)) { array_push($errors, "seller_name is required"); }
    if (empty($store_name)) { array_push($errors, "Store name  is required"); }
    if (empty($email)) { array_push($errors, "Email  is required"); }
    if (empty($mobile)) { array_push($errors, "Mobile No. is required"); }
    if (empty($b_account)) { array_push($errors, "Bank account is required"); }
    if (empty($ifsc)) { array_push($errors, " IFSC code is required"); }
    if (empty($address_1)) { array_push($errors, "Address is required"); }
    if (empty($address_2)) { array_push($errors, "Address is required"); }    
    if (empty($password_1)) { array_push($errors, "Password  is required"); }
    if (empty($password_2)) { array_push($errors, "Password  is required"); }
    if (empty($refrence_id)) { array_push($errors, "Refrence id  is required"); }
    if ($password_1!=$password_1) {
         array_push($errors, "Password is not matched");
    }
      if (count( $errors)==0) {
        $password = md5($password_1);
       $query = "INSERT INTO seller_info (seller_name,store_name,email,mobile,b_account,ifsc,address1,address2,password,refrence_id,GST,seller_type,total_amt) 
        VALUES('$seller_name', '$store_name','$email', '$mobile', '$b_account', '$ifsc','$address_1','$address_2','$password','$refrence_id','$gst','$s_type','$total_amt')";
            $run_query=mysqli_query($con, $query);
            $_SESSION["uid"] = mysqli_insert_id($con);
            $_SESSION['sellername'] = $seller_name;
        }
        if (mysqli_select_db($con,'fts')&&(count($errors)==0)) {
           header('location:seller_product.php');
        }

     }
//Gm register---------
      if (isset($_POST['gm_info'])){
         $gm_name=$_POST['name'];
         $email=$_POST['email'];
         $mobile=$_POST['mobile'];
         $b_account=$_POST['account'];
         $ifsc=$_POST['ifsc'];
         $city=$_POST["city"];
         $address_1=$_POST['address_1'];
         $address_2=$_POST['address_2'];
         $password_1=$_POST['password_1'];
         $password_2=$_POST['password_2'];
    if (empty($gm_name)) { array_push($errors, "Your_name is required"); }
    if (empty($email)) { array_push($errors, "Email  is required"); }
    if (empty($mobile)) { array_push($errors, "Mobile No. is required"); }
    if (empty($b_account)) { array_push($errors, "Bank account is required"); }
    if (empty($ifsc)) { array_push($errors, " IFSC code is required"); }
    if (empty($address_1)) { array_push($errors, "Address is required"); }
    if (empty($address_2)) { array_push($errors, "Address is required"); }    
    if (empty($password_1)) { array_push($errors, "Password  is required"); }
    if (empty($password_2)) { array_push($errors, "Password  is required"); }
    if ($password_1!=$password_2) {
         array_push($errors, "Password is not matched");
    }
      if (count( $errors)==0) {
        $refrence_id=uniqid('FTS',true);
        $password = md5($password_1);   
       $query = "INSERT INTO gm_info (gm_name,email,address1,address2,password,mobile,refrence_id,account,ifsc,city) 
        VALUES('$gm_name','$email','$address_1','$address_2','$password', '$mobile','$refrence_id','$b_account', '$ifsc',' $city')";
            $run_query=mysqli_query($con, $query);
            $_SESSION["gid"] = mysqli_insert_id($con);
            $_SESSION['gmname'] = $gm_name;
            $_SESSION["rf_id"]= $refrence_id;
        }
        if (mysqli_select_db($con,'fts')&&(count($errors)==0)) {
           header('location:gmprofile.php');
        }

     }


    /*----this is login -----*/
     if (isset($_POST['gmlogin'])){
         $gm_name=$_POST['name'];
         $password=$_POST['password_1'];
        if (empty($gm_name)) { array_push($errors, "your_name is required"); }
        if (empty($password)) { array_push($errors, "Password  is required"); }
        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM gm_info WHERE gm_name='$gm_name' AND password='$password'";
            $results = mysqli_query($con, $query);

            if($results) {
                $row = mysqli_fetch_array($results);
                $_SESSION["gid"] = $row["gm_id"];
                 $_SESSION["gmname"] = $row["gm_name"];
                $_SESSION['success'] = "You are now logged in";
                $_SESSION["rf_id"]=$row["refrence_id"];
                 header('location:gmprofile.php');
                }
                
            }else {
                 array_push($errors, "Wrong username/password combination");
            }
        }
 if (isset($_POST['login'])){
         $seller_name=$_POST['name'];
         $password=$_POST['password_1'];
        if (empty($seller_name)) { array_push($errors, "seller_name is required"); }
        if (empty($password)) { array_push($errors, "Password  is required"); }
        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM seller_info WHERE seller_name='$seller_name' AND password='$password'";
            $results = mysqli_query($con, $query);

            if($results) {
                $row = mysqli_fetch_array($results);
                $_SESSION["uid"] = $row["seller_id"];
                 $_SESSION["sellername"] = $row["seller_name"];
                $_SESSION['success'] = "You are now logged in";
                 header('location:seller_product.php');
                }
                
            }else {
                 array_push($errors, "Wrong username/password combination");
            }
        }
    if (isset($_POST["sellerCartList"])) {
         $seller_id=$_SESSION["uid"];
         $sql="SELECT * FROM products WHERE seller_id='$seller_id' ";
         $run_query=mysqli_query($con, $sql);
         $count=mysqli_num_rows( $run_query);
         if ($count>0) {
            while ($row=mysqli_fetch_array( $run_query)) {
                $pro_id=$row["pro_id"];
                $product_name= $row["product_name"];
                $p_image=$row["p_image"];
                $offer=$row["offer"];
                $qty=$row["qty"];
                $price=$row["price"];
                echo " <div class='row'>
                   <div class='col-md-2'>
                     <div class='btn-group'>
                      <a href='#'remove_id='$pro_id' class='btn btn-danger remove'><i class='fas fa-trash-alt'></i></a>
                      <a href='#' update_id='$pro_id'class='btn btn-success update'><i class='far fa-plus-square'></i></a>
                     </div>
                   </div>
                   <div class='col-md-2'> $product_name</div>
                   <div class='col-md-2'><img src='../image/$p_image' width='80px' height='100px'></div>
                   <div class='col-md-2'><input type='text' class='form-control price' pid='$pro_id' id='price-$pro_id' value='$price'></div>
                   <div class='col-md-2'><input type='text' class='form-control qty' pid='$pro_id' id='qty-$pro_id' value='$qty' ></div>
                   <div class='col-md-2'><input type='text' class='form-control offer' pid='$pro_id' id='offer-$pro_id' value='$offer'></div>
                 </div>";
             }
         }
      }
 if (isset($_POST["remove"])) {
   $pid=$_POST["removeId"];
   $seller_id=$_SESSION["uid"];
   $sql="DELETE FROM products WHERE seller_id='$seller_id'AND pro_id='$pid'";
   $run_query=mysqli_query($con,$sql);
   if ($run_query) {
    echo "<div class='alert alert-warning'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
              <b>Product is deleted from the cart Continue Shopping..!</b>
          </div>";
   }
 } 
  if (isset($_POST["update"])) {
    $seller_id=$_SESSION["uid"];
    $pid=$_POST["updateId"];
    $qty=$_POST["qty"];
    $price=$_POST["price"];
     $offer=$_POST["offer"];
    $sql="UPDATE products SET qty='$qty',price='$price',offer='$offer' WHERE seller_id='$seller_id'AND pro_id=' $pid'";
    $run_query=mysqli_query($con,$sql);
    if ($run_query) {
      echo "<div class='alert alert-warning'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
              <b>Product is updated Continue Selling..!</b>
          </div>";
    }
 } 
 if (isset($_POST["sell"])) {
    $seller_id=$_SESSION["uid"];
    $sql="SELECT * FROM orders WHERE seller_id='$seller_id' ";
    $run_query=mysqli_query($con, $sql);
     while ($row=mysqli_fetch_array( $run_query)) {
                  $pid=$row["pro_id"];
                  $product_name= $row["product_name"];
                  $p_image=$row["p_image"];
                  $main_price=$row["main_p"];
                  $qty=$row["qty"];
                  $seller_id=$row["seller_id"];
                  $p_status=$row["p_status"];
                  $pay_type=$row["pay_type"];
                  $uid=$row["user_id"];
                  $mobile=$row["mobile"];
                  $username=$row["username"];
                  $address=$row["address"];
                     if ($p_status=="On the way") {
                     echo " <div class='card-body'>
                           <div class='row'>
                             <div class='col-md-1'>
                                <a href='#'pid='$pid' class='btn btn-outline-info see'>Confarm order</a>
                              </div>
                              <div class='col-md-2'> $product_name</div>
                              <div class='col-md-2'><img src='../image/$p_image' width='100px' height='150px'></div>
                              <div class='col-md-1'><h4><b><small>$pay_type</small></b></h4></div>
                              <div class='col-md-1'>$qty</div>
                             <div class='col-md-1'>$main_price</div>
                              <div class='col-md-2'><b> $username <br> $mobile</b></div>
                                 <div class='col-md-2'><h5><b> $address</b></h5></div>
                                </div>
                              </div>";
                    } elseif ($p_status=="Ready to delivery") {
                                echo " <div class='card-body'>
                             <div class='row'>
                             <div class='col-md-1'>
                                <a href='#' pid='$pid'class='btn btn-success delever'>GO to delever</a>
                              </div>
                              <div class='col-md-2'> $product_name</div>
                              <div class='col-md-2'><img src='../image/$p_image' width='100px' height='150px'></div>
                              <div class='col-md-1'><h4><b><small>$pay_type</small></b></h4></div>
                              <div class='col-md-1'>$qty</div>
                             <div class='col-md-1'>$main_price</div>
                              <div class='col-md-2'><b> $username <br> $mobile</b></div>
                                 <div class='col-md-2'><h5><b> $address</b></h5></div>
                                </div>
                              </div>";
                    }
                  }
                }
  if (isset($_POST["return"])) {
    $seller_id=$_SESSION["uid"];
    $sql="SELECT * FROM orders WHERE seller_id='$seller_id' ";
    $run_query=mysqli_query($con, $sql);
     while ($row=mysqli_fetch_array( $run_query)) {
                  $pid=$row["pro_id"];
                  $product_name= $row["product_name"];
                  $p_image=$row["p_image"];
                  $main_price=$row["main_p"];
                  $qty=$row["qty"];
                  $seller_id=$row["seller_id"];
                  $p_status=$row["p_status"];
                  $pay_type=$row["pay_type"];
                  $uid=$row["user_id"];
                  $mobile=$row["mobile"];
                  $username=$row["username"];
                  $address=$row["address"];
                      if ($p_status=="return product") {
                          echo " <div class='card-body'>
                               <div class='row'>
                                <div class='col-md-1'>
                               $p_status
                              </div>
                              <div class='col-md-2'> $product_name</div>
                              <div class='col-md-2'><img src='../image/$p_image' width='100px' height='150px'></div>
                              <div class='col-md-1'><h4><b><small>$pay_type</small></b></h4></div>
                              <div class='col-md-1'>$qty</div>
                             <div class='col-md-1'>$main_price</div>
                              <div class='col-md-2'><b> $username <br> $mobile</b></div>
                                 <div class='col-md-2'><h5><b> $address</b></h5></div>
                                </div>
                              </div>";
                   }
                  }
               } 

      if (isset($_POST["sell_order"])) {
           $seller_id=$_SESSION["uid"];
            $sql="SELECT * FROM sell_product WHERE seller_id='$seller_id' ";
             $run_query=mysqli_query($con, $sql);
             $sum=0;
                 while ($row=mysqli_fetch_array( $run_query)) {
                  $pid=$row["pro_id"];
                  $product_name= $row["product_name"];
                  $main_price=$row["total_amt"];
                  $qty=$row["qty"];
                  $seller_id=$row["seller_id"];
                  $p_status=$row["p_status"];
                  $pay_type=$row["pay_type"];
                  $uid=$row["user_id"];
                  $gm_name=$row["g_name"];
                  $sum=$sum + $main_price ;  
                  $fts=ceil(($sum* 10)/100);
                  $final=   $sum-$fts;
                       echo " <div class='card-body'>
                           <div class='row'>
                             <div class='col-md-1'>
                               $p_status
                              </div>
                              <div class='col-md-2'> $product_name</div>
                              <div class='col-md-2'> $gm_name</div>
                              <div class='col-md-2'><h4><b><small>$pay_type</small></b></h4></div>
                              <div class='col-md-1'>$qty</div>
                             <div class='col-md-1'>$main_price</div>
                              <div class='col-md-2'>$uid</div> 
                                 <div class='col-md-1'>$pid</div>
                                </div>
                              </div>";
                   
                  }
                  echo " <div class='card-footer bg-primary'>
                              <h4 class='card-text text-white'> The Total Amount :  $sum</h4>
                              <h4 class='card-text text-white'>  FTS TAX : $fts</h4>
                              <h4 class='card-text text-white'>The Final  Amount : $final</h4>
                              </div>";
                  $sql="UPDATE seller_info SET total_amt='$sum' WHERE seller_id='$seller_id' ";
                   $run_query=mysqli_query($con,$sql);
                }
         
 if (isset($_POST["store"])) {
   $seller_id=$_SESSION["uid"];
    $sql="SELECT * FROM seller_info WHERE seller_id='$seller_id' ";
    $run_query=mysqli_query($con, $sql);
    while ($row=mysqli_fetch_array( $run_query)) {
      $store_name=$row["store_name"];
      $seller_name=$row["seller_name"];
      $mobile=$row["mobile"];
      $address1=$row["address1"];
      $address2=$row["address2"];
    }
    $address=" $address1 \n  $address2 ";
    echo " <div class='card'>
         <div class='card-header bg-dark'><h3 class='text-white text-center'>
          <i class='fas fa-store'></i> &nbsp;<b> $store_name</b></h3></div>
          <div class='card-body'>
            <div class='card-text'>
              <h5> This is a F T S store Create by $seller_name </h5>
            </div>
          </div>
            <div class='card-footer bg-dark'>
              <div class='card-group'>
               <div class='card bg-dark'>
                  <ul id='add1'> 
                       <h4 class='follow' > Contact NO.</h4>
                   <li> <span id='add'>       
                           <i class='fa fa-phone' aria-hidden='true'></i> +91-$mobile<br>
                         </span> 
                    </li>
              
                   </ul>
                </div>
              <div class='card bg-dark'>
                 <span id='add'>
                   <h6> Address:</h6>
                   <h7> $address </h7>
                </span>
               </div>
              </div>
            </div>
       </div>";
 }
  if (isset($_POST["see"])||isset($_POST["delever"])) {
    $seller_id=$_SESSION["uid"];
    $pid=$_POST["pid"];
     $sql="SELECT * FROM orders WHERE seller_id='$seller_id'AND pro_id='$pid' ";
     $run_query=mysqli_query($con, $sql);
     while ($row=mysqli_fetch_array( $run_query)) {
        $p_status=$row["p_status"];
        $qty1=$row["qty"];
     }
    $order_status="Ready to delivery";
    $delever_status="Successfully delevered";
    $date=date("d/m/y");
    if (isset($_POST["see"])) {
      if ($order_status==$p_status||$p_status==$delever_status) {
       echo "This order you already conform to delivery";
      }else{
          $sql="UPDATE orders SET p_status='$order_status' WHERE seller_id='$seller_id'AND pro_id='$pid'";
          $run_query=mysqli_query($con,$sql);
          if ($run_query) {
           echo "Please order delevered fast";
          }
      }
    }else{
             if ($p_status==$delever_status) {
               echo "This Product already delivered";
             }else{
              $sql="SELECT * FROM products WHERE  pro_id='$pid' ";
              $run_query=mysqli_query($con,$sql);
              while ($row=mysqli_fetch_array( $run_query)) {
                 $qty2=$row["qty"];
              }
              $qty3=$qty2-$qty1;
              $sql="UPDATE products SET qty='$qty3' WHERE pro_id='$pid'";
              $run_query=mysqli_query($con,$sql);
              if ($qty3==0||$qty3<0) {
                 $sql="DELETE FROM products WHERE pro_id='$pid'";
                 $run_query=mysqli_query($con,$sql); 
             }
                   $sql="UPDATE orders SET p_status='$delever_status', Date1='$date' WHERE seller_id='$seller_id'AND pro_id='$pid'";
                   $run_query=mysqli_query($con,$sql);
                   if ($run_query) {
                   echo "Congratulation your product has selled successful";
                  }
         }
    }
  } 
  if (isset($_POST["sell_success"])) {
    $seller_id=$_SESSION["uid"];
     $sql="SELECT * FROM orders WHERE seller_id='$seller_id' ";
              $run_query=mysqli_query($con,$sql);
              while ($row=mysqli_fetch_array( $run_query)) {
                $pid=$row["pro_id"];
                $seller_id=$row["seller_id"];
                $product_name=$row["product_name"];
                $total_amt=$row["main_p"];
                $p_status=$row["p_status"];
                $pay_type=$row["pay_type"];
                $user_id=$row["user_id"];
                $Date1=$row["Date1"];
                $qty=$row["qty"];
              }
              $date=date("d/m/y");
              $date1=strtotime($Date1);
              $date2=strtotime($date);
              $diff=$date1-$date2;
              $diff1=floor($diff/(60 * 60));
               $sql="SELECT * FROM seller_info WHERE  seller_id='$seller_id' ";
               $run_query=mysqli_query($con,$sql);
              while ($row=mysqli_fetch_array( $run_query)) {
              $refrence_id=$row["refrence_id"];
              if (empty($refrence_id)) {
                 $gm_id="null";
                 $gm_name="null";
               } else{
                 $sql="SELECT * FROM gm_info WHERE  refrence_id='$refrence_id' ";
              $run_query=mysqli_query($con,$sql);
              while ($row=mysqli_fetch_array( $run_query)) {  
              $gm_id=$row["gm_id"];
              $gm_name=$row["gm_name"];     
              }
            }
           }
           if ($diff1==24||$diff1>24) {
              $sql="INSERT INTO `sell_product` (`id`, `pro_id`, `user_id`, `seller_id`, `gm_id`, `product_name`, `g_name`, `qty`, `Date1`, `total_amt`, `pay_type`, `p_status`) VALUES (NULL, '$pid', '$user_id','$seller_id', '$gm_id', '$product_name', '$gm_name', '$qty', '$Date1', '$total_amt', '$pay_type', '$p_status')"; 
           $run_query=mysqli_query($con,$sql);
           if ($run_query) {
                      $sql="DELETE FROM orders WHERE pro_id='$pid'AND seller_id='$seller_id' ";
                     $run_query=mysqli_query($con,$sql); 
                    if ($run_query) {
                     echo "Congratulation your Product is selled successful. Your payment will be send with in 3 days ";
                    }
              }
           }
        
                    
  }
  if (isset($_POST["gmp"])) {
   $rf_id=$_SESSION["rf_id"];
    $sql="SELECT * FROM gm_info WHERE  refrence_id='$rf_id' ";
    $run_query=mysqli_query($con,$sql);
    while ($row=mysqli_fetch_array( $run_query)) {
      $rf_id=$row["refrence_id"];
      $gm_id=$row["gm_id"];
      $gm_name=$row["gm_name"];
      $address1=$row["address1"];
      $address2=$row["address2"];
      $mobile=$row["mobile"];
      $email=$row["email"];
      $account=$row["account"];
      $ifsc=$row["ifsc"];
      $address="$address1 \n $address2";
    }
    echo "<div class='card'>
         <div class='card-header bg-dark'><h3 class='text-white text-center'>
          <i class='fas fa-store'></i> &nbsp;<b>  $gm_name</b></h3></div>
           <div class='card-header bg-info'><h5 class='text-white'><strong> Refrence ID:</strong>  $rf_id </h5></div>
          <div class='card-body bg-primary'>
            <div class='card-text'>
              <h5 class='text-white text-center'> You are the partner of FTS and Also you are a member of FTS <br> Its your responsibilty to Explore the our FTS Website as it as possible  </h5>
            <form>
               <div class='form-group'>
                  <label>Account</label>
                  <input type='text' name='account' class='form-control account' value='$account'>
                </div>
                 <div class='form-group'>
                  <label>IFSC</label>
                  <input type='text' name='IFSC' class='form-control ifsc' value=' $ifsc'>
                </div>
                 <div class='form-group'>
                  <label>Email</label>
                  <input type='email' name='email' class='form-control email' value=' $email'>
                </div>
                 <div class='form-group'>
                  <label>Mobile</label>
                  <input type='tel' name='Mobile' class='form-control mobile' value=' $mobile'>
                </div>
            </form>
            <p class='text-white text-center'>If you want to update your detail Then first filled the information above form and click the update detail button</p>
            <a href='#' class='btn btn-dark' rf_id='$rf_id' id='updateg'>Update Detail </a>
            </div>
          </div>
            <div class='card-footer bg-dark'>
              <div class='card-group'>
               <div class='card bg-dark'>
                  <ul id='add1'> 
                       <h4 class='follow' > Contact NO.</h4>
                   <li> <span id='add'>       
                           <i class='fa fa-phone' aria-hidden='true'></i> $mobile <br>
                         </span> 
                    </li>
              
                   </ul>
                </div>
              <div class='card bg-dark'>
                 <span id='add'>
                   <h6> Address:</h6>
                   <h7>  $address </h7>
                </span>
               </div>
              </div>
            </div>
       </div>"; 
  }
  if (isset($_POST["seller"])) {
    $rf_id=$_SESSION["rf_id"];
     $sql="SELECT * FROM seller_info WHERE  refrence_id='$rf_id' ";
    $run_query=mysqli_query($con,$sql); 
    $Total=0;
      while ($row=mysqli_fetch_array( $run_query)) {
        $seller_name=$row["seller_name"];
        $mobile=$row["mobile"];
        $address1=$row["address1"];
        $address2=$row["address2"];
        $address="$address1 \n $address2";
        $total_amt=$row["total_amt"];
        $fts_tax=ceil(($total_amt*10)/100);
        $gm_tax=(($fts_tax*30)/100);
        $Total=$Total+$gm_tax;
        echo " <div class='card-body'>
         <div class='row'>
        <div class='col-md-2'>$seller_name</div>
        <div class='col-md-2'> $mobile</div>
        <div class='col-md-2'> $address</div>
        <div class='col-md-2'> $total_amt</div>
        <div class='col-md-2'> $fts_tax</div>
        <div class='col-md-2'> $gm_tax</div> 
      </div>
      </div>";
     }
     echo "<div class='card-footer bg-primary'>
      <h4 class='text-white'> Your Total Benefits : $Total</h4>
    </div>";
  }
 ?>