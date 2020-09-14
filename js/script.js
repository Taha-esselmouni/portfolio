

// --------- PROGRESS BAR ---------//

var index=0;

$(document).scroll(function(){
	var top = $('#skills').height()-$(window).scrollTop();
    
    // console.log(top);
	if(top < -300){
        if(index==0){	

	        function move() {
	            
	          var elem_design = document.getElementById("myBar-design"); 
	          var elem2_design = document.getElementById("myBar_counter_design");
	          var width_design = 1;
	          var id_design = setInterval(frame, 1);
	          function frame() {
	            if (width_design >= 50) {
	              clearInterval(id_design);
	            } else {
	              width_design++; 
	              elem_design.style.width = width_design + '%'; 
	              elem2_design.innerHTML = width_design * 1  + '%';
	            }
	          }
	       
	        }
            
			//------------SKILLS------------
	            
	        function move_html() {
	              var elem_html = document.getElementById("myBar-html"); 
	          var elem2_html = document.getElementById("myBar_counter_html");
	          var width_html = 1;
	          var id_html = setInterval(frame, 1);
	          function frame() {
	            if (width_html >= 65) {
	              clearInterval(id_html);
	            } else {
	              width_html++; 
	              elem_html.style.width = width_html + '%'; 
	              elem2_html.innerHTML = width_html * 1  + '%';
	            }
	          }
	        }
    

			//------------SKILLS------------

	        function move_bootstrap() {
	              var elem_bootstrap = document.getElementById("myBar-bootstrap"); 
	          var elem2_bootstrap = document.getElementById("myBar_counter_bootstrap");
	          var width_bootstrap = 1;
	          var id_bootstrap = setInterval(frame, 1);
	          function frame() {
	            if (width_bootstrap >= 25) {
	              clearInterval(id_bootstrap);
	            } else {
	              width_bootstrap++; 
	              elem_bootstrap.style.width = width_bootstrap + '%'; 
	              elem2_bootstrap.innerHTML = width_bootstrap * 1  + '%';
	            }
	          }
	        }
			//------------SKILLS------------

	        function move_js() {
	          var elem_js = document.getElementById("myBar-js"); 
	          var elem2_js = document.getElementById("myBar_counter_js");
	          var width_js = 1;
	          var id_js = setInterval(frame, 1);
	          function frame() {
	            if (width_js >= 45) {
	              clearInterval(id_js);
	            } else {
	              width_js++; 
	              elem_js.style.width = width_js + '%'; 
	              elem2_js.innerHTML = width_js * 1  + '%';
	            }
	          }
	        }
			//------------SKILLS------------

	        function move_php() {
	          var elem_php = document.getElementById("myBar-php"); 
	          var elem2_php = document.getElementById("myBar_counter_php");
	          var width_php = 1;
	          var id_php = setInterval(frame, 1);
	          function frame() {
	            if (width_php >= 20) {
	              clearInterval(id_php);
	            } else {
	              width_php++; 
	              elem_php.style.width = width_php + '%'; 
	              elem2_php.innerHTML = width_php * 1  + '%';
	            }
	          }
	        }
            
			//------------SKILLS------------

	        function move_wp() {
	          var elem_wp = document.getElementById("myBar-wp"); 
	          var elem2_wp = document.getElementById("myBar_counter_wp");
	          var width_wp = 1;
	          var id_wp = setInterval(frame, 1);
	          function frame() {
	            if (width_wp >= 35) {
	              clearInterval(id_wp);
	            } else {
	              width_wp++; 
	              elem_wp.style.width = width_wp + '%'; 
	              elem2_wp.innerHTML = width_wp * 1  + '%';
	            }
	          }
	        } 
            
			//------------SKILLS------------

	        function move_git() {
	          var elem_git = document.getElementById("myBar-git"); 
	          var elem2_git = document.getElementById("myBar_counter_git");
	          var width_git = 1;
	          var id_git = setInterval(frame, 1);
	          function frame() {
	            if (width_git >= 25) {
	              clearInterval(id_git);
	            } else {
	              width_git++; 
	              elem_git.style.width = width_git + '%'; 
	              elem2_git.innerHTML = width_git * 1  + '%';
	            }
	          }
	        }  

	        //------------SKILLS------------

	        function move_emailling() {
	          var elem_emailling = document.getElementById("myBar-emailling"); 
	          var elem2_emailling = document.getElementById("myBar_counter_emailling");
	          var width_emailling = 1;
	          var id_emailling = setInterval(frame, 1);
	          function frame() {
	            if (width_emailling >= 15) {
	              clearInterval(id_emailling);
	            } else {
	              width_emailling++; 
	              elem_emailling.style.width = width_emailling + '%'; 
	              elem2_emailling.innerHTML = width_emailling * 1  + '%';
	            }
	          }
	        }  
	        
	        
	        move();
	        move_html();
	        move_bootstrap();
	        move_js();
	        move_php();
	        move_wp();
	        move_git();
	        move_emailling();
            
        	index++;
        }
    }
    });




$(document).ready(function(){

	$('.carousel').carousel({
	  interval: 4000
	})
	// --------- MENU MOBILE ICON ---------//
    
    $(".mobile-nav ul").hide();
    $(".icon-mobile").on("click", function(){
        $(".mobile-nav ul").toggle(500); 

    });

     var ravenous = function() { 

    if (window.matchMedia('(min-width: 450px)').matches){ 
		$(window).scroll(function (event) {
		    var scroll = $(window).scrollTop();
		    if(scroll  > 50) {
		     	$(".logo-left img").attr("src","images/logo2.png");
		     	$('.header-menu').addClass('sticky');
		     	$('.main-menu ul li a').css('color','#414141');
		     }else{
		     	$(".logo-left img").attr("src","images/logo.png");
		     	$('.header-menu').removeClass('sticky');
		     	$('.main-menu ul li a').css('color','#fff');
		     }
		});
        } 
    };
    // Set the function to resize
    $(window).resize(ravenous);
    // Call the function
    ravenous();  

    $('.owl-carousel').owlCarousel({
	    margin:10,
	    loop:true,
	    autoWidth:true,
	    items:6,
	    navigation: false,

	    //Autoplay
		autoplay:true,
		autoplaySpeed: 3000,
	    autoplayTimeout:3000,
	    autoplayHoverPause:true
	})


	$(function(){
	  // Add smooth scrolling to all links
	  $(".main-page a , .look-work , .about-cta").on('click', function(event) {

	    // Make sure this.hash has a value before overriding default behavior
	    if (this.hash !== "") {
	      // Prevent default anchor click behavior
	      event.preventDefault();

	      // Store hash
	      var hash = this.hash;

	      // Using jQuery's animate() method to add smooth page scroll
	      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
	      $('html, body').animate({
	        scrollTop: $(hash).offset().top
	      }, 600, function(){
	   
	        // Add hash (#) to URL when done scrolling (default click behavior)
	        window.location.hash = hash;
	      });
	    } // End if
	  });
	});


	 // --------- SEND BTN AJAX ---------//
    
    
    var validator = $('#contactForm').bootstrapValidator({
        feedbackIcons:{
            valid:"glyphicon glyphicon-ok",
            invalid:"glyphicon glyphicon-remove",
            validating:"glyphicon glyphicon-refresh"
        },
        
       fields:{
           email:{
               message:"Entrer une adresse E-mail valide!",
               validators:{
                   notEmpty:{
                       message:"Le champs Email est obligatoire!"
                   }
               }
           },
           
           name:{
               message:"Nom est obligatoire!",
               validators:{
                   notEmpty:{
                       message:"Le champs Nom est obligatoire!"
                   }
               }
           },
           
            objet:{
               message:"Objet est obligatoire!",
               validators:{
                   notEmpty:{
                       message:"Le champs Objet est obligatoire!"
                   }
               }
           },
           
            message:{
               message:"Le champs Message est obligatoire!",
               validators:{
                   notEmpty:{
                       message:"Le champs Message est obligatoire!"
                   }
               }
           }
           
       } 
    });
    
});


