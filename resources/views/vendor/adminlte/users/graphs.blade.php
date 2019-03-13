@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Graficos
@endsection

@section('contentheader_title')
  <i class="fa fa-bar-chart-o" style="color:#00ba66;"></i>	Gráficos
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">ChartJS</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						ChartJS permite generar innumerables tipos de Gráficos, los cuales son completamente Adaptativos e interactivos
						al movimiento del cursos, este tipo de herramientas son altamente personalizables lo cual nos permite recrear datos
						en tiempo real.
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
			<div class="col-md-12 wthree_services_grid_left">
					<div class="alert alert-success" role="alert">
            <div class="page-header">
      				<h1>Gráficos Dinamicos</h1>
      			</div>
						<p>Aca el usuario podra observar gráficos que estan integrados con la Base de Datos, el cual permite observar
						datos de la gestión actual sobre los Post's</p>
					</div>
          <section class="col-md-9">

						<div class="chart-container" style="width:100%;">
							<h4>Top 5 de Usuarios con mas Post's</h4>
							<canvas id="chartjs-4"></canvas><br>
						</div>

						<div class="chart-container" style="width:100%;">
						  <h4>Gráfico de Numero de Post's los Últimos Años</h4>
						  <canvas id="myChart"></canvas><br>
						</div>

						<div class="chart-container" style="width:100%;">
						  <h4>Mis Post los Últimos Meses</h4>
						  <canvas id="chartjs-0"></canvas><br>
						</div>

						<div class="chart-container" style="width:100%;">
						  <h4>Gráfica de Red</h4>
						  <canvas id="chartjs-3"></canvas><br>
						</div>


          </section>
					{{-- Esta sección sera un bucle de Posts (Los listará todos)--}}
			  </div>
		</div>
	</div>


	@endsection
  @section('scripts')
      @include('adminlte::layouts.partials.scripts')
  		<script src="{{url('/js/Chart.min.js')}}"></script>
  		<script>
  		var ctx = document.getElementById("myChart").getContext('2d');
  		var myChart = new Chart(ctx, {
  		    type: 'bar',
  		    data: {
  		        labels: ["Marzo-19", "Febrero-19", "Enero-19", "Diciembre-18", "Noviembre-18", "Octubre-18"],
  		        datasets: [{
  		            label: '# de Post por Meses',
  		            data: [{{$posts2017}}, {{$posts2016}}, {{$posts2015}}, {{$posts2014}}, {{$posts2013}}, {{$posts2012}}],
  		            backgroundColor: [
  		                'rgba(255, 99, 132, 0.2)',
  		                'rgba(54, 162, 235, 0.2)',
  		                'rgba(255, 206, 86, 0.2)',
  		                'rgba(75, 192, 192, 0.2)',
  		                'rgba(153, 102, 255, 0.2)',
  		                'rgba(255, 159, 64, 0.2)'
  		            ],
  		            borderColor: [
  		                'rgba(255,99,132,1)',
  		                'rgba(54, 162, 235, 1)',
  		                'rgba(255, 206, 86, 1)',
  		                'rgba(75, 192, 192, 1)',
  		                'rgba(153, 102, 255, 1)',
  		                'rgba(255, 159, 64, 1)'
  		            ],
  		            borderWidth: 1
  		        }]
  		    },
  		    options: {
  		        scales: {
  		            yAxes: [{
  		                ticks: {
  		                    beginAtZero:true
  		                }
  		            }]
  		        }
  		    }
  		});
  		</script>

  		    <script>
  		      new Chart(document.getElementById("chartjs-0"),{
  		          "type":"line","data":{
  		            "labels":["Marzo-19","Febrero-19","Enero-19","Diciembre-18","Noviembre-18","Octubre-18","Septiembre-18"],
  		            "datasets":[{
  		              "label":"Mis # de Posts",
  		              "data":[{{$dataEnero17}},{{$dataFebrero17}},{{$dataMarzo17}},{{$dataAbril17}},{{$dataMayo17}},{{$dataJunio17}},{{$dataJulio17}}],
  		              "fill":false,
  		              "borderColor":"rgb(75, 192, 192)",
  		              "lineTension":0.1
  		            }]
  		          },
  		        "options":{}
  		      });
  		    </script>

  		  <script>
  		    new Chart(document.getElementById("chartjs-4"),{
  		      "type":"doughnut","data":{
  		        "labels":["{{$querys[0]->name}}","{{$querys[1]->name}}","{{$querys[2]->name}}","{{$querys[3]->name}}","{{$querys[4]->name}}"],
  		        "datasets":[{
  		          "label":"Mis # de Posts",
  		          "data":[{{$querys[0]->count}},{{$querys[1]->count}},{{$querys[2]->count}},{{$querys[3]->count}},{{$querys[4]->count}}],
  		          "backgroundColor":["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)",'rgb(75, 192, 192)','rgb(153, 102, 255)']
  		        }],
  		      }
  		    });
  		  </script>

  		    <script>
  		      new Chart(document.getElementById("chartjs-3"),{
  		        "type":"radar","data":{
  		          "labels":["Curiosidad","Claridad","Lectura","Detallista","Aprendizaje","Pasión","Adaptabilidad"],
  		          "datasets":[{
  		                      "label":"Grafica de Habilidades","data":[80,85,68,87,78,95,65],
  		                      "fill":true,
  		                      "backgroundColor":"rgba(255, 99, 132, 0.2)",
  		                      "borderColor":"rgb(255, 99, 132)",
  		                      "pointBackgroundColor":"rgb(255, 99, 132)",
  		                      "pointBorderColor":"#fff","pointHoverBackgroundColor":
  		                      "#fff","pointHoverBorderColor":"rgb(255, 99, 132)"
  		                      }]
  		        },
  		        "options":{
  		          "elements":{
  		            "line":{
  		              "tension":0,"borderWidth":3
  		             }
  		          }
  		        }
  		      });
  		    </script>
  @endsection
