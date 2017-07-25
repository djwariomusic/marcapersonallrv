@extends('layouts.app2')

@section('contenido')
<!--/ banner -->
  <div class="banner1">
  		<div class="w3_agileits_service_banner_info">
  			<h2>DOCUMENTACIÓN</h2>
  		</div>
  	</div>
<!--/ banner -->

	<div class="inner_main_agile_section">
		<div class="container">
		<h6>Desarrollo Web a la Medida</h6>
		<h3 class="w3l_header w3_agileits_header">Documentación <span class="fixed_w3">Etapa Analisis</span></h3>
			<div class="agile_inner_grids">
        <div class="col-md-12 wthree_services_grid_left">
            <br>
            <h3><span>INTRODUCCION</span></h3>
            <p align="justify">En este documento el lector encontrara una guía completa sobre todas las etapas del ciclo de vida de un
            desarrollo de software específicamente para la creacion de un Website de Marca Personal, pasara por la etapa
            de análisis se identificara las necesidades para dar a lugar a una lista de requerimientos que permitirá
            establecer una planeación. Esta información inicial permitirá crear un presupuesto estimado.
            En el Diseño se observarán prototipos estáticos, modelos de entidad y relación, casos de uso con diagramas
            de flujo de los procesos o rutinas presentes, se define una lista de actividades que harán parte de una
            planificación detallada mencionando los recursos humanos con los conocimientos necesarios para su desarrollo.<br>
            Pasamos al Desarrollo proceso complejo y creativo donde se realizarán las líneas de código necesarias,
            con sus correspondientes recursos físicos y lógicos para la creación de un sitio web.<br>
            De igual manera se menciona su arquitectura física y lógica necesaria para el funcionamiento.
            Se brinda códigos SQL y algunas explicaciones sobre HTML5, JavaScript o Laravel 5 utilizadas durante todo
            el desarrollo web.<br>
            Finalmente, en la implementación se sugiere el uso de alojamiento en Apps Engine by Google, se entrega
            documentación técnica sobre las tecnologías web y especificaciones técnicas. <br>
            Este documento está dirigido a profesionales o semiprofesionales de informática o desarrollo web quien tomaran
            este contenido para los fines que consideren necesarios.</p>
          </div>
          <br>
          <br>
          <h3><span>OBJETIVOS</span></h3>
          <h4><span>OBJETIVO GENERAL</span></h4>
          <div class="col-md-12 w3_agileits_about2_grid_left">
          <ul>
            <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Generar todo el proceso de ingeniería de software, desarrollando un sistema de información web que cumpla
            todas las expectativas de nuestro cliente prospecto, tanto en temas de apariencia, funcionalidad, seguridad y
            rendimiento.
            </li>
          </ul>
          </div>
          <h4><span>OBJETIVOS ESPECIFICOS</span></h4>
          <div class="col-md-12 w3_agileits_about2_grid_left">
          <ul>
            <li><i class="fa fa-check-square-o" ></i>Dar importancia a la etapa de análisis y diseño como pieza fundamental del desarrollo e implementación.</li>
            <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Describir de la forma más detallada todos los aspectos relevantes en el ciclo de vida de creación de software.</li>
            <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Utilizar el mayor número de tecnologías disponibles para dar una solución sencilla y robusta que cumpla todos los criterios de evaluación.</li>
            <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Establecer un presupuesto estimado, que permita realizar una propuesta económica acorde a las gastos y ganancias esperadas.</li>
            <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Diseñar una planeación detallada que sea acorde a la realidad al proyecto planteado.</li>
          </ul>
          </div>
        <br>
		</div>
	</div>
</div>

<!-- js -->
<script type="text/javascript" src="{{url('js/jquery-2.1.4.min.js')}}"></script>

<script src="{{url('js/mockaps.js')}}"></script>

@endsection
