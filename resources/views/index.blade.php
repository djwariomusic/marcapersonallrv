<!--
author: W3layouts,
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="es">
<head>
<title>Desarrollo Web - Freelance Edwin Beltrán</title>
<!-- custom-theme -->
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Desarrollo Web Economico, Freelance Bogota, Diseño Web Responsive, Backend+HTML5+CSS3,
Maquetacion Bootstrap" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="{{url('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{url('css/JiSlider.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{url('css/flexslider.css')}}" type="text/css" media="screen" property="" />
<!-- Owl-carousel-CSS -->
<link href="{{url('css/owl.carousel.css')}}" rel="stylesheet">
<link href="{{url('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="{{url('css/font-awesome.css')}}" rel="stylesheet">
<!-- //font-awesome-icons -->
</head>

<body>
<!-- banner -->
<div class="main_section_agile">
		<div class="agileits_w3layouts_banner_nav">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
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
							<li class="active"><a href="{{url('/')}}" class="effect-3">Inicio</a></li>
							<li><a href="{{url('/servicios')}}" class="effect-3">Servicios</a></li>
							<li><a href="{{url('/proyectos')}}" class="effect-3">Proyectos</a></li>
							<li><a href="{{url('/blog')}}" class="effect-3">Blog</a></li>
							<li><a href="{{url('/contacto')}}" class="effect-3">Contacto</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
</div>
<div class="clearfix"> </div>
<!-- banner -->
<div class="banner-silder">
	<div id="JiSlider" class="jislider">
		<ul>
			<li>
				<div class="w3layouts-banner-top">
						<div class="container">
							<div class="agileits-banner-info">
								<h3>FrontEnd y BackEnd</h3>
								<div class="alert alert-warning">
										Realizando mezclas perfectas entre HTML5 y Backend a la medida
								</div>
									<div class="more">
								<a href="{{url('/blog')}}" class="hvr-shutter-in-vertical" >Como lo hago? <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>
			</li>
			<li>
					<div class="w3layouts-banner-top w3layouts-banner-top1">
					<div class="container">
							<div class="agileits-banner-info">
								<h3>Asesorías en TI</h3>
								<div class="alert alert-warning">
									 Asesoría Gratuita en temas de Tecnología y Desarrollo
								 </div>
									<div class="more">
								<a href="#" class="hvr-shutter-in-vertical" data-toggle="modal" data-target="#myModal4">Solicitar Ahora <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>
			</li>
			<li>
					<div class="w3layouts-banner-top w3layouts-banner-top2">
						<div class="container">
							<div class="agileits-banner-info">
								<h3>Desarrollo Web </h3>
								<div  class="alert alert-warning">
										Adaptando ideas al Mercado Digital.
								</div>
								<div class="more">
								<a href="{{url('/servicios')}}" class="hvr-shutter-in-vertical" >Quiero saber más <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
								</div>
							</div>

						</div>
					</div>
				</li>

		</ul>
	</div>
		</div>
<!-- //banner -->
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
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<h5>Consultancy</h5>
						<img src="{{url('images/2.jpg')}}" alt=" " class="img-responsive" />
						<p>Ut enim ad minima venían, quis nostrum
							exercitationem ullam corporis suscipit laboriosam,
							nisi ut aliquid ex ea commodi consequatur? Quis autem
							vel eum iure reprehenderit qui in ea voluptate velit
							e.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- about -->
	<div class="inner_main_agile_section">
		<div class="container">
		<h6>Desarrollo Web a la Medida</h6>
		<h3 class="w3l_header w3_agileits_header">Perfil <span class="fixed_w3">Profesional</span></h3>
		<p class="sub_para_agile two">Descripción Competencias Laborales</p>
			<div class="agile_inner_grids">
				<div class="col-md-12 w3_agileits_about2_grid_left">
					<p style="line-height: 2em;">Profesional en Ingeniería de Sistemas. Especialista Base de Datos para Sistemas de Información Geográfica,
						conocimientos en Desarrollo  de  Páginas  WEB  HTML5,  CSS3,  PHP,  JavaScript  y  diseño Responsive.
						Experiencia en Coordinación de Soporte Técnico en desarrollo de Software y sistemas de rastreo o seguimiento GPS,
						Sistemas de Información Geográfica, geolocalización, consultas SQL sobre diferentes motores de Base de Datos,
						gestión de calidad con enfoque al desarrollo de Software.</p><br>
					<ul>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Ingeniero en Sistemas</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Tecnólogo en Sistemas</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Especialista en Base de Datos</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->
	<div class="medile_agile_its_section">
	     <div class="col-md-6 medile_agile_its_blue">
	        <h4>Consulta Técnica <br>Gratis <i class="fa fa-hand-o-right" aria-hidden="true"></i> </h4>
	     </div>
		 <div class="col-md-6 medile_agile_its_green">
	        <div class="more click">
					<a href="#" class="hvr-shutter-in-vertical" data-toggle="modal" data-target="#myModal4">Solicitar Ahora  <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				</div>
	     </div>
		 <div class="clearfix"> </div>
	</div>
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<h6>Información Destacada</h6>
			<h3 class="w3l_header w3_agileits_header"> <span class="fixed_w3">Mi</span>  Objetivo <span class="fixed_w3">Profesional</span> </h3>
			<p class="sub_para_agile">Galería de Imagenes Últimos Proyectos</p>
			<div class="agile_inner_grids">
      <div class="col-md-12 w3_agileits_about_grid_left">
				<p>
					Actualmente mi objetivo principal es encontrar de nuevo la oportunidad de  formar parte de un equipo de
					desarrolladores en una empresa dedicada al mundo de la Internet y en general a la tecnología e Innovación,
					la ultima experiencia laboral fue muy gratificante porque me permitió estar presente en todas las etapas del
					ciclo de vida del Software pero en menor parte en la etapa de desarrollo en contraste con las etapas de
					implementación, soporte y preventa. Mi formación académica esta orientada a ser un Arquitecto en Soluciones
					Informáticas teniendo enfoques especiales en ITIL, Metodologías Ágiles en Desarrollo y Testing que me permita
					generar buenas practicas para la gestión y control en Desarrollo Software
				</p>
			</div>
			<div class="col-md-6 w3_agileits_about2_grid_left">
				<h3><br>Datos de Interes<br><br></h3>
				<ul>
					<li class="list-group-item1"><i class="fa fa-check-square-o" aria-hidden="true"></i>Alta atención al detalle y crítico conmigo mismo.</li>
					<li class="list-group-item1"><i class="fa fa-check-square-o" aria-hidden="true"></i>Ganas de trabajar, aprender y seguir evolucionando.</li>
					<li class="list-group-item1"><i class="fa fa-check-square-o" aria-hidden="true"></i>Perfil proactivo, curioso y automotivado.</li>
					<li class="list-group-item1"><i class="fa fa-check-square-o" aria-hidden="true"></i>Inglés técnico - intermedio.</li>
				</ul>
			</div>
			<div class="col-md-6 w3_agileits_about2_grid_left">
				<h3><br>En que estoy metido<br><br></h3>
				<ul>
					<li class="list-group-item1"><i class="fa fa-check-square-o" aria-hidden="true"></i>Fortalecer Conocimientos en NodeJS, AngularJs, MongoDB y Python.</li>
					<li class="list-group-item1"><i class="fa fa-check-square-o" aria-hidden="true"></i>Realización de Trabajos y Ejercicios Académicos para Ing. de Sistemas.</li>
					<li class="list-group-item1"><i class="fa fa-check-square-o" aria-hidden="true"></i>Seguir las ultimas tendencias y tecnologías asociadas al desarrollo de Software.</li>
					<li class="list-group-item1"><i class="fa fa-check-square-o" aria-hidden="true"></i>Control de Versiones GIT y trabajo colaborativo Git-hub.</li>
				</ul>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="agileits_banner_bottom_grids">
				<div class="col-md-3 agileits_banner_bottom_grid">
					<div class="hovereffect w3ls_banner_bottom_grid">
						<img src="{{url('images/1.jpg')}}" alt=" " class="img-responsive" />
						<div class="overlay">
							<div class="overlay">
	         	  </div>
						</div>
					</div>
					<center>
					  <span><font color="#0ac876"><strong>Sistema Información Geográfico</strong></font></span><br>
					  <a href="http://www.sinic.gov.co/mapacultural/index.html" target="_blank"><span class="label label-warning"><i class="fa fa-link" aria-hidden="true"></i>  Visitar</span></a>
					</center>
    		</div>
				<div class="col-md-3 agileits_banner_bottom_grid">
					<div class="hovereffect w3ls_banner_bottom_grid">
						<img src="{{url('images/2.jpg')}}" alt=" " class="img-responsive" />
						<div class="overlay">
						</div>
					</div>
					<center>
					<span><font color="#0ac876"><strong>Sistema Gestión Documental y RRHH</strong></font></span><br>
					<a href="http://www.secancol.com" target="_blank"><span class="label label-warning"><i class="fa fa-link" aria-hidden="true"></i>  Visitar</span></a>
				</center>
				</div>
				<div class="col-md-3 agileits_banner_bottom_grid">
					<div class="hovereffect w3ls_banner_bottom_grid">
						<img src="{{url('images/3.jpg')}}" alt=" " class="img-responsive" />
						<div class="overlay">
						</div>
					</div>
					<center>
					  <span><font color="#0ac876"><strong>Sistema de Gestión de Toma de Muestras Medicas</strong></font></span><br>
					  <a href="http://www.biolabtracking.laboratorioclinicobiolab.com/biolabweb2/" target="_blank"><span class="label label-warning"><i class="fa fa-link" aria-hidden="true"></i>  Visitar</span></a>
				  </center>
				</div>
				<div class="col-md-3 agileits_banner_bottom_grid">
					<div class="hovereffect w3ls_banner_bottom_grid">
						<img src="{{url('images/4.jpg')}}" alt=" " class="img-responsive" />
						<div class="overlay">
						</div>
					</div>
					<center>
					  <span><font color="#0ac876"><strong>Community Vecinos Verdes - MINTIC</strong></font></span><br>
					  <a href="https://djwariomusic.github.io/vecinosverdesweb/docs/" target="_blank"><span class="label label-warning"><i class="fa fa-link" aria-hidden="true"></i>  Visitar</span></a></span>
				  </center>
				</div>
				<div class="clearfix"> </div>
		</div>

		<!-- /blog -->
	<div class="events">
		<ul id="flexiselDemo1">
			<li>
				<div class="w3layouts_event_grid">
					<div class="w3_agile_event_grid1">
						<img src="{{url('images/tools1.jpg')}}" alt=" " class="img-responsive" />
						<div class="agile_event_grid1_pos">
							<ul>
								<li><a href="#"><i class="fa fa-git" aria-hidden="true"></i><font size="1">Git</font></a></li>
								<li><a href="#"><i class="fa fa-github-alt" aria-hidden="true"></i><font size="1">Github</font></a></li>
							</ul>
						</div>
					</div>
					<div class="agileits_w3layouts_event_grid1">
						<h5><a href="#" data-toggle="modal" data-target="#myModal">Git y Github</a><br><br></h5>
						<span>Manejo de Versionamiento por Git y Trabajo Colaborativo a través de Github.<br>
						<br></span>
					</div>
				</div>
			</li>
			<li>
				<div class="w3layouts_event_grid">
					<div class="w3_agile_event_grid1">
						<img src="{{url('images/tools2.jpg')}}" alt=" " class="img-responsive" />
						<div class="agile_event_grid1_pos">
							<ul>
								<li><a href="#"><i class="fa fa-html5" aria-hidden="true"></i><font size="1">HTML5</font></a></li>
								<li><a href="#"><i class="fa fa-css3" aria-hidden="true"></i><font size="1">CSS3</font></a></li>
								<li><a href="#"><i class="fa fa-mobile" aria-hidden="true"></i><font size="1">Bootstrap</font></a></li>
							</ul>
						</div>
					</div>
					<div class="agileits_w3layouts_event_grid1">
						<h5><a href="#" data-toggle="modal" data-target="#myModal">Frontend</a><br><br></h5>
						<span>Maquetación Web a través de HTML5 y CSS3. Uso de Bootstrap 4 Intermedio para Desarrollos Responsive.</span>
					</div>
				</div>
			</li>
			<li>
				<div class="w3layouts_event_grid">
					<div class="w3_agile_event_grid1">
						<img src="{{url('images/tools3.jpg')}}" alt=" " class="img-responsive" />
						<div class="agile_event_grid1_pos">
							<ul>
								<li><a href="#"><i class="fa fa-code" aria-hidden="true"></i><font size="1">PHP</font></a></li>
								<li><a href="#"><i class="fa fa-file-code-o" aria-hidden="true"></i><font size="1">JS</font></a></li>
								<li><a href="#"><i class="fa fa-magic" aria-hidden="true"></i><font size="1">Laravel</font></a></li>
							</ul>
						</div>
					</div>
					<div class="agileits_w3layouts_event_grid1">
						<h5><a href="#" data-toggle="modal" data-target="#myModal">Backend</a><br><br></h5>
						<span>Programación en Javascript, Python (Django), PHP. Uso de Framework Laravel 5 Intermedio. ASP.NET.</span>
					</div>
				</div>
			</li>
			<li>
				<div class="w3layouts_event_grid">
					<div class="w3_agile_event_grid1">
						<img src="{{url('images/tools4.jpg')}}" alt=" " class="img-responsive" />
						<div class="agile_event_grid1_pos">
							<ul>
								<li><a href="#"><i class="fa fa-database" aria-hidden="true"></i><font size="1">PosgreSQL</font></a></li>
								<li><a href="#"><i class="fa fa-database" aria-hidden="true"></i><font size="1">MySQL</font></a></li>
								<li><a href="#"><i class="fa fa-database" aria-hidden="true"></i><font size="1">SQLServer</font></a></li>
							</ul>
						</div>
					</div>
					<div class="agileits_w3layouts_event_grid1">
						<h5><a href="#" data-toggle="modal" data-target="#myModal">Base de Datos PL-PGSQL</a></h5>
						<span>Creación de modelos entidad relación, programación de consultas mixtas y stored procedures</span>
					</div>
				</div>
			</li>
			<li>
				<div class="w3layouts_event_grid">
					<div class="w3_agile_event_grid1">
						<img src="{{url('images/tools5.jpg')}}" alt=" " class="img-responsive" />
						<div class="agile_event_grid1_pos">
							<ul>
								<li><a href="#"><i class="fa fa-linux" aria-hidden="true"></i><font size="1">Linux</font></a></li>
								<li><a href="#"><i class="fa fa-windows" aria-hidden="true"></i><font size="1">Windows</font></a></li>
								<li><a href="#"><i class="fa fa-stethoscope" aria-hidden="true"></i><font size="1">Sonarqube</font></a></li>
							</ul>
						</div>
					</div>
					<div class="agileits_w3layouts_event_grid1">
						<h5><a href="#" data-toggle="modal" data-target="#myModal">Soporte Técnico Linux</a></h5>
						<span>Soporte técnico, testing bajo métricas y herramientas automatizadas. RUP, SCRUM e ISO 25000 </span>
					</div>
				</div>
			</li>
		</ul>
	</div>
<!-- //blog -->
	</div>
<!-- //banner-bottom -->

	<!-- services -->
	<div class="services" id="services">
		<div class="container">
		<h3 class="w3l_header w3_agileits_header two"><span>SERVICIOS</span></h3>
		<p class="sub_para_agile two">Sera un gusto poder asesorarlo. </p>
			<div class="agile_inner_grids">
								   <!-- choose icon -->
								   <div class="col-md-6 choose_icon">
										<div class="choose_left">
											<i class="fa fa-bar-chart" aria-hidden="true"></i>
										</div>
									<div class="choose_right">
										<h3>DESARROLLO WEB</h3>
										<p>Desarrollo a la medida a bajo precio y alta calidad.
										No solo observando las necesidades actuales si no las posibilidades de crecimiento.</p>
									</div>
										<div class="clearfix"></div>
									 </div>
								  <!-- choose icon -->
								  <div class="col-md-6 choose_icon">
									<div class="choose_left">
										<i class="fa fa-bullhorn" aria-hidden="true"></i>
									</div>
									<div class="choose_right">
										<h3>CONSULTORIAS</h3>
										<p>Consultarías en T. I y Desarrollo Web sin Costo  <br>
										Considero que la mejor herramienta del conocimiento es el intercambio de ideas.</p>
									</div>
									<div class="clearfix"></div>
								 </div>
								  <!-- choose icon -->
								  <div class="col-md-6 choose_icon">
									<div class="choose_left">
										<i class="fa fa-user-secret" aria-hidden="true"></i>
									</div>
									<div class="choose_right">
										<h3>TESTING Y CALIDAD EN SOFTWARE</h3>
										<p>La Entrevista inicial como punto de arranque.
										Permitirá definir métricas, herramientas y casos de pruebas en QA.</p>
									</div>
									<div class="clearfix"></div>
								 </div>
								  <div class="col-md-6 choose_icon">
									<div class="choose_left">
										<i class="fa fa-laptop" aria-hidden="true"></i>
									</div>
									<div class="choose_right">
										<h3>EJERCICIOS<BR>ACADEMICOS</h3>
										<p>Realizo trabajos académicos asociados Ingeniería
										de Sistemas y Tecnologías de la Computación, Código Comentado. Trabajo Garantizado.</p>
									</div>
									<div class="clearfix"></div>
								 </div>
								 <div class="clearfix"></div>
							</div>
						</div>
					</div>
	<!-- //services -->
<!-- agile_testimonials -->
<div class="test">
	<div class="container">
	<h3 class="w3l_header w3_agileits_header">Referencias <span>Personales</span></h3>
		<p class="sub_para_agile two">Compañeros, amigos y colegas</p>

			<div class="agile_inner_grids">
					<div class="test-gri1">
					 <div id="owl-demo2" class="owl-carousel">
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
									  <i class="fa fa-quote-left" aria-hidden="true"></i>
										<p class="para-w3-agile">Puedo dar fe que él el profesionalismo en sus actividades e informe
											sobre los cambios que este cliente realizaría y su impacto hacia nuestros procesos, brindando
											un informe preciso con varias alternativas en desarrollo de software lo cual, no tenemos duda
											de seguir contratando con él. </p>
										<h4>José Octavio Zuluaga</h4>
										<p>Gerente General - Conciliatus S.A.S Firma de Abogados</p>
									</div>

									<div class="col-md-4 test-grid2">
										<img src="{{url('images/t1.jpg')}}" alt="" class="img-r">
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
										<p class="para-w3-agile">Puedo dar fe que él se caracteriza fundamentalmente por ser responsable,
											comprometido, dedicado; demostrando un alto grado de madurez en todas sus actitudes y aptitudes
											como compañero y ser humano. En el plano personal, admiro cualidades como la constancia
											y la honradez, además es evidente su marcada persistencia en lograr sus objetivos.</p>
										<h4>Margarita Muñoz</h4>
										<p>Jefe de Operaciones - Servinformacion S.A</p>
									</div>
									<div class="col-md-4 test-grid2">
										<img src="{{url('images/t2.jpg')}}" alt="" class="img-r">
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
									<p class="para-w3-agile">Tengo el honor de conocer desde el año de 2005 y siempre lo he
										visto comportarse como una persona Responsable, Honesta, Proactiva y Trabajadora, además
										posee extraordinarias habilidades de comunicación y de relaciones interpersonales para el
										desarrollo de trabajo en equipo.</p>
									<h4>Alexander Soto</h4>
									<p>Coordinador de Servicios - Acueducto y Alcantarillado de Bogotá - Ingeniero Industrial</p>
									</div>
									<div class="col-md-4 test-grid2">
										<img src="{{url('images/t3.jpg')}}" alt="" class="img-r">
									</div>

								</div>
								<div class="clearfix"></div>
							</div>
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
										<p class="para-w3-agile">En el transcurso de las clases que hemos compartido se ha destacado en su
											liderazgo y participación en la clase con temas asociados a Tecnología e Innovación.
											Soy actualmente docente del estudiante durante el transcurso de las clases el estudiante ha mostrado
											un desempeño destacado y se observa su esfuerzo más que el promedio de sus compañeros. </p>
										<h4>Adriana Sánchez</h4>
										<p>Ingeniería de Sistemas - Docente Universitaria.</p>
									</div>
									<div class="col-md-4 test-grid2">
										<img src="{{url('images/t4.jpg')}}" alt="" class="img-r">
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
					</div>
				</div>
		</div>
</div>
</div>
<!-- //agile_testimonials -->
<!-- footer -->
	<div class="footer">
		<div class="container">
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
				<p>© 2018 Edwin Beltrán. Material Académico.</p>
			</div>
		</div>
	</div>
<!-- //footer -->

<!-- start-smoth-scrolling -->
<!-- js -->
<script type="text/javascript" src="{{url('js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<script src="{{url('js/JiSlider.js')}}"></script>
<script src="{{url('js/JiSlider2.js')}}"></script>
<script type="text/javascript" src="{{url('js/https.js')}}"></script>
<!-- stats -->
<script src="{{url('js/jquery.waypoints.min.js')}}"></script>
<script src="{{url('js/jquery.countup.js')}}"></script>
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
<!-- flexisel -->
<script type="text/javascript" src="{{url('js/jquery.flexisel.js')}}"></script>
<script type="text/javascript" src="{{url('js/flexisel.js')}}"></script>
<!-- //flexisel -->
<!-- requried-jsfiles-for owl -->
<script src="{{url('js/owl.carousel.js')}}"></script>
<script src="{{url('js/owlcarousel.js')}}"></script>
<!-- //requried-jsfiles-for owl -->
<script type="text/javascript" src="{{url('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{url('js/easing.js')}}"></script>
<script type="text/javascript" src="{{url('js/scroll.js')}}"></script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
<script src="{{url('js/bootstrap.js')}}"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
		    $().UItoTop({ easingType: 'easeOutQuart' });
		});
</script>
<!-- //here ends scrolling icon -->
</body>
</html>
