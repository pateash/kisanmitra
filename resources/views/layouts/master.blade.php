
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Agrom  A Agriculture Flat bootstrap Responsive  Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="Agrom Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
</script>
<!-- //end-smoth-scrolling -->
<script src="js/menu_jquery.js"></script>

<!---pop-up-box---->
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
					 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>		
</head>
<body>
<!--header start here-->
<div class="header">
	<div class="container">
		<div class="header-main">
			   <div class="head-left">
				   	<div class="phone">
				   		<p>Phone<span class="ph-numb">5696 593 980</span></p>
				   	</div>
				   	<div class="search">		
			              <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i> </i></a>
		            </div>
				     <div id="small-dialog" class="mfp-hide">
					<div class="search-top">
							<div class="login">
								<input type="submit" value="">
								<input type="text" value="Search Here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">		
							</div>
							<p>Agrom</p>
						</div>				
					</div>
	        <!---->
	              <div class="clearfix"> </div>
                </div>
			   <div class="header-right">
				   <div class="logo">
				   	   <h1><a href="index.html">Agrom</a></h1>
				   </div>
				   <div class="header-login">
					 <div class="top-nav-right">
						<div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
							    <div id="loginBox">                
							        <form id="loginForm">
							                <fieldset id="body">
							                	<fieldset>
							                          <label for="email">Email Address</label>
							                          <input type="text" name="email" id="email">
							                    </fieldset>
							                    <fieldset>
							                            <label for="password">Password</label>
							                            <input type="password" name="password" id="password">
							                     </fieldset>
							                    <input type="submit" id="login" value="Sign in">
							                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
							            	</fieldset>
							            <span><a href="#">Forgot your password?</a></span>
								 </form>
					        </div>
					  </div>
				   </div>
		      </div>
		    <div class="clearfix"> </div>
	     </div>
	     <div class="clearfix"> </div>
     </div>
   </div>
</div>
<!--header end here-->
<!--top nav start here-->
<div class="top-navg-main">
	<div class="container">
	    <div class="top-navg">
	    	           <span class="menu"> <img src="images/icon.png" alt=""/></span>
				<ul class="res">
				    <li><a href="index.html" class="active hvr-sweep-to-bottom">Home</a></li> 
					<li><a class="hvr-sweep-to-bottom" href="about.html">About</a></li> 
					<li><a class="hvr-sweep-to-bottom" href="services.html">Services</a></li> 
					<li><a class="hvr-sweep-to-bottom" href="typo.html">Typo</a></li>
					<li><a class="hvr-sweep-to-bottom" href="gallery.html">Gallery</a></li> 
					<li><a class="hvr-sweep-to-bottom" href="contact.html">Contact</a></li> 
				 </ul>
					<!-- script-for-menu -->
						 <script>
						   $( "span.menu" ).click(function() {
							 $( "ul.res" ).slideToggle( 300, function() {
							 // Animation complete.
							  });
							 });
						</script>
		        <!-- /script-for-menu -->
		   </div>
	 </div>
</div>
<!--top nav end here-->

@yield('main-content')



<div class="footer">
	<div class="container">
		<div class="footer-main">
			  <div class="col-md-4 ftr-grd">
			  	 <h3>Get in Touch</h3>
			  	 <p>8901 ibero  Road</p>
			  	 <p>Nam libero tempore</p>
			  	 <p>Phone: +148 5746 415</p>
			  </div>
			  <div class="col-md-4 ftr-grd">
			  	 <h3>Follow Us</h3>
			  	 <ul>
			  	 	<li><a href="#"><span class="fa"> </span></a></li>
			  	 	<li><a href="#"><span class="tw"> </span></a></li>
			  	 	<li><a href="#"><span class="g"> </span></a></li>
			  	 	<li><a href="#"><span class="in"> </span></a></li>
			  	 </ul>
			  </div>
			  <div class="col-md-4 ftr-grd">
			  	 <h3>Join Our Newsletter</h3>
			  	 <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus </p>
			  	<label class="hvr-wobble-bottom"> <input type="submit" value="Send"></label>
			  </div>
			<div class="clearfix"> </div>
			<div class="copy-right">
			<p>© 2015 Agrom. All rights reserved | Design by  <a href="http://w3layouts.com/" target="_blank">  W3layouts </a></p>
		   </div>
		</div>
	</div>
</div>
<!--//footer--> 
</body>
</html>