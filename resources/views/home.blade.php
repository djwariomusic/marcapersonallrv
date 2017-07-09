@extends('layouts.app2')

@section('barnav')
  <li><a href="/" class="effect-3">Inicio</a></li>
  <li><a href="/servicios" class="effect-3">Servicios</a></li>
  <li><a href="/proyectos" class="effect-3">Proyectos</a></li>
  <li><a href="/blog" class="effect-3">Blog</a></li>
  <li><a href="/contacto" class="effect-3">Contacto</a></li>
@endsection

@section('contenido')
<!--/ banner -->
  <div class="banner1">
  		<div class="w3_agileits_service_banner_info">
  			<h2>HOME ESTAS LOGEADO </h2>
  		</div>
  	</div>
<!--/ banner -->

<!-- /contact -->
<div class="inner_main_agile_section">
	<div class="container">
  		<h3 class="w3l_header w3_agileits_header"> Enviame un <span>Mensaje</span></h3>
			<p class="sub_para_agile two">No dude en contactarme, siempre dispuesto ayudarle.</p>
			 <div class="contact-form agile_inner_grids">
				<form action="#" method="post">
					<div class="fields-grid">
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="Full Name" required="">
							<label>Nombre Completo</label>
							<span></span>
						</div>
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="Phone" required="">
							<label>Telefono o Celular</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="email" name="Email" required="">
							<label>Email</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="text" name="Subject" required="">
							<label>Asunto</label>
							<span></span>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="styled-input textarea-grid">
						<textarea name="Message" required=""></textarea>
						<label>Mensaje</label>
						<span></span>
					</div>
					<input type="submit" value="ENVIAR">
				</form>
			</div>
    </div>
</div>
    <div class="clearfix"> </div>
          
<!!-- links -->
      <div class="stats2">
          <div class="inner_w3l_agile_grids">
          <br>
          <h3 class="w3l_header w3_agileits_header"> Encuentrame en <span>Redes</span></h3>
          <div class="col-md-4 w3layouts_stats_left2 w3_counter_grid">
             <i class="fa fa-wordpress" aria-hidden="true"></i>
             <h3><a href="https://edwinbeltrandev.wordpress.com/" target="_blank"><br>Publicaciones</a></h3>
          </div>
          <div class="col-md-4 w3layouts_stats_left2 w3_counter_grid1">
             <i class="fa fa-linkedin-square" aria-hidden="true"></i>
             <h3><a href="https://www.linkedin.com/in/edwin-beltran-80b20641/" target="_blank"><br>Contactos</a></h3>
          </div>
          <div class="col-md-4 w3layouts_stats_left2 w3_counter_grid2">
            <i class="fa fa-trophy" aria-hidden="true"></i>
            <h3><a href="https://www.hackerrank.com/mario_edwin" target="_blank"><br>Retos Hackerrank</a></h3>
          </div>
          <div class="clearfix"> </div>
          </div>
      </div>
<!!--//links-->
<!-- //contact -->

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

@endsection
