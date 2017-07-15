@extends('layouts.app2')

@section('contenido')
<!--/ banner -->
  <div class="banner1">
  		<div class="w3_agileits_service_banner_info">
  			<h2>POSTS DE:</h2>
  		</div>
  	</div>
<!--/ banner -->

	<div class="inner_main_agile_section">
		<div class="container">
		<h6>Desarrollo Web a la Medida</h6>
		<h3 class="w3l_header w3_agileits_header">Perfil <span class="fixed_w3">Profesional</span></h3>
		<p class="sub_para_agile two">Descripción Competencias Laborales</p>

			<div class="agile_inner_grids">
				<div class="col-md-6 w3_agileits_about_grid_right">

							  <div id="chart">
							  <ul id="numbers">
								<li><span>100%</span></li>
								<li><span>90%</span></li>
								<li><span>80%</span></li>
								<li><span>70%</span></li>
								<li><span>60%</span></li>
								<li><span>50%</span></li>
								<li><span>40%</span></li>
								<li><span>30%</span></li>
								<li><span>20%</span></li>
								<li><span>10%</span></li>
								<li><span>0%</span></li>
							  </ul>
							  <ul id="bars">
								<li><div data-percentage="{{$posts2017}}" class="bar"></div><span>2017</span></li>
								<li><div data-percentage="{{$posts2016}}" class="bar"></div><span>2016</span></li>
								<li><div data-percentage="{{$posts2015}}" class="bar"></div><span>2015</span></li>
								<li><div data-percentage="{{$posts2014}}" class="bar"></div><span>2014</span></li>
								<li><div data-percentage="{{$posts2013}}" class="bar"></div><span>2013</span></li>
								<li><div data-percentage="{{$posts2012}}" class="bar"></div><span>2012</span></li>
							  </ul>
							</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

@endsection
