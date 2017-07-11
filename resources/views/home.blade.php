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

<center>
<div class="contact-form agile_inner_grids">
  <a href="{{url('/edit-post')}}"><input type="button" value="Crear Post"></a>
  <input type="button" value="MENU2">
	<input type="button" value="MENU3">
	<input type="button" value="MENU4">
	<input type="button" value="MENU5">
</div>
</center>
@include('posts.lastpost')

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

@endsection
