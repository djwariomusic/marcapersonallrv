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
		<h3 class="w3l_header w3_agileits_header">Documentación <span class="fixed_w3">Marca Personal</span></h3>
		<p class="sub_para_agile two">Descarga de Archivos PDF</p>

    			<div class="agile_inner_grids">

    				<div class="col-md-12 w3_agileits_about2_grid_left">
    					<p>A continuación encontrara un serie de contenidos que nos permitiran definir el ciclo de vida del software
                (Marca Personal), desde información de analisis y diseño, diagramación UML, Mockaps, Desarrollo, Testing e Implementación.
                Con el fin de ser una guia para la creación de Websites de alto impacto, a traves del uso de diferentes herramientas, que
                proporciona los lenguajes como HTML5, CSS3, PHP7, Jquery, JavaScript consolidados en el framework Laravel 5 haciendo un producto
                de alta calidad.
              </p><br>
    					<ul>
    						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Analisis</li>
    						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Diseño</li>
    						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Desarrollo</li>
    						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Testing</li>
                <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Implementación</li>
    					</ul>
    				</div>
            <div class="contact-form agile_inner_grids">
              <select name="seleccion" id="seleccion" onchange="dibujoPorCambio();">
                <option value="1" selected="selected">Index</option>
                <option value="2">Servicios</option>
                <option value="3">Proyectos</option>
                <option value="4">Blog</option>
                <option value="5">Contacto</option>
              </select>
            </div>
            <center>
              <img class="img-thumbnail" id='mockap' src="{{URL('images/mockaps/index.png')}}" style="display:none;">
            </center>
				<div class="clearfix"><br> </div>


		</div>
	</div>
</div>
<!-- js -->
<script type="text/javascript" src="{{url('js/jquery-2.1.4.min.js')}}"></script>

<script src="{{url('js/mockaps.js')}}"></script>

@endsection
