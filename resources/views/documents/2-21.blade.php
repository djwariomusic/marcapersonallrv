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
  <h3 class="w3l_header w3_agileits_header">Documentación <span class="fixed_w3">Etapa Diseño</span></h3>
  <p class="sub_para_agile two">Balsamiq Mockaps</p>
        <div class="agile_inner_grids">
          <div class="col-md-12 wthree_services_grid_left">
    				<br>
    				<h3><span>PROTOTIPOS ESTATICOS</span> </h3>
            <p>Considero que todo desarrollo comienza con una buena dimensión del esquema y funcionalidades
              que contara nuestro proyecto, aunque estas no son versiones definitivas si nos permite definir
              prototipos en comun acuerdo entre el desarrollador y el usuario contratante. <br>
              Balsamiq es una gran herramienta que nos permite definir bocetos de como visualizaremos los
              contenido que deseamos publicar. Existen conceptos de Maquetación Web el cual presenta
              opiniones dividas ya que algunos proponen diseños innovadores mientras otros familiarizan al usuario
              con una maquetacion estandar que permite orientar al usuario por diferentes contenidos, ya que la
              navegación es extensa y requiere que el usuario pueda ubicarse facilmente.
            </p>
            <p class="sub_para_agile two">Maquetación Estandar HTML5</p>
            <img class="img-thumbnail" src="{{url('/images/documents/html5mockap.jpg')}}">
            <br><br>
          </div>

          <div class="contact-form agile_inner_grids">
            <span>A continuación encontrara una lista donde podra visualizar los diferentes Mockaps realizados.</span>
              <select name="seleccion" id="seleccion" onchange="dibujoPorCambio();" placeholder="Seleccionar">
              <option value="1" selected="selected">Index</option>
              <option value="2">Servicios</option>
              <option value="3">Proyectos</option>
              <option value="4">Blog</option>
              <option value="5">Contacto</option>
            </select>
          </div>
          <br>
          <center>
            <input type="hidden" value="{{url('/')}}" id="url">
            <img class="img-thumbnail" id='mockap' src="{{url('images/documents/index.png')}}">
          </center>
      <div class="clearfix"><br> </div>
    			</div>

    </div>
  </div>
</div>

<script type="text/javascript" src="{{url('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{url('js/mockaps.js')}}"></script>
@endsection
