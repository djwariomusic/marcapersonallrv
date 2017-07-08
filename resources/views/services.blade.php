@extends('layouts.app')
<!-- aca le estoy indicando a modo blade que este se archivo.php se extiende y utiliza mi plantilla-->
@section('contenido')

  <!--/ banner -->
  <div class="banner1">
  		<div class="w3_agileits_service_banner_info">
  			<h2>Servicios</h2>
  		</div>
  	</div>
  <!--/ banner -->

  <!-- services -->
  	<div class="services two">
  		<div class="container">
  			<h3 class="w3l_header w3_agileits_header">Servicios en<span> Oferta</span></h3>
  			<div class="agile_inner_grids">
  				<div class="col-md-6 wthree_services_grid_left">
  					<h3><span>Consultoria</span> </h3>
  					<h4>Asesoriamiento Personalizado.</h4>
  					<p>La experiencia laboral, el intercambio de conocimientos y la red de contactos profesionales me permite
  					brindar asesoriamiento y consultoria en diferentes necesidades de T.I.
  					A continuacion se mostraran ciertas herramientas de las cuales domino y puedo brindar un asesorimiento profesional.<br>
  					<font color="#0ac876"><em>Está demostrado que la incorporación de nuevas tecnologías y la presencia en la Internet a través de un
            Sitio Web esta co-relacionado de manera positiva con el incremento en las ventas, la productividad y el valor en el mercado
            del Producto y Empresa.</em></font></p>
  					<h2><input type="button" class="btn btn-success" value="Consultoria  Gratuita: "> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></input></h2>
  					<br><h2><a href="#"><span class="label label-success">Solicitar Consultoria: <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a></h2>

  				</div>
  				<div class="col-md-6 wthree_services_grid_right">
  					<div class="col-md-4 agileits_w3layouts_service_grid">
  						<div class="agile_service_grd">
  							<i class="fa fa-database" aria-hidden="true"></i>
  						</div>
  						<h4>Base Datos</h4>
  						<span>SQL, MySQL, PostgreSQL y PLPGSQL</span>
  					</div>
  					<div class="col-md-4 agileits_w3layouts_service_grid">
  						<div class="agile_service_grd">
  						<i class="fa fa-laptop" aria-hidden="true"></i>
  						</div>
  						<h4>Frontend</h4>
  						<span>Mockaps, HTML5, CSS3 y uso de Bootstrap</span>
  					</div>
  					<div class="col-md-4 agileits_w3layouts_service_grid">
  						<div class="agile_service_grd">
  						<i class="fa fa-file-code-o" aria-hidden="true"></i>
  						</div>
  						<h4>Backend</h4>
  						<span>PHP, Python, Django, Laravel, Ruby y .NET</span>
  					</div>
  					<div class="col-md-4 agileits_w3layouts_service_grid">
  						<div class="agile_service_grd">
  							<i class="fa fa-map-marker" aria-hidden="true"></i>
  						</div>
  						<h4>GIS</h4>
  						<span>Google Maps, MapInfo, Arcgis. PostGIS</span>
  					</div>
  					<div class="col-md-4 agileits_w3layouts_service_grid">
  						<div class="agile_service_grd">
  					<i class="fa fa-stethoscope" aria-hidden="true"></i>
  						</div>
  						<h4>Testing</h4>
  						<span>Casos de Prueba, Selenium, Sonarqube y Travis</span>
  					</div>
  					<div class="col-md-4 agileits_w3layouts_service_grid">
  						<div class="agile_service_grd">
  						<i class="fa fa-edit" aria-hidden="true"></i>
  						</div>
  						<h4>Calidad SW</h4>
  						<span>Metodologias y Arquitecturas de Software</span>
  					</div>
  					<div class="clearfix"> </div>
  				</div>
  			</div>
  		</div>
  	</div>
  <!-- //services -->

  <!-- stats-bottom -->
  	<div class="stats-bottom contact">
  		<div class="container">
  			<h3 class="w3l_header w3_agileits_header">OTROS <span>SERVICIOS</span></h3>
  			<div class="agileinfo_services_grids">
  				<div class="col-md-4 agileinfo_services_grid">
  					<div class="agileinfo_services_grid1">
  						<h4><font color="#efb312">Desarrollo Web</font></h4>
  						<span>Desde el Frontend hasta el Backend para el desarrollo de Sitios Web dinamicos, control y gestión de
  							registros de la B.D, consultas sencillas y compuestas en SQL para mostrar resultados sobre Grid o Listas.</span>
  						<div class="agileinfo_services_grid1_pos">
  							<span class="glyphicon glyphicon-cloud" aria-hidden="true"></front></span>
  						</div>
  					</div>
  				</div>
  				<div class="col-md-4 agileinfo_services_grid">
  					<div class="agileinfo_services_grid1">
  						<h4><font color="#efb312">Base de Datos</font></h4>
  						<span>Generacion de modelos relacionales para la estructuracion de negocios. Manejo de diferentes Motores
  						de Base de Datos SQL, creacion de funciones personalizadas y de stored procedures.<br><br></span>
  						<div class="agileinfo_services_grid1_pos">
  							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
  						</div>
  					</div>
  				</div>
  				<div class="col-md-4 agileinfo_services_grid">
  					<div class="agileinfo_services_grid1">
  						<h4><font color="#efb312">Testing Automatizado</font></h4>
  						<span>Ejecucion de testing sobre diferentes desarrollos, documentando pruebas unitarias, equivalencias, integracion
  							y de Sistema, por medio de testing Black Box y White Box para asi determinar matricas de Calidad sobre el Desarrollo</span>
  						<div class="agileinfo_services_grid1_pos">
  							<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
  						</div>
  					</div>
  				</div>
  				<div class="clearfix"> </div>
  			</div>
  			<div class="w3agile_services_grids">
  				<div class="col-md-4 agileinfo_services_grid">
  					<div class="agileinfo_services_grid1">
  						<h4><font color="#efb312">Algoritmos Academicos</font></h4>
  						<span>Se realiza ejericicios o proyectos academicos que requiera una implementacion en la Web.
  						Desde algoritmos que nos permitan estructurar los datos, hasta desarrollos complejos que manipulen diferentes fuentes de Informacion.<br><br></span>
  						<div class="agileinfo_services_grid1_pos">
  							<span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>
  						</div>
  					</div>
  				</div>
  				<div class="col-md-4 agileinfo_services_grid">
  					<div class="agileinfo_services_grid1">
  						<h4><font color="#efb312">Marketing Digital - SEO</font></h4>
  						<span>Es llevar el negocio de venta y adquisición de servicios a un medio digital. El cual se encuentre
              optimizado para dispositivos móviles, permitiendo capturar información de interesados, llevando una serie de practicas
  					  que nos llevara a estar muy bien posicionado en Google u otros Buscadores.</span>
  						<div class="agileinfo_services_grid1_pos">
  							<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
  						</div>
  					</div>
  				</div>
  				<div class="col-md-4 agileinfo_services_grid">
  					<div class="agileinfo_services_grid1">
  						<h4><font color="#efb312">Desarrollo de Apps</font></h4>
  						<p>Phasellus a porttitor metus, vitae ultrices nibh. Sed eu fermentum nunc.</p>
  						<div class="agileinfo_services_grid1_pos">
  							<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
  						</div>
  					</div>
  				</div>
  				<div class="clearfix"> </div>
  			</div>
  		</div>
  	</div>
  <!-- //stats-bottom -->

  <!-- start-smoth-scrolling -->
  <!-- js -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <!-- //js -->
  <!-- stats -->
  	<script src="js/jquery.waypoints.min.js"></script>
  	<script src="js/jquery.countup.js"></script>
  		<script>
  			$('.counter').countUp();
  		</script>
  <!-- //stats -->
  <!-- flexisel -->
  	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
  	<script type="text/javascript">
  		$(window).load(function() {
  			$("#flexiselDemo1").flexisel({
  				visibleItems: 4,
  				animationSpeed: 1000,
  				autoPlay: true,
  				autoPlaySpeed: 3000,
  				pauseOnHover: true,
  				enableResponsiveBreakpoints: true,
  				responsiveBreakpoints: {
  					portrait: {
  						changePoint:480,
  						visibleItems: 1
  					},
  					landscape: {
  						changePoint:640,
  						visibleItems:2
  					},
  					tablet: {
  						changePoint:768,
  						visibleItems: 3
  					}
  				}
  			});

  		});
  	</script>
  <!-- //flexisel -->
  <!-- requried-jsfiles-for owl -->
   <script src="js/owl.carousel.js"></script>
  							        <script>
  									    $(document).ready(function() {
  									      $("#owl-demo2").owlCarousel({
  									        items : 1,
  									        lazyLoad : false,
  									        autoPlay : true,
  									        navigation : false,
  									        navigationText :  false,
  									        pagination : true,
  									      });
  									    });
  									  </script>
  							 <!-- //requried-jsfiles-for owl -->


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
  <!-- for bootstrap working -->
  	<script src="js/bootstrap.js"></script>
  <!-- //for bootstrap working -->
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
@endsection
