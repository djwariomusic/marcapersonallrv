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
        <div class="bs-docs-example">
            <table class="table table-striped">
            <thead>
              <tr>
                <th colspan="4" scope="col"><h3>TABLA DE DOCUMENTACION PROYECTO MARCA PERSONAL</h3> </th>
              </tr>
              <tr>
                <th colspan="4" scope="row"><h4>1. ETAPA DE ANALISIS</h4></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>
                <div align="left">1.1 Introduccion y Objetivos </div>    </th>
                <td><h3><a href="{{url('/documents/html/1/11')}}"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="{{url('/documents/pdf/1/11/1')}}"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="{{url('/documents/pdf/1/11/2')}}"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">1.2 Lista de Requermientos</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">1.3 Presupuesto</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">1.4 Propuesta Técnica</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th colspan="4" scope="row"><h4>2. DISEÑO</h4></th>
                </tr>
              <tr>
                <th><div align="left">2.1 Prototipos Estaticos - Mockaps</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">2.2 Mapa General de Procesos</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">2.3 Modelo Entidad Relación</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">2.4 Casos de Uso</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">2.5 Diagramas de Flujo</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">2.6 Diccionario de Datos</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">2.7 Infraestructura</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">2.8 Arquitectura del Sitio</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">2.8 Planeación Detallada</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">2.9 Recursos y Conocimientos</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">2.10 Testing Analisis y Complejidad del Proyecto</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th colspan="4" scope="row"><h4>3. DESARROLLO</h4></th>
                </tr>
              <tr>
                <th><div align="left">3.1 Componentes Fisicos</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">3.2 Componentes Logicos</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">3.3 Suite Desarrollo</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">3.4 Componentes de Laravel 5</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">3.5 Motor de Base de Datos PostgreSQL</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">3.6 Sistema de Versionamiento GIT y Github</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">3.7 Componentes Adicionales ChartJS, Jquery, API Google Maps y otros</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">3.8 Pantallas Finales</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th colspan="4" scope="row"><h4>4. TESTING</h4></th>
                </tr>
              <tr>
                <th><div align="left">4.1 Estandares de Calidad en Software</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">4.2 Metricas de Calidad</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">4.3 Testing Caja Blanca Complejidad Ciclomatica</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">4.4 Testing Caja Negra Pruebas Unitarias</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">4.5 Testing Caja Negra Pruebas Integración</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">4.6 Testing Caja Negra Pruebas Sistema</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">4.7 Herramientas de Automatización Testing</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th colspan="4" scope="row"><h4>5. IMPLEMENTACIÓN DEPLOY</h4></th>
              </tr>
              <tr>
                <th><div align="left">5.1 Infraestructura de Producción</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">5.2 Documentación Técnica</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th><div align="left">5.3 Uso de Contenedores de Software</div></th>
                <td><h3><a href="#"><span class="label label-warning">Ver HTML</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Ver PDF</span></h3></a></td>
                <td><h3><a href="#"><span class="label label-warning">Descargar PDF</span></h3></a></td>
              </tr>
              <tr>
                <th colspan="4" scope="row"><h4>ANEXOS</h4></th>
              </tr>
              <tr>
                <th>&nbsp;</th>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            <tbody>
            </table>
          </div>


		</div>
	</div>
</div>

<!-- js -->
<script type="text/javascript" src="{{url('js/jquery-2.1.4.min.js')}}"></script>

<script src="{{url('js/mockaps.js')}}"></script>

@endsection
