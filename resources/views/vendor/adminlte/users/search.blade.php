@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Busqueda x Username
@endsection

@section('contentheader_title')
  <i class="fa fa-search" style="color:#00ba66;"></i>	Busqueda por Username
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Home</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						{{ trans('adminlte_lang::message.logged') }}. Start creating your amazing application!
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
			<div class="col-md-12 wthree_services_grid_left">
					<div class="alert alert-success" role="alert">
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
@endsection
