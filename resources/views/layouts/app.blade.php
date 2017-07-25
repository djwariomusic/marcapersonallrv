<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Desarrollo Web - Freelance Edwin Beltrán</title>
<!-- custom-theme -->
<link rel="icon" href="{{ url('images/favicon.ico')}}" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Desarrollo Web Economico, Freelance Bogota, Diseño Web Responsive, Backend+HTML5+CSS3,
Maquetacion Bootstrap" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="{{ url('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- Owl-carousel-CSS -->
<link href="{{ url('css/owl.carousel.css')}}" rel="stylesheet">
<link href="{{ url('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="{{ url('css/font-awesome.css')}}" rel="stylesheet">
<!-- //font-awesome-icons -->
<link href="{{ url('css/index.css')}}" rel="stylesheet" type="text/css" media="all" />

<meta name="csrf-token" content="{{ csrf_token() }}">
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
				<h1><a class="navbar-brand" href="/"><i class="fa fa-desktop" aria-hidden="true"></i>Edwin Beltrán</a></h1>
      	</div>

				@yield('login')

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-2" id="link-effect-2">
						<ul class="nav navbar-nav">
							@yield('barnav')
						</ul>
				</nav>
				</div>
			</nav>
		</div>
</div>
<div class="clearfix"> </div>
<!--/ banner -->

<!-- Modal2 -->
													<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>

																	<div class="signin-form profile">

																			<div class="login-form">
																				<form action="/contactar" method="post">
																					{{csrf_field()}}
																				   <input type="text" name="name" placeholder="Nombre" required="">
																					<input type="email" name="email" placeholder="Email" required="">
																					<input type="text" name="telephone" placeholder="Telefono" required="">
																					<input type="text" name="description" placeholder="Asunto" required="">
																					<textarea name="message" placeholder="Mensaje" required=""></textarea>
																					<input type="submit" value="ENVIAR">
																				</form>
																			</div>

																		</div>
																</div>
															</div>
														</div>
													</div>
													<!-- //Modal2 -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModalMsj" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<h5>Gracias por Contactarnos</h5>
						<img src="{{url('images/gracias.png')}}" alt=" " class="img-responsive" />
						<!--<p>Ut enim ad minima venían, quis nostrum
							exercitationem ullam corporis suscipit laboriosam,
							nisi ut aliquid ex ea commodi consequatur? Quis autem
							vel eum iure reprehenderit qui in ea voluptate velit
							e.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit
								esse quam nihil molestiae consequatur.</i></p>-->
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
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
	<script src="{{ asset('js/bootstrap.js')}}"></script>
<!-- //for bootstrap working -->


<!-- stats -->
	<script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
	<script src="{{ asset('js/jquery.countup.js')}}"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->

<script type="text/javascript" src="{{ asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/easing.js')}}"></script>
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
