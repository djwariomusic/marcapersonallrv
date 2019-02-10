<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="es">
<head>
<title>Desarrollo Web - Freelance Edwin Beltrán*</title>
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

<link rel="stylesheet" href="{{url('css/dataTables.bootstrap.css')}}">
<link rel="stylesheet" href="{{url('css/dataTables.bootstrap.min.css')}}">


<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
<!-- banner -->

<div class="main_section_agile" id="app">
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
				<div>
        <ul class="agile_forms">
	      <!-- Authentication Links -->
		 	      @if (Auth::guest())
		  			    <li><a href="{{ route('login') }}">Login</a></li>
								<li><a href="{{ route('register') }}">Registrarse</a></li>
		 	      @else
								<label style="display:none;">{{$me = Auth::user()->username}}</label>
		 			      <li class="dropdown">
		 					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
		 							{{ Auth::user()->name }} <span class="caret"></span>
		 					  </a>

		 					      <ul class="dropdown-menu agile_forms2" role="menu">
											<center>
		                  <li>
		                      <img class="img-thumbnail" width="100" height="100" src="{{url('images/avatar/avatar.jpg')}}">
		                  </li>
		                  </center>
											<li>
		                  <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>
		                    Dashboard
		                  </a>
		                  </li>
		                  <ol>
		                    <li><i class="fa fa-edit"></i><a href="{{url('/edit-post')}}"> Crear Posts</a></li>
		                    <li><i class="fa fa-folder-open-o"></i><a href="{{url('/home/'.$me)}}"> Mis Posts</a></li>
		                    <li><i class="fa fa-bar-chart-o"></i><a href="{{url('/home/'.$me.'/graphs')}}"> Graficas</a></li>
		                    <li><i class="fa fa-table"></i><a href="{{url('/datatable')}}"> DataTables</a></li>
		                    <li><i class="fa fa-map-marker"></i><a href="{{url('/gis')}}"> Google Maps</a></li>
		                    <li><i class="fa fa-code"></i><a href="{{url('/apijson')}}"> API JSON</a></li>
		                  </ol>
		                  <li><a href="{{url('/documents')}}"><i class="fa fa-files-o"></i> Documentación</a></li>
		                  <li>
		                  <a href="{{ route('logout') }}"
		                    onclick="event.preventDefault();
		                             document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>
		                    Logout
		                  </a>

		 									  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		 											{{ csrf_field() }}
		 									  </form>
		 							      </li>
		 					      </ul>
		 			     </li>
		 	      @endif
        </ul>
        </div>
				<div class="clearfix"> </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-2" id="link-effect-2">
						<ul class="nav navbar-nav">
							<li><a href="/" class="effect-3">Inicio</a></li>
							<li><a href="/servicios" class="effect-3">Servicios</a></li>
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
<!-- bootstrap-pop-up -->
@if(Auth::check())
	<div class="modal video-modal fade" id="myModalPost" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<h5>El Post ha sido Creado o Modificado!</h5>
						<img src="{{url('images/check-form.jpg')}}" width="64" height="64" alt=" " class="img-responsive" />
						<center>
						<p><a href="/home/{{Auth::user()->username}}"><input type="button" value="Mis Posts"></a></p>
					  </center>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModalPostDel" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<center>
					<div class="modal-body">
						<h5>El Post ha sido Eliminado!</h5>
						<img src="{{url('images/delete-form.jpg')}}" width="64" height="64" alt=" " class="img-responsive" />
						<p align="center"><a href="/home/{{Auth::user()->username}}"><input type="button" value="Mis Posts"></a></p>
					</div>
					</center>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModalDened" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<center>
					<div class="modal-body">
						<h5>Acción No Permitida!</h5>
						<img src="{{url('images/delete-form.jpg')}}" width="64" height="64" alt=" " class="img-responsive" />
						<p align="center"><a href="/home/{{Auth::user()->username}}"><input type="button" value="Mis Posts"></a></p>
					</div>
					</center>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
@endif
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
<script type="text/javascript">
$(function(){
  $("#bars li .bar").each(function(key, bar){
    var percentage = $(this).data('percentage');

    $(this).animate({
      'height':percentage+'%'
    }, 1000);
  })
})
</script>
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
