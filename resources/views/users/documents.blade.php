@extends('layouts.app2')

@section('contenido')
<!--/ banner -->
  <div class="banner1">
  		<div class="w3_agileits_service_banner_info">
  			<h2>DOCUMENTACIÓN DESARROLLO WEB</h2>
  		</div>
  	</div>
<!--/ banner -->

	<div class="inner_main_agile_section">
		<div class="container">
		<h6>Desarrollo Web a la Medida</h6>
		<h3 class="w3l_header w3_agileits_header">Perfil <span class="fixed_w3">Profesional</span></h3>
		<p class="sub_para_agile two">Descripción Competencias Laborales</p>

    			<div class="agile_inner_grids">

    				<div class="col-md-12 w3_agileits_about2_grid_left">
    					<p>Profesional en Ingeniería de Sistemas. Especialista Base de Datos para Sistemas de Información Geográfica,
    						conocimientos en Desarrollo  de  Páginas  WEB  HTML5,  CSS3,  PHP,  JavaScript  y  diseño Responsive.
    						Experiencia en Coordinación de Soporte Técnico en desarrollo de Software y sistemas de rastreo o seguimiento GPS,
    						Sistemas de Información Geográfica, geolocalización, consultas SQL sobre diferentes motores de Base de Datos,
    						gestión de calidad con enfoque al desarrollo de Software.</p><br>
    					<ul>
    						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Ingeniero en Sistemas</li>
    						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Tecnologo en Sistemas</li>
    						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Especialista en Base de Datos</li>
    						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Desarrollador en Platzi</li>
    					</ul>
    				</div>
            <div class="contact-form agile_inner_grids">
              <select name="seleccion" id="seleccion">
                <option value="1" selected="selected">Index</option>
                <option value="2">Servicios</option>
                <option value="3">Proyectos</option>
                <option value="4">Blog</option>
                <option value="5">Contacto</option>
              </select>
              <input type="button" id="verImg" value="Ver Mockap">
            </div>
            <center>
              <img class="img-thumbnail" id='mockap' src="{{URL('images/mockaps/index.png')}}" style="display:none;">
            </center>
				<div class="clearfix"><br> </div>


		</div>
	</div>
<!-- js -->
<script type="text/javascript" src="{{url('js/jquery-2.1.4.min.js')}}"></script>

<script src="{{url('js/mockaps.js')}}"></script>

@endsection
