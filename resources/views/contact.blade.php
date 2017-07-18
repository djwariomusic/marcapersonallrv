@extends('layouts.app')
<!-- aca le estoy indicando a modo blade que este se archivo.php se extiende y utiliza mi plantilla-->
@section('barnav')
  <li><a href="/" class="effect-3">Inicio</a></li>
  <li><a href="/servicios" class="effect-3">Servicios</a></li>
  <li><a href="/proyectos" class="effect-3">Proyectos</a></li>
  <li><a href="/blog" class="effect-3">Blog</a></li>
  <li class="active"><a href="/contacto" class="effect-3">Contacto</a></li>
@endsection
@section('contenido')
<!--/ banner -->
  <div class="banner1">
  		<div class="w3_agileits_service_banner_info">
  			<h2>Contactame </h2>
  		</div>
  	</div>
<!--/ banner -->

<!-- /contact -->
<div class="inner_main_agile_section">
	<div class="container">
  		<h3 class="w3l_header w3_agileits_header"> Enviame un <span>Mensaje</span></h3>
			<p class="sub_para_agile two">No dude en contactarme, siempre dispuesto ayudarle.</p>
			 <div class="contact-form agile_inner_grids">
				<form action="/contactar" method="post">
          {{csrf_field()}}
					<div class="fields-grid">
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="name" required="">
							<label>Nombre Completo</label>
							<span></span>
						</div>
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="telephone" required="">
							<label>Telefono o Celular</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="email" name="email" required="">
							<label>Email</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="text" name="description" required="">
							<label>Asunto</label>
							<span></span>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="styled-input textarea-grid">
						<textarea name="message" required=""></textarea>
						<label>Mensaje</label>
						<span></span>
					</div>
					<input type="submit" value="ENVIAR">
				</form>

        @if($alerts==null)
          <input type="hidden" data-toggle="modal"  data-target="#myModalMsj"  value="Vacio">
        @elseif ($alerts=='Mensaje Confirmado')
          <script language="JavaScript">
            function load() {
              document.getElementById("buttonmsj").click();
            }
            window.onload = load;
          </script>
          <input type="hidden" data-toggle="modal" id="buttonmsj"  data-target="#myModalMsj"  value="{{$alerts}}">
        @endif
        <div>Icons made by <a href="http://www.flaticon.com/authors/picol" title="Picol">Picol</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
			</div>
    </div>
</div>
    <div class="clearfix"> </div>
            <!-- map -->
				<h3 class="w3l_header w3_agileits_header"> Ubicame en <span>Maps</span></h3>
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38714.710590!2d-74.115707!3d4.710590!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1497241987900"  allowfullscreen></iframe>
				</div>
			<!-- //map -->
<!!-- links -->
      <div class="stats2">
          <div class="inner_w3l_agile_grids">
          <br>
          <h3 class="w3l_header w3_agileits_header"> Encuentrame en <span>Redes</span></h3>
          <div class="col-md-3 w3layouts_stats_left2 w3_counter_grid">
             <i class="fa fa-wordpress" aria-hidden="true"></i>
             <h3><a href="https://edwinbeltrandev.wordpress.com/" target="_blank"><br>Publicaciones</a></h3>
          </div>
          <div class="col-md-3 w3layouts_stats_left2 w3_counter_grid1">
             <i class="fa fa-linkedin-square" aria-hidden="true"></i>
             <h3><a href="https://www.linkedin.com/in/edwin-beltran-80b20641/" target="_blank"><br>Contactos</a></h3>
          </div>
          <div class="col-md-3 w3layouts_stats_left2 w3_counter_grid2">
            <i class="fa fa-trophy" aria-hidden="true"></i>
            <h3><a href="https://www.hackerrank.com/mario_edwin" target="_blank"><br>Retos Hackerrank</a></h3>
          </div>
          <div class="col-md-3 w3layouts_stats_left2 w3_counter_grid2">
            <i class="fa fa-github-square " aria-hidden="true"></i>
            <h3><a href="https://www.hackerrank.com/mario_edwin" target="_blank"><br>Git-hub</a></h3>
          </div>
          <div class="clearfix"> </div>
          </div>
      </div>
<!!--//links-->
<!-- //contact -->

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
@endsection
