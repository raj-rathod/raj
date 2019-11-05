 $(document).ready(function(){
      $('.slider').bxSlider({
      	auto:true,
      });
      $("#bt1").click(function(){
        $("#contain").hide();
         $(".form1").hide();
         $(".form").show();
    });
    $("#bt3").click(function(){
        $("#contain").show();
    });
     $("#bt2").click(function(){
        $("#contain").hide();
         $(".form1").show();
         $(".form").hide();
    });
      $("#store1").click(function(){
        $("#store").show();
         $("#sell").hide();
         $("#list").hide();
    });
     $("#list1").click(function(){
        $("#list").show();
          $("#store").hide();
           $("#sell").hide();
    });
      $("#sell1").click(function(){
        $("#sell").show();
         $("#list").hide();
          $("#store").hide();
    });
/*----hide show password---*/
      $('#eye').click(function(){
      var passwordField=$('#pwd');
      var passwordFieldTpye=passwordField.attr('type');
      if (passwordField.val() !='') {
        if (passwordFieldTpye=='password') {
            passwordField.attr('type','text');
        }
        else{
            passwordField.attr('type','password');
        }
      }
      else{
        alert("Please enter password");
      }
      });
      $('#eye1').click(function(){
      var passwordField=$('#pwd');
      var passwordFieldTpye=passwordField.attr('type');
      if (passwordField.val() !='') {
        if (passwordFieldTpye=='text') {
            passwordField.attr('type','password');
        }
        else{
            passwordField.attr('type','text');
        }
      }
      else{
        alert("Please enter password");
      }
      });
      $("#eye").click(function(){
        $("#eye1").show();
         $("#eye").hide();
    });
    $("#eye1").click(function(){
        $("#eye").show();
        $("#eye1").hide();

    });
    
   seller_list();
   function seller_list(){
    $.ajax({
      url : "server1.php",
      method :"POST",
      data:{sellerCartList:1},
      success : function(data){
        $("#product_list").html(data);
        
      }
    })
  }
   $("body").delegate("#store1","click",function(event){
    event.preventDefault();
    $.ajax({
      url : "server1.php",
      method :"POST",
      data:{store:1},
      success : function(data){
        $("#store3").html(data);
      }
    })
  })
  $("body").delegate(".remove","click",function(event){
    event.preventDefault();
    var pid=$(this).attr("remove_id");
    $.ajax({
      url : "server1.php",
      method :"POST",
      data:{remove:1,removeId:pid},
      success : function(data){
         $("#cart_msg").html(data);
        seller_list();
      }
    })
    
  })
$("body").delegate(".update","click",function(event){
    event.preventDefault();
    var pid=$(this).attr("update_id");
    var qty=$("#qty-"+pid).val();
    var price=$("#price-"+pid).val();
    var offer=$("#offer-"+pid).val();
    $.ajax({
      url : "server1.php",
      method :"POST",
      data:{update:1,updateId:pid,qty:qty,price:price,offer:offer},
      success : function(data){
         $("#cart_msg").html(data);
           seller_list();
          
      }
    })
  })  
  
  $("body").delegate("#sell1","click",function(event){
    event.preventDefault();
    $.ajax({
      url : "server1.php",
      method :"POST",
      data:{sell:1},
      success : function(data){
         $("#sell_product").html(data);
      }
    })
  })  
   $("body").delegate("#gmp1","click",function(event){
    event.preventDefault();
    $.ajax({
      url : "server1.php",
      method :"POST",
      data:{gmp:1},
      success : function(data){
         $("#gmp-1").html(data);

      }
    })
  }) 
     $("body").delegate("#seller1","click",function(event){
    event.preventDefault();
    $("#gm_seller").show();
    $.ajax({
      url : "server1.php",
      method :"POST",
      data:{seller:1},
      success : function(data){
         $("#seller-1").html(data);
      }
    })
  })
   $("body").delegate("#ret_order","click",function(event){
    event.preventDefault();
     $("#return1").show();
    $.ajax({
      url : "server1.php",
      method :"POST",
      data:{return:1},
      success : function(data){
         $("#return2").html(data);
      }
    })
  }) 
    $("body").delegate("#sell_order","click",function(event){
    event.preventDefault();
     count();
     $("#sell_order1").show();
    $.ajax({
      url : "server1.php",
      method :"POST",
      data:{sell_order:1},
      success : function(data){
         $("#sell_order2").html(data);
      }
    })
  }) 
  
  $("body").delegate(".see","click",function(event){
    event.preventDefault();
      var pid=$(this).attr("pid");
    $.ajax({
      url : "server1.php",
      method :"POST",
      data:{see:1,pid:pid},
      success : function(data){
       alert(data)
      }
    })
  }) 
  $("body").delegate(".delever","click",function(event){
    event.preventDefault();
     var pid=$(this).attr("pid");
    $.ajax({
      url : "server1.php",
      method :"POST",
      data:{delever:1,pid:pid},
      success : function(data){
       alert(data)
      }
    })
  })
  function count(){
      $.ajax({
      url : "server1.php",
      method :"POST",
      data:{sell_success:1},
      success : function(data){
      }
    }) 
    }
   $("body").delegate("#chekout","click",function(){
         $("#bhai").show();
           $("#neetu").hide();
    })
       $("body").delegate("#next-1","click",function(){
         $("#step2").show();
         $("#step1").hide();
        $("#progress").css("width","66%");
    })
       $("body").delegate("#next-2","click",function(){
         $("#step3").show();
         $("#step2").hide();
        $("#progress").css("width","100%");
    })
        $("body").delegate("#prev-1","click",function(){
         $("#step1").show();
         $("#step2").hide();
        $("#progress").css("width","33%");
    })
$("body").delegate("#prev-2","click",function(){
         $("#step2").show();
         $("#step3").hide();
        $("#progress").css("width","66%");
    })
    $("body").delegate("#next1","click",function(){
         $(".step-2").show();
         $(".step-1").hide();
        $("#prog").css("width","66%");
    })
     $("body").delegate("#next2","click",function(){
         $(".step-3").show();
         $(".step-2").hide();
        $("#prog").css("width","100%");
    })
      $("body").delegate("#prev1","click",function(){
         $(".step-1").show();
         $(".step-2").hide();
        $("#prog").css("width","33%");
    })
       $("body").delegate("#prev2","click",function(){
         $(".step-2").show();
         $(".step-3").hide();
        $("#prog").css("width","66%");
    }) 
    $("body").delegate("#nextg1","click",function(){
         $("#step-2").show();
         $("#step-1").hide();
        $("#prog1").css("width","66%");
    })
    $("body").delegate("#nextg2","click",function(){
         $("#step-3").show();
         $("#step-2").hide();
        $("#prog1").css("width","100%");
    })
     $("body").delegate("#prevg1","click",function(){
         $("#step-1").show();
         $("#step-2").hide();
        $("#prog1").css("width","33%");
    })
       $("body").delegate("#prevg2","click",function(){
         $("#step-2").show();
         $("#step-3").hide();
        $("#prog1").css("width","66%");
    }) 
    });
 

