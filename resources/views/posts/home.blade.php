@extends('layouts.app2')

@section('contenido')
<!--/ banner -->
  <div class="banner1">
  		<div class="w3_agileits_service_banner_info">
  			<h2>DASHBOARD</h2>
  		</div>
  	</div>
<!--/ banner -->

<center>
<div class="contact-form agile_inner_grids">
  <a href="{{url('/edit-post')}}"><input type="button" value="Crear Post"></a>
  <a href="/home/{{Auth::user()->username}}"><input type="button" value="Mis Posts"></a>
	<a href="/home/{{Auth::user()->username}}/graphs"><input type="button" value="Grafica"></a>
	<a href="/documents"><input type="button" value="Documentación"></a>
	<input type="button" value="Datatables Jquery">
  <input type="button" value="GIS">
</div>

</center>

<form action="/searchUser" method="GET">
<div class="inner_main_agile_section">
    <div class="col-md-6">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Busqueda de Post por Username...">
          <span class="input-group-btn">
          <button class="btn btn-default" type="submit">Buscar</button>
          </span>
         </div>
     </div>
</div>
</form>


<article class="container">
  <div class="inner_main_agile_section">
	<div class="col-md-12 wthree_services_grid_left">
		<div class="well">
			<div class="page-header">
				<h1>Listado de Posts</h1>
			</div>
      <p>Desarrollo en Framework Laravel 5 PHP, componentes Laravel: Migrates, Controllers, Models, Routes, Factory, Seeds, Bootstrap. Sistema de Autenticación para la creación de posts, los cuales podrán ser editados o eliminados siempre y cuando sea su creador se encuentre logeado.
      Al dar click al creador de un post se podrán observar todos los posts relacionados a ese usuario creador. Los comentarios están asociados a los posts para su creación.</p>
		</div>
		{{-- Esta seccion sera un bucle de Posts (Los listará todos) --}}

		<section class="col-md-9">
			@forelse($posts as $post)
				<article class="post">
					<div class="page-header">
              @include('posts.lastpost')
      @empty
        <article class="post">
          <div class="page-header">
            <h3>No hay Mensajes</h3><br/>
          </div>
        </article>
        <div class="clearfix"><br></div>
      @endforelse

      @if(count($posts))
          <div class="mt-2 mx-auto">
          {{ $posts->links('pagination::bootstrap-4') }}
          </div>
      @endif
    </section>
      		{{-- END Esta seccion sera un bucle de Posts --}}
          <div class="col-md-3">
            <img src="{{url('/images/giphy.gif')}}" width="256" height="256">
          </div>
          <div class="col-md-3">
            <div class="col-md-3">
              <i class="fa fa-phone" aria-hidden="true"></i>
            </div>
            <p>+(57) 301 2388303</p>
          </div>
          <div class="clearfix"> </div>
  </div>
</div>
</article>

@if(session('alerts')==null)
  <input type="hidden" data-toggle="modal"  data-target="#myModalPost"  value="">
@elseif (session('alerts')=='Post guardado')
  <script language="JavaScript">
    function load() {
      document.getElementById("buttonpost").click();
    }
    window.onload = load;
  </script>
  {{$alerts=NULL}}
  <input type="hidden" data-toggle="modal"  id="buttonpost" data-target="#myModalPost">
@elseif (session('alerts')=='Post Eliminado')
  <script language="JavaScript">
    function load() {
      document.getElementById("buttonpost").click();
    }
    window.onload = load;
  </script>
  <input type="hidden" data-toggle="modal"  id="buttonpost" data-target="#myModalPostDel">
@endif

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

@endsection
