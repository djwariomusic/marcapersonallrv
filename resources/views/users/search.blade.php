@extends('layouts.app2')

@section('contenido')
<!--/ banner -->
  <div class="banner1">
  		<div class="w3_agileits_service_banner_info">
  			<h2>BUSQUEDA</h2>
  		</div>
  	</div>
<!--/ banner -->
<div class="container">
  <div class="inner_main_agile_section">
	<div class="col-md-12 wthree_services_grid_left">
		<div class="well">
			<div class="page-header">
				<h1>Consulta Busqueda de Usuarios por username</h1>
			</div>
      <p>Desarrollo en Framework Laravel 5 PHP, componentes Laravel: Migrates, Controllers, Models, Routes, Factory, Seeds, Bootstrap. Sistema de Autenticación para la creación de post's, los cuales podrán ser editados o eliminados siempre y cuando sea su creador se encuentre logeado.
      Al dar click al creador de un post se podrán observar todos los post's relacionados a ese usuario creador. Los comentarios están asociados a los post's para su creación.</p>
		</div>
		{{-- Esta sección sera un bucle de Posts (Los listará todos)--}}
		<section class="col-md-9">

			@forelse($users as $user)
				<article class="post">
		        <p><h3>Nombre de Usuario</h3><a href="{{url('/home/'. $user->username)}}">{{ $user->username }}</a></p>
        </article>
          <div class="clearfix"><br></div>
      @empty
          <article class="post">
            <div class="page-header">
              <h3>No se Encontrarón Resultados</h3><br/>
            </div>
          </article>
          <div class="clearfix"><br></div>
      @endforelse

      @if(count($users))
          <div class="mt-2 mx-auto">
          {{ $users->links('pagination::bootstrap-4') }}
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
</div>

<!-- js -->
<script type="text/javascript" src="{{ url('js/jquery-2.1.4.min.js')}}"></script>

@endsection
