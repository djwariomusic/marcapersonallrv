<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Desarrollo Web - Freelance Edwin Beltran</title>
<!-- custom-theme -->
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Desarrollo Web Economico, Freelance Bogota, Diseño Web Responsive, Backend+HTML5+CSS3,
Maquetacion Bootstrap" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Owl-carousel-CSS -->
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome-icons -->
<link href="css/index.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<!-- banner -->
<div class="main_section_agile">
		<div class="agileits_w3layouts_banner_nav">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				<h1><a class="navbar-brand" href="/"><i class="fa fa-desktop" aria-hidden="true"></i>Edwin Beltrán <br></a></h1>
      	</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-2" id="link-effect-2">
						<ul class="nav navbar-nav">
							<li class="active"><a href="/" class="effect-3">Inicio</a></li>
							<li><a href="/services" class="effect-3">Servicios</a></li>
							<li><a href="/proyectos" class="effect-3">Proyectos</a></li>
							<li><a href="/blog" class="effect-3">Blog</a></li>
							<li><a href="/contacto" class="effect-3">Contacto</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
</div>
<div class="clearfix"> </div>
<!--/ banner -->
@yield('contenido')

<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_newsletter_footer_grids">
				<div class="w3_newsletter_footer_grid_left">
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Ingresar Email...." required="">
						<input type="submit" value="ENVIAR">
					</form>
				</div>
			</div>
			<div class="w3ls_address_mail_footer_grids">
				<div class="col-md-3 w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<p>Carrera 104 # 75c - 12 <span>Bogotá D.C - Colombia</span></p>
				</div>
				<div class="col-md-3 w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<p>+(57) 301 2388303</p>
				</div>
				<div class="col-md-3 w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-linkedin" aria-hidden="true"></i>
					</div>
					<p>mario-edwin@hotmail.com</p>
				</div>
				<div class="col-md-3 w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
					</div>
					<p><a href="mailto:mario-edwin@hotmail.com">mario-edwin@hotmail.com</a>
						<span><a href="mailto:edwinbeltrandev@gmail.com">edwinbeltrandev@gmail.com</a></span></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileinfo_copyright" >
				<p>© 2017 Consultancy. All Rights Reserved | Design by <a href="https://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- js -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->


<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->

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
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->
<!-- //js -->

</body>
</html>
