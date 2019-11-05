$(document).ready(function(){
 	$(function(){
	  $("#exzoom").exzoom({
	  	"autoPlay":false,
	  });
	});
});
  //this is for category;;;
 	function cat(){
 		$.ajax({
 			url : "action.php",
 			method :"POST",
 			data:{category:1},
 			success : function(data){
               $("#cate").html(data);
 			}
 		})
 	}
  //this is for category---
 	cat();
 	brand();
 	product();
 	function brand(){
 		$.ajax({
 			url : "action.php",
 			method :"POST",
 			data:{brand:1},
 			success : function(data){
               $("#brand").html(data);
 			}
 		})
 	}
  // this for product---
 	function product(){
 		$.ajax({
 			url : "action.php",
 			method :"POST",
 			data:{product:1},
 			success : function(data){
               $("#product").html(data);
 			}
 		})
 	}
  //this is category select===
 	$("body").delegate(".category","click",function(event){
 		event.preventDefault();
 		var cid=$(this).attr('cid');
 		$.ajax({
 			url : "action.php",
 			method :"POST",
 			data:{product_cat:1,cat_name:cid},
 			success : function(data){
               $("#product").html(data);
 			}
 		})
 	})
  //this is for brand select;;;
 	$("body").delegate(".brand","click",function(event){
 		event.preventDefault();
 		var bid=$(this).attr('bid');
 		$.ajax({
 			url : "action.php",
 			method :"POST",
 			data:{selectBrand:1,brand_name:bid},
 			success : function(data){
               $("#product").html(data);
 			}
 		})
 	})
  //this si for search button;;;
   $("#search1").click(function(){
       var key=$(".search-box").val();
         $.ajax({
         url : "action.php",
         method :"POST",
         data:{keyword:1,key:key},
         success : function(data){
            $("#product").html(data);
         }
      })
      });
 	/*--- this is for cart-----*/
 	$("body").delegate("#add_cart","click",function(event){
 		var p_id=$(this).attr('pid');
    relative(p_id);
 		$.ajax({
 			url : "action.php",
 			method :"POST",
 			data:{addToCart:1,pro_id:p_id},
 			success : function(data){
 				 $("#cart_msg").html(data);     
 			}
 		})
 		 cart();
     cart_count();
 	})
  function relative(r){
    $(".releted").show();
    var pid=r;
    $.ajax({
      url : "action.php",
      method :"POST",
      data:{relative:1,pid:pid},
      success : function(data){
         $("#releted").html(data);   
      }
    })
  }
 	 cart();
 	function cart(){
 		$.ajax({
 			url : "action.php",
 			method :"POST",
 			data:{add_To_Cart:1},
 			success : function(data){
 		      $("#cart_pro").html(data);
 			}
 		})
     cart_count();
 	}
 	cart_count();
 	function cart_count(){
 		$.ajax({
 			url : "action.php",
 			method :"POST",
 			data:{cart_count:1},
 			success : function(data){
 		      $(".badge").html(data);
 			}
 		})
 	}
 	cart_edit();
 	function cart_edit(){
 		$.ajax({
 			url : "action.php",
 			method :"POST",
 			data:{cart_edit:1},
 			success : function(data){
 		      $("#cart_edit").html(data);
 			}
 		})
 	}
  ///this is for quantity edit of the product
 	$("body").delegate(".qty","keyup",function(){
 		var pid=$(this).attr("pid");
 		var qty=$("#qty-"+pid).val();
 		var price=$("#price-"+pid).val();
 		var total= qty*price;
 		$("#total-"+pid).val(total);
 	})
 	$("body").delegate(".remove","click",function(event){
 		event.preventDefault();
 		var pid=$(this).attr("remove_id");
 		$.ajax({
 			url : "action.php",
 			method :"POST",
 			data:{remove:1,removeId:pid},
 			success : function(data){
 				 $("#cart_msg").html(data);
 				 cart_edit();
         cart_count();
 			}
 		})
 	})
 	$("body").delegate(".update","click",function(event){
 		event.preventDefault();
 		var pid=$(this).attr("update_id");
 		var qty=$("#qty-"+pid).val();
 		var price=$("#price-"+pid).val();
 		var total=$("#total-"+pid).val();
 		$.ajax({
 			url : "action.php",
 			method :"POST",
 			data:{update:1,updateId:pid,qty:qty,price:price,total:total},
 			success : function(data){
 				 $("#cart_msg").html(data);
 				 cart_edit();  
 			}
 		})
 	})
 
  //this is for checkout------
    $("body").delegate("#checkout","click",function(){
      var pid=$(this).attr("pid");
      $.ajax({
         url : "action.php",
         method :"POST",
         data:{product_d:1,pid:pid},
         success : function(data){
             $("#product_view").html(data);
         }
      })
   }) 
    $("body").delegate("#checkout","click",function(){
       $("#cart1").hide();
         $("#product_view").show();
    }) 
    ///this is for choose color and size====
    $("body").delegate(".conform","click",function(event){
    event.preventDefault();
    var pid=$(this).attr("pid");
    var size=$("#size-"+pid).val();
    var color=$("#color-"+pid).val();
    $.ajax({
      url : "action.php",
      method :"POST",
      data:{conform:1,pid:pid,size:size,color:color},
      success : function(data){
         $("#alert").html(data);
    }
   })
  })
      $("body").delegate(".conform","click",function(){
       $(".check").show();
       $(".conform").hide();
    })
 // this is for check your update;;;   
    $("body").delegate(".check","click",function(event){
    event.preventDefault();
    var pid=$(this).attr("pid");
    $.ajax({
      url : "action.php",
      method :"POST",
      data:{check:1,pid:pid},
      success : function(data){
         $("#check_order").html(data);
         address();
      }
    })
  })
//User address edit.....    
    address();
    function address(){
    $.ajax({
      url : "action.php",
      method :"POST",
      data:{address:1},
      success : function(data){
          $("#check_order1").html(data);
      }
    })
  }
  $("body").delegate(".address_edit","click",function(event){
    event.preventDefault();
    var uid=$(this).attr("uid");
    var address1=$("#address1-"+uid).val();
    var address2=$("#address2-"+uid).val();
    $.ajax({
      url : "action.php",
      method :"POST",
      data:{address_edit:1,uid:uid,address1:address1,address2:address2},
      success : function(data){
         $("#massage").html(data);
      }
    })
  })
   $("body").delegate(".check","click",function(){
       $("#product_view").hide();
         $("#check-order").show();
    })
   //this is payment gatewaye function....
   $("body").delegate(".payment","click",function(event){
    event.preventDefault();
    var pid=$(this).attr("pid");
    $.ajax({
      url : "action.php",
      method :"POST",
      data:{payment:1,pid:pid},
      success : function(data){
         $("#payment_mode").html(data);
      }
    })
  })
    $("body").delegate(".payment","click",function(){
       $("#payment").show();
         $("#check-order").hide();
    })
  $("body").delegate(".cod","click",function(event){
    event.preventDefault();
    var pid=$(this).attr("pid");
    $.ajax({
      url : "action.php",
      method :"POST",
      data:{cod:1,pid:pid},
      success : function(data){
         $("#order").html(data);
      }
    })
  })
   $("body").delegate(".massage","click",function(event){
    event.preventDefault();
    var pid=$(this).attr("pid");
    $.ajax({
      url : "action.php",
      method :"POST",
      data:{massage:1,pid:pid},
      success : function(data){
         $("#order").html(data);
        cart_count();
      }
    })
  })
  $("body").delegate(".cod","click",function(){
       $("#orders").show();
         $("#payment").hide();
    })
  $("body").delegate(".massage","click",function(){
       $("#orders").hide();
    })
 
   $("body").delegate(".accnt","click",function(event){
      $.ajax({
         url : "action.php",
         method :"POST",
         data:{accnt:1},
         success : function(data){
            $("#accnt1").html(data); 
         }
      })   
   })
     $("body").delegate(".order","click",function(event){
      $.ajax({
         url : "action.php",
         method :"POST",
         data:{order:1},
         success : function(data){
            $("#u_order").html(data); 
         }
      })   
   })
   $("body").delegate(".accnt","click",function(){
         $("#accnt").show();
    })
     $("body").delegate(".order","click",function(){
         $("#sell").show();
    })
    $("body").delegate(".close","click",function(){
         $("#accnt").hide();
    })
      $("body").delegate("#cancle","click",function(event){
     var pid=$(this).attr("pid"); 
       $.ajax({
         url : "action.php",
         method :"POST",
         data:{cancle:1,pid:pid},
         success : function(data){
           $("#cart_msg").html(data);
         }
      }) 
   })
      $("body").delegate("#return","click",function(event){
     var pid=$(this).attr("pid"); 
       $.ajax({
         url : "action.php",
         method :"POST",
         data:{return:1,pid:pid},
         success : function(data){
            $("#cart_msg").html(data);
         }
      }) 
   })
       $("body").delegate("#chekout","click",function(){
         $("#bhai").show();
         var pid=$(this).attr('pid');
          $.ajax({
         url : "action.php",
         method :"POST",
         data:{prod:1,pid:pid},
         success : function(data){
             $("#pro_details").html(data);
             alert(data)
         }
      })
    })
