@extends('layouts.app')
<!-- aca le estoy indicando a modo blade que este se archivo.php se extiende y utiliza mi plantilla-->
@section('contenido')
<!-- main -->
<!-- banner -->
  <div class="banner1">
  		<div class="w3_agileits_service_banner_info">
  			<h2>Portafolio</h2>
  		</div>
  </div>
<!--/ banner -->
  <!--/portfolio-->
  <div class="inner_main_agile_section">
  	<div class="container">
  	<h3 class="w3l_header w3_agileits_header"> Participación / <span>Proyectos</span></h3>
  			<p class="sub_para_agile two">Ipsum dolor sit amet consectetur adipisicing elit</p>
  			<div class="col-md-12 wthree_services_grid_left">
  				<br>
  				<h3>MAPA CULTURAL <span>MINCULTURA</span> </h3>
  				<strong>URL:</strong> <a href="http://www.sinic.gov.co/mapacultural/index.html" target="_blank">http://www.sinic.gov.co/mapacultural/index.html</a><br>
  				<strong>Galería Flickr:</strong> <a href="https://www.flickr.com/gp/150113091@N02/b5A1tn" target="_blank"><span class="label label-info">Ir a Flickr</span></a>
  				<p><strong>Descripción: </strong>WebGIS que suministra datos Georreferenciados de alrededor 50.000 Inmuebles de Patrimonio Cultural a nivel nacional.<br>
  				<strong>Tecnologías: </strong>HTML5, JSON, WebServices, Georreferenciador, API Google Maps, SQL Server.<br>
  				<strong>Participación: </strong>Coordine todo el análisis de datos y validación de los mismos para que
  				los datos tuvieran Modelo 3D asociado, existencia de integridad referencial con los múltiples llaves. Soporte
  				y Toma de Requerimientos hacia ajustes o mejoras. Testing y Documentación</p>
  			</div>
  			<br>
  			<div class="col-md-12 wthree_services_grid_left">
  				<br>
  				<h3>SITIMOVIL <span>SERVINFORMACION S. A </span> </h3>
  				<strong>URL:</strong> <a href="http://sitimovil.sitimapa.com" target="_blank">http://sitimovil.sitimapa.com</a><br>
  				<strong>Galería Flickr:</strong> <a href="https://www.flickr.com/gp/150113091@N02/M90968" target="_blank"><span class="label label-info">Ir a Flickr</span></a>
  				<p><strong>Descripción: </strong>Plataforma Web para la Administración y Gestión de dispositivos GPS Vehicular y Telefonía Móvil para control de visitas, cumplimiento de rutas y ubicación actual.<br>
  				<strong>Tecnologías: </strong>: HTML5, JSON, WebServices, Ruteadores, API Google Maps, PostgreSQL, Receptores de Datos, Ruteadores Logísticos, Trigger B.D y Stored Procedures PL-PGSQL<br>
  				<strong>Participación: </strong>Administrador de la Plataforma, configuración de equipos GPS y smartphone	, Coordinación de Personal Técnico,
  				Consultas de datos por Sentencias SQL, Despliegue del Servicio a Cliente nuevos, Testing a Requerimientos Nuevos, Seguimiento a más de 4000 Dispositivos
  				transmitiendo x minuto. Apoyo a procesos de preventa y soporte postventa</p>
  			</div>
  			<br>
  			<div class="col-md-12 wthree_services_grid_left">
  				<br>
  				<h3>DENTISALUD - CIUDAD DE MEXICO <span>UNAM</span> </h3>
  				<strong>URL:</strong> <a href="#">NO DISPONIBLE</a><br>
  				<strong>Galería Flickr:</strong> <a href="https://www.flickr.com/gp/150113091@N02/5TFa43" target="_blank"><span class="label label-info">Ir a Flickr</span></a>
  				<p><strong>Descripción: </strong>Website Comercial que brinda alterna mente un sistema de gestión médica, basado en
  				asignación de citas, creación de pacientes, relaciones directas entre la Historia Clínica, Consulta Médica y Cita en
  				Ejecución. Proyecto Académico tipo tesis realizado en Ciudad de México en el Segundo Semestre del 2016 para la Universidad
  				Nacional Autónoma de México – UNAM en modalidad de Intercambio con énfasis en Programación.<br>
  				<strong>Tecnologías: </strong>HTML5, CSS3, JSON, JQuery, PHP5, MySQL, SendMail, API Google Maps, API FPDF, Uso de
  				Bootstrap para Diseño Responsive.<br>
  				<strong>Participación: </strong>Este proyecto se realizó de forma Full Stack e Independiente se contactó a una entidad
  				odontológica la cual no tenía presencia la Internet, se identificó la necesidad critica de asignar y gestionar citas,
  				se procedió a un levantamiento de requerimientos, siguiendo   recomendaciones de las metodologías CMMI, ISO  9126 y
  				W3C se realizó un software web que solucionara esa necesidad y a través de un diseño atractivo brindar confianza en sus
  				servicios.<br><font color="#0ac876"><em>El intercambio realizado me permitió reforzar habilidades en programación,
  				incluir en el desarrollo el Modelo -  Vista -  Controlador (MVC) para mejorar su comprensión y mantenimiento.
  				Realizar el documento en las secciones de Planeación, Costos y Asignación de Recursos en el desarrollo me brindo una
  				serie de recomendaciones a tener en cuenta para evitar retrasos en el Cronograma de Trabajo.</em></font></p>
  			</div>
  			<br>
  			<div class="col-md-12 wthree_services_grid_left">
  				<br>
  				<h3>CLINICA ESTETICA DANIEL MAHECHA <span>EN CONSTRUCCION</span> </h3>
  				<strong>URL:</strong> <a href="#">NO DISPONIBLE</a><br>
  				<p>Construyendo un website comercial tipo Responsive que permita a esta clínica tener presencia en la Internet,
  				brindando la posibilidad de solicitar contacto a través de un formulario el cual envíe notificaciones vía Email.</p>
  			</div>
  				<div class="agile_inner_grids">
              <ul class="simplefilter">
                  <li class="active" data-filter="all">All</li>
                  <li data-filter="1">Category</li>
                  <li data-filter="2">Category1</li>
                  <li data-filter="3">Category2</li>
                  <li data-filter="4">Category3</li>
                  <li data-filter="5">Category4</li>
              </ul>
              <div class="filtr-container">
                  <div class="  filtr-item gallery-t" data-category="1, 5" data-sort="Busy streets">
                  <a href="images/1.jpg" class="b-link-stripe b-animate-go  thickbox">
  					<figure>
  					 <img src="images/1.jpg" class="img-responsive" alt=" " />	<figcaption>
  							<h3>CONSULTANCY</h3>
  						<p>
  								Add Description
  							</p>
  						</figcaption>
  					</figure>
  				</a>
                  </div>
                  <div class=" filtr-item" data-category="2, 5" data-sort="Luminous night">
                     <a href="images/2.jpg" class="b-link-stripe b-animate-go  thickbox">
  					<figure>
  					 <img src="images/2.jpg" class="img-responsive" alt=" " />	<figcaption>
  							<h3>CONSULTANCY</h3>
  							<p>
  								Add Description
  							</p>
  						</figcaption>
  					</figure>
  				</a>
                  </div>
                  <div class=" filtr-item" data-category="1, 4" data-sort="City wonders">
                      <a href="images/3.jpg" class="b-link-stripe b-animate-go  thickbox">
  					<figure>
  					 <img src="images/3.jpg" class="img-responsive" alt=" " />	<figcaption>
  							<h3>CONSULTANCY</h3>
  							<p>
  								Add Description
  							</p>
  						</figcaption>
  					</figure>
  				</a>
                  </div>
                  <div class="  filtr-item" data-category="3" data-sort="In production">
                     <a href="images/4.jpg" class="b-link-stripe b-animate-go  thickbox">
  					<figure>
  					 <img src="images/4.jpg" class="img-responsive" alt=" " />	<figcaption>
  							<h3>CONSULTANCY</h3>
  							<p>
  								Add Description
  							</p>
  						</figcaption>
  					</figure>
  				</a>
                  </div>
                  <div class=" filtr-item" data-category="3, 4" data-sort="Industrial site">
                    <a href="images/5.jpg" class="b-link-stripe b-animate-go  thickbox">
  					<figure>
  					 <img src="images/5.jpg" class="img-responsive" alt=" " />	<figcaption>
  							<h3>CONSULTANCY</h3>
  							<p>
  								Add Description
  							</p>
  						</figcaption>
  					</figure>
  				</a>
                  </div>
                  <div class=" filtr-item" data-category="2, 4" data-sort="Peaceful lake">
                      <a href="images/6.jpg" class="b-link-stripe b-animate-go  thickbox">
  					<figure>
  					 <img src="images/6.jpg" class="img-responsive" alt=" " />	<figcaption>
  							<h3>CONSULTANCY</h3>
  							<p>
  								Add Description
  							</p>
  						</figcaption>
  					</figure>
  				</a>
                  </div>
                  <div class="  filtr-item" data-category="1, 5" data-sort="City lights">
                     <a href="images/7.jpg" class="b-link-stripe b-animate-go  thickbox">
  					<figure>
  					 <img src="images/7.jpg" class="img-responsive" alt=" " />	<figcaption>
  							<h3>CONSULTANCY</h3>
  							<p>
  								Add Description
  							</p>
  						</figcaption>
  					</figure>
  				</a>
                  </div>
                  <div class=" filtr-item" data-category="2, 4" data-sort="Dreamhouse">
                     <a href="images/8.jpg" class="b-link-stripe b-animate-go  thickbox">
  					<figure>
  					 <img src="images/8.jpg" class="img-responsive" alt=" " />	<figcaption>
  							<h3>CONSULTANCY</h3>
  							<p>
  								Add Description
  							</p>
  						</figcaption>
  					</figure>
  				</a>
                  </div>
  				<div class=" filtr-item" data-category="2, 4" data-sort="Dreamhouse">
                    <a href="images/9.jpg" class="b-link-stripe b-animate-go  thickbox">
  					<figure>
  					 <img src="images/9.jpg" class="img-responsive" alt=" " />	<figcaption>
  							<h3>CONSULTANCY</h3>
  							<p>
  								Add Description
  							</p>
  						</figcaption>
  					</figure>
  				</a>
              </div>
         <div class="clearfix"> </div>
  			</div>
  		</div>
  	</div>
  </div>
<!-- //main -->

<!-- js -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!--gallery-->
 <script src="js/jquery.filterizr.js"></script>
 <script src="js/controls.js"></script>
 <!-- Kick off Filterizr -->
 <script type="text/javascript">
     $(function() {
         //Initialize filterizr with default options
         $('.filtr-container').filterizr();
     });
 </script>
<!---->
<script src="js/jquery.chocolat.js"></script>
 <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
 <!--light-box-files -->
 <script type="text/javascript">
 $(function() {
   $('.filtr-item a').Chocolat();
 });
 </script>
<!--//gallery-->
 <!-- //js -->
@endsection
