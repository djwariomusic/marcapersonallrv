@extends('layouts.app')
<!-- aca le estoy indicando a modo blade que este se archivo.php se extiende y utiliza mi plantilla-->
@section('barnav')
  <li><a href="{{url('/')}}" class="effect-3">Inicio</a></li>
  <li><a href="{{url('/servicios')}}" class="effect-3">Servicios</a></li>
  <li class="active"><a href="{{url('/proyectos')}}" class="effect-3">Proyectos</a></li>
  <li><a href="{{url('/blog')}}" class="effect-3">Blog</a></li>
  <li><a href="{{url('/contacto')}}" class="effect-3">Contacto</a></li>
@endsection
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
  			<p class="sub_para_agile two">Algunos Proyectos Destacados</p>
        @forelse($projects as $project)
  			<div class="col-md-12 wthree_services_grid_left">
  				<br>

  				<h3 style="font-size: 1em;">{{ $project->name }} <span>{{ $project->enterprise }} </span> </h3>
          <?php if($project->url != 'NO DISPONIBLE') {echo '<strong>URL: </strong> <a href="'.$project->url.'" target="_blank">'.$project->url.'</a><br>'; }?>
  				<?php if($project->urlgaleria != 'NO DISPONIBLE') {echo '<strong>Galería Flickr:</strong> <a href="'.$project->urlgaleria.'" target="_blank"><span class="label label-info">Ir a Flickr</span></a>'; }?>
  				<p style="text-align: justify"><strong>Descripción: </strong>{{ $project->description }}<br>
  				<strong>Tecnologías: </strong>{{ $project->technology }}<br>
  				<strong>Participación: </strong>{{ $project->participation }}</p>
  			</div>
  			<br>
        @empty
  			<div class="col-md-12 wthree_services_grid_left">
  				<br>
  				<h3>No se encontrarón Proyectos Registrados</span> </h3>

  			</div>
  			<br>
        @endforelse

        @if(count($projects))
            <div class="mt-2 mx-auto">
            {{ $projects->links('pagination::bootstrap-4') }}<br><br>
            </div>
        @endif
      </div>
    </div>

        <!--/portfolio-->
        <div class="inner_main_agile_section">
          <div class="container">
        	<h3 class="w3l_header w3_agileits_header"> GALERIA DE <span>PROYECTOS</span></h3>
        				<div class="agile_inner_grids">
                    <ul class="simplefilter" style="text-align: left;">
                        <li class="active" data-filter="all" tyle="font-size: 0.6em;">Todos</li>
                        @forelse($projects2 as $project2)
                        <li data-filter="{{ $project2->idproject }}" style="font-size: 0.6em;">{{ $project2->name }}</li>
                        @empty
                        <li class="active" style="font-size: 0.6em;">No se encontraron Proyectos</li>
                        @endforelse

                    </ul>
                </div>
                    <div class="filtr-container">
                        @forelse($images as $image)
                        <div class="filtr-item gallery-t" data-category="{{ $image->idproject}}" data-sort="Busy streets">
                          <a href="{{ $image->path }}" class="b-link-stripe b-animate-go  thickbox">
                            <figure>
                             <img src="{{ $image->path }}" class="img-responsive" alt=" " />	<figcaption>
                               <h3>CONSULTAR</h3>
                               <p>
                                 Ampliar Imagen
                               </p>
                              </figcaption>
                            </figure>
                          </a>
                        </div>
                        @empty
                        <span style="font-size: 0.6em;">No se encontraron Proyectos</span>
                        @endforelse
                       <div class="clearfix"> </div>
        			      </div>

           </div>
        </div>

<!-- //main -->

<!-- js -->
<script type="text/javascript" src="{{url('js/jquery-2.1.4.min.js')}}"></script>
<!--gallery-->
 <script src="{{url('js/jquery.filterizr.js')}}"></script>
 <script src="{{url('js/controls.js')}}"></script>
 <!-- Kick off Filterizr -->
 <script type="text/javascript">
     $(function() {
         //Initialize filterizr with default options
         $('.filtr-container').filterizr();
     });
 </script>
<!---->
<script src="{{url('js/jquery.chocolat.js')}}"></script>
 <link rel="stylesheet" href="{{url('css/chocolat.css')}}" type="text/css" media="screen">
 <!--light-box-files -->
 <script type="text/javascript">
 $(function() {
   $('.filtr-item a').Chocolat();
 });
 </script>
<!--//gallery-->
 <!-- //js -->
@endsection
