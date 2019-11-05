 $(document).ready(function(){
      $('.slider').bxSlider({
      	auto:true,
      });
      function cat(){
 		$.ajax({
 			url : "action.php",
 			method :"POST",
 			data:{category:1},
 			success : function(data){
               $("#category").html(data);
 			}
 		})
 	}
 	cat();
  book();
   mobiles();
    laptop();
   electronics();
   clothes();
   shoes();
   fashion2();
   fashion();
   home_mart();
   sport();
    fast();
    sweet();
    milk();
   function mobiles(){
      var category="Mobiles";
      $.ajax({
         url : "action.php",
         method :"POST",
         data:{products:1,cat:category},
         success : function(data){
               $("#products").html(data);
         }
      })
   }
   function laptop(){
      var cat_laptop="Laptops";
      $.ajax({
         url : "action.php",
         method :"POST",
         data:{laptop:1,cat11:cat_laptop},
         success : function(data){
               $("#laptop").html(data);
         }
      })
   }
    function electronics(){
      var cat_ece="Electronics & Electrical";
      $.ajax({
         url : "action.php",
         method :"POST",
         data:{pro_ece:1,cat1:cat_ece},
         success : function(data){
               $("#electronics").html(data);
         }
      })
   }
    function clothes(){
       var cat_clothes="Clothes";
      $.ajax({
         url : "action.php",
         method :"POST",
         data:{pro_clothes:1,cat2:cat_clothes},
         success : function(data){
              $("#clothes").html(data);
         }
      })
   }
    function shoes(){
      var cat_shoes="Shoes";
      $.ajax({
         url : "action.php",
         method :"POST",
         data:{pro_shoes:1,cat3:cat_shoes},
         success : function(data){
               $("#shoes").html(data);
         }
      })
   }
    function fashion(){
      var cat_fas="Fashion";
      $.ajax({
         url : "action.php",
         method :"POST",
         data:{pro_fas:1,cat4:cat_fas},
         success : function(data){
               $("#fashion").html(data);
         }
      })
   }
   function fashion2(){
      var cat_fas2="Ladies_fas";
      $.ajax({
         url : "action.php",
         method :"POST",
         data:{pro_fas2:1,cat5:cat_fas2},
         success : function(data){
               $("#fashion2").html(data);
         }
      })
   }
    function home_mart(){
      var cat_home="Home_mart";
      $.ajax({
         url : "action.php",
         method :"POST",
         data:{pro_home:1,cat6:cat_home},
         success : function(data){
               $("#home_mart").html(data);
         }
      })
   }
   function sport(){
      var cat_sport="Sports";
      $.ajax({
         url : "action.php",
         method :"POST",
         data:{sport:1,cat7: cat_sport},
         success : function(data){
               $("#sport").html(data);
         }
      })
   }
     function fast(){
      var cat_fast="Fast_food";
      $.ajax({
         url : "action.php",
         method :"POST",
         data:{fast:1,cat8: cat_fast},
         success : function(data){
               $("#fast").html(data);
         }
      })
   }
    function sweet(){
      var cat_sweet="Sweets";
      $.ajax({
         url : "action.php",
         method :"POST",
         data:{sweet:1,cat9: cat_sweet},
         success : function(data){
               $("#sweet").html(data);
         }
      })
   }
     function milk(){
      var cat_milk="Milk_products";
      $.ajax({
         url : "action.php",
         method :"POST",
         data:{milk:1,cat10: cat_milk},
         success : function(data){
               $("#milk_pro").html(data);
         }
      })
   }
    function book(){
      var cat_book="Books";
      $.ajax({
         url : "action.php",
         method :"POST",
         data:{book:1,cat12:cat_book},
         success : function(data){
               $("#books").html(data);
         }
      })
   }
   
      $("#cart").click(function(event){
 		event.preventDefault();
 		$.ajax({
 			url : "action.php",
 			method :"POST",
 			data:{addToCart:1},
 			success : function(data){
 		      $("#cart_pro").html(data);
 		  
 			}
 		})
 	}) 
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
      $("body").delegate("#add_cart","click",function(event){
      var p_id=$(this).attr('pid');
      $.ajax({
         url : "action.php",
         method :"POST",
         data:{add_ToCart:1,pro_id:p_id},
         success : function(data){
         }
      })
          cart_count();
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
     $("body").delegate("#search1","click",function(){
         $("#search_p").show();
    })
    $("body").delegate(".order","click",function(){
         $("#sell").show();
    })
    $("body").delegate(".close","click",function(){
         $("#accnt").hide();
    })
      product_in();
      function product_in(){
         $.ajax({
         url : "action.php",
         method :"POST",
         data:{product_in:1},
         success : function(data){
             $("#product_in").html(data);
         }
      })
      }
      product_in1();
      function product_in1(){
         $.ajax({
         url : "action.php",
         method :"POST",
         data:{product_in:1},
         success : function(data){
             $("#product_in1").html(data);
         }
      })
      }
     $("#search1").click(function(){
       var key=$(".search-box").val();
         $.ajax({
         url : "action.php",
         method :"POST",
         data:{keyword:1,key:key},
         success : function(data){
            $("#search").html(data);
         }
      })
      }); 
     $(".card1").mouseenter(function(){
    $(".h").slideDown(1222);
});
$(".card").mouseleave(function(){
    $(".h").hide();
});
$(".card2").mouseenter(function(){
    $(".i").slideDown(1222);
});
$(".card").mouseleave(function(){
    $(".i").hide();
});
$(".card3").mouseenter(function(){
    $(".j").slideDown(1222);
});
$(".card").mouseleave(function(){
    $(".j").hide();
});
$(".card4").mouseenter(function(){
    $(".k").slideDown(1222);
});
$(".card").mouseleave(function(){
    $(".k").hide();
});
$(".card5").mouseenter(function(){
    $(".l").slideDown(1222);
});
$(".card").mouseleave(function(){
    $(".l").hide();
});
 $("body").delegate(".about","click",function(){
         $("#team").show();
    })
  $("body").delegate("#fts","click",function(event){
    var ref_id=$("#refid").val();
      $.ajax({
         url : "action.php",
         method :"POST",
         data:{refrence:1,ref_id:ref_id},
         success : function(data){
            $("#ftsp").html(data); 
         }
      })   
   })
   $("body").delegate("#chekout","click",function(event){
     var pid=$(this).attr('pid');
     detail(pid);   
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

 function detail(a){
          var pid=a;
         $.ajax({
         url : "action.php",
         method :"POST",
         data:{prod:1,pid:pid},
         success : function(data){
             $("#pro_details").html(data);
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
$("body").delegate("#forget","click",function(){
         $("#forgot").show();
         $("#login-1").hide();
    })
$("body").delegate(".sell_info","click",function(){
         $("#sell_info1").show();
    })
$("body").delegate(".gm_info","click",function(){
         $("#gm_info1").show();
          $.ajax({
         url : "action.php",
         method :"POST",
         data:{gm_info:1},
         success : function(data){
            $("#gm_info2").html(data); 
         }
      })  
    })
$("body").delegate(".today","click",function(){
         $("#today").show();
          $.ajax({
         url : "action.php",
         method :"POST",
         data:{today:1},
         success : function(data){
            $("#today1").html(data); 
         }
      })  
    })
$("body").delegate(".can_order","click",function(){
         $("#can_order").show();
          $.ajax({
         url : "action.php",
         method :"POST",
         data:{can_order:1},
         success : function(data){
            $("#can_order1").html(data); 
         }
      })  
    })
$("body").delegate(".ret_order","click",function(){
         $("#ret_order").show();
          $.ajax({
         url : "action.php",
         method :"POST",
         data:{ret_order:1},
         success : function(data){
            $("#ret_order1").html(data); 
         }
      })  
    })
$("body").delegate(".seller_prod","click",function(){
         $("#sell_prod").show();
          $.ajax({
         url : "action.php",
         method :"POST",
         data:{sell_prod:1},
         success : function(data){
            $("#sell_prod1").html(data);
            
         }
      })  
    })

});
 
