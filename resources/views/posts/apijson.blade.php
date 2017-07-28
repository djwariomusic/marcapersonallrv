@extends('layouts.app2')

@section('contenido')
<!--/ banner -->
  <div class="banner1">
  		<div class="w3_agileits_service_banner_info">
  			<h2>API JSON</h2>
  		</div>
  	</div>
<!--/ banner -->

	<div class="inner_main_agile_section">
		<div class="container">
		<h6>Desarrollo Web a la Medida</h6>
		<h3 class="w3l_header w3_agileits_header">Respuesta <span class="fixed_w3">WebService</span></h3>
		<p class="sub_para_agile two">Api JSON</p>
    			<div class="agile_inner_grids">
    				<div class="col-md-12 w3_agileits_about2_grid_left">
              <p>Respuesta a traves de JSON. Listado de Post's publicados por Autor del Sitio.</p><br>
              <h3><i class="fa fa-file-code-o" aria-hidden="true"></i> <a href="{{url('apijson/posts/apirest')}}" target="_blank"><span class="label label-success"> Ver Respuesta JSON</span></a></h3>
            </div>
				<div class="clearfix"><br> </div>
		</div>
	</div>
</div>

<!-- js -->
<script type="text/javascript" src="{{url('js/jquery-2.1.4.min.js')}}"></script>

@endsection
