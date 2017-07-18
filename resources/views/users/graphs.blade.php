@extends('layouts.app2')

@section('contenido')
<!--/ banner -->
  <div class="banner1">
  		<div class="w3_agileits_service_banner_info">
  			<h2>GRAFICOS</h2>
  		</div>
  	</div>
<!--/ banner -->

	<div class="inner_main_agile_section">
		<div class="container">
		<h6>Uso de ChartJS</h6>
		<h3 class="w3l_header w3_agileits_header">Graficos <span class="fixed_w3">Dinamicos</span></h3>


    			<div class="agile_inner_grids">
    				<div class="col-md-12 w3_agileits_about2_grid_left">
    					<p>La libreria Chart.js es una de las grandes bibliotecas de JavaScript en línea,
                la cual ayuda a plasmar datos usando el elemento canvas de HTML5  para dibujar gráficos y tablas.</p><br>

                <script src="/js/Chart.min.js"></script>
                <div class="clearfix">></div>
                <div class="chart-container" style="width:70%;">
                  <p class="sub_para_agile two">Grafico de Numero de Posts los Ultimos Años</p>
                <canvas id="myChart"></canvas>
                </div>
                <div class="clearfix"></div>
                <script>
                var ctx = document.getElementById("myChart").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["2017", "2016", "2015", "2014", "2013", "2012"],
                        datasets: [{
                            label: '# de Post por Año',
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
                <div class="clearfix"></div>
                <div class="chart-container" style="width:70%;">
                  <p class="sub_para_agile two">Mis Post los Ultimos Meses</p>
                <canvas id="chartjs-0"></canvas>
                </div>
                <div class="clearfix"></div>
                    <script>
                    new Chart(
                      document.getElementById("chartjs-0"),
                      {"type":"line","data":
                      {"labels":["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio"],
                      "datasets":[{"label":"Mis # de Posts",
                      "data":[{{$dataEnero17}},{{$dataFebrero17}},{{$dataMarzo17}},{{$dataAbril17}},{{$dataMayo17}},{{$dataJunio17}},{{$dataJulio17}}],
                      "fill":false,
                      "borderColor":"rgb(75, 192, 192)",
                      "lineTension":0.1}]},
                      "options":{}});
                    </script>
                <div class="clearfix"></div>
                <div class="chart-container" style="width:70%;">
                  <p class="sub_para_agile two">Top 5 de Usuarios con mas Posts</p>
                <canvas id="chartjs-4"></canvas>
                </div>
                <div class="clearfix"></div>
                  <script>
                  new Chart(document.getElementById("chartjs-4"),
                  {"type":"doughnut","data":

                  {"labels":["{{$querys[0]->name}}","{{$querys[1]->name}}","{{$querys[2]->name}}","{{$querys[3]->name}}","{{$querys[4]->name}}"],
                  "datasets":[{"label":"Mis # de Posts",
                  "data":[{{$querys[0]->count}},{{$querys[1]->count}},{{$querys[2]->count}},{{$querys[3]->count}},{{$querys[4]->count}}],
                  "backgroundColor":[
                    "rgb(255, 99, 132)",
                    "rgb(54, 162, 235)",
                    "rgb(255, 205, 86)",
                    'rgb(75, 192, 192)',
                    'rgb(153, 102, 255)'
                                    ]
                                }],
                  }
                  }
                  );
                  </script>
                </script>
                <div class="clearfix"></div>
                <div class="chart-container" style="width:70%;">
                  <p class="sub_para_agile two">Grafica de Red</p>
                <canvas id="chartjs-3"></canvas>
                </div>
                <div class="clearfix"></div>
                    <script>
                    new Chart(document.getElementById("chartjs-3"),
                    {"type":"radar","data":
                    {"labels":["Curiosidad","Claridad","Lectura","Detallista","Aprendizaje","Pasión","Adaptabilidad"],
                    "datasets":[{"label":"Grafica de Habilidades","data":[80,85,68,87,78,95,65],
                    "fill":true,
                    "backgroundColor":
                    "rgba(255, 99, 132, 0.2)",
                    "borderColor":"rgb(255, 99, 132)",
                    "pointBackgroundColor":"rgb(255, 99, 132)",
                    "pointBorderColor":"#fff","pointHoverBackgroundColor":
                    "#fff","pointHoverBorderColor":"rgb(255, 99, 132)"}
                    ]},
                    "options":{"elements":{"line":{"tension":0,"borderWidth":3}}}});</script>

                </div>
    				</div>
				<div class="clearfix"><br> </div>
		</div>
	</div>
<!-- js -->
<script type="text/javascript" src="{{url('js/jquery-2.1.4.min.js')}}"></script>

@endsection
