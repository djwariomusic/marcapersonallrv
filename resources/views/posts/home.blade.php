@extends('layouts.app2')

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
            <div class="col-md-3">
              <i class="fa fa-phone" aria-hidden="true"></i>
            </div>
            <p>+(57) 301 2388303</p>
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


<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

@endsection
