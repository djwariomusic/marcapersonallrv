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
                    <ul class="simplefilter">
                        <li class="active" data-filter="all">Todos</li>
                        <li data-filter="1">Mincultura</li>
                        <li data-filter="2">Sitimovil</li>
                        <li data-filter="3">Dentisalud</li>
                        <li data-filter="4">Marca Personal</li>
                        <li data-filter="5">GIS</li>
                    </ul>
                </div>
                    <div class="filtr-container">
                        <div class="filtr-item gallery-t" data-category="1, 5" data-sort="Busy streets">
                          <a href="{{url('images/mapacultural.jpg')}}" class="b-link-stripe b-animate-go  thickbox">
                  					<figure>
                  					 <img src="{{url('images/mapacultural1.jpg')}}" class="img-responsive" alt=" " />	<figcaption>
                               <h3>CONSULTAR</h3>
                               <p>
                                 Ampliar Imagen
                               </p>
                  						</figcaption>
                  					</figure>
                  				</a>
                        </div>
                        <div class=" filtr-item" data-category="1, 5" data-sort="Luminous night">
                           <a href="{{url('images/mapacultural2.jpg')}}" class="b-link-stripe b-animate-go  thickbox">
                  					<figure>
                  					 <img src="{{url('images/mapacultural2.jpg')}}" class="img-responsive" alt=" " />	<figcaption>
                               <h3>CONSULTAR</h3>
                               <p>
                                 Ampliar Imagen
                               </p>
                  						</figcaption>
                  					</figure>
                  				</a>
                        </div>
                        <div class=" filtr-item" data-category="2, 5" data-sort="City wonders">
                            <a href="{{url('images/sitimovil1.jpg')}}" class="b-link-stripe b-animate-go  thickbox">
                    					<figure>
                    					 <img src="{{url('images/sitimovil1.jpg')}}" class="img-responsive" alt=" " />	<figcaption>
                                 <h3>CONSULTAR</h3>
                                 <p>
                                   Ampliar Imagen
                                 </p>
                    						</figcaption>
                    					</figure>
                    				</a>
                        </div>
                        <div class="  filtr-item" data-category="2, 5" data-sort="In production">
                           <a href="{{url('images/sitimovil2.jpg')}}" class="b-link-stripe b-animate-go  thickbox">
                    					<figure>
                    					 <img src="{{url('images/sitimovil2.jpg')}}" class="img-responsive" alt=" " />	<figcaption>
                                 <h3>CONSULTAR</h3>
                                 <p>
                                   Ampliar Imagen
                                 </p>
                    						</figcaption>
                    					</figure>
                    				</a>
                        </div>
                        <div class=" filtr-item" data-category="3" data-sort="Industrial site">
                          <a href="{{url('images/dentisalud1.jpg')}}" class="b-link-stripe b-animate-go  thickbox">
                  					<figure>
                  					 <img src="{{url('images/dentisalud1.jpg')}}" class="img-responsive" alt=" " />	<figcaption>
                               <h3>CONSULTAR</h3>
                               <p>
                                 Ampliar Imagen
                               </p>
                  						</figcaption>
                  					</figure>
                  				</a>
                        </div>
                        <div class=" filtr-item" data-category="3" data-sort="Peaceful lake">
                            <a href="{{url('images/dentisalud2.jpg')}}" class="b-link-stripe b-animate-go  thickbox">
                    					<figure>
                    					 <img src="{{url('images/dentisalud2.jpg')}}" class="img-responsive" alt=" " />	<figcaption>
                                 <h3>CONSULTAR</h3>
                                 <p>
                                   Ampliar Imagen
                                 </p>
                    						</figcaption>
                    					</figure>
                    				</a>
                        </div>
                        <div class="  filtr-item" data-category="3" data-sort="City lights">
                           <a href="{{url('images/dentisalud3.jpg')}}" class="b-link-stripe b-animate-go  thickbox">
                    					<figure>
                    					 <img src="{{url('images/dentisalud3.jpg')}}" class="img-responsive" alt=" " />	<figcaption>
                                 <h3>CONSULTAR</h3>
                                 <p>
                                   Ampliar Imagen
                                 </p>
                    						</figcaption>
                    					</figure>
                    				</a>
                        </div>
                        <div class=" filtr-item" data-category="3" data-sort="Dreamhouse">
                           <a href="{{url('images/dentisalud4.jpg')}}" class="b-link-stripe b-animate-go  thickbox">
                    					<figure>
                    					 <img src="{{url('images/dentisalud4.jpg')}}" class="img-responsive" alt=" " />	<figcaption>
                    							<h3>CONSULTAR</h3>
                    							<p>
                    								Ampliar Imagen
                    							</p>
                    						</figcaption>
                    					</figure>
                    				</a>
                        </div>
        				        <div class=" filtr-item" data-category="4" data-sort="Dreamhouse">
                          <a href="{{url('images/marcapersonal1.jpg')}}" class="b-link-stripe b-animate-go  thickbox">
                  					<figure>
                  					 <img src="{{url('images/marcapersonal1.jpg')}}" class="img-responsive" alt=" " />	<figcaption>
                  							<h3>CONSULTAR</h3>
                  							<p>
                  								Ampliar Imagen
                  							</p>
                  						</figcaption>
                  					</figure>
                  				</a>
                        </div>
                       <div class="clearfix"> </div>
        			</div>

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
