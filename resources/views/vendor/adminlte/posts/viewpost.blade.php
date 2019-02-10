@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Ultimos Post's
@endsection

@section('contentheader_title')
  <i class='fa fa-list-alt' style="color:#00ba66;"></i>	Ultimos Post's
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Inicio</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						{{ trans('adminlte_lang::message.logged') }}. Interactua con nuestra Dashboard realizada con AdminLTE.
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<div class="col-md-12 wthree_services_grid_left">
				<div class="alert alert-success" role="alert">
					<div class="page-header">
						<h1>Ultimos Post's</h1>
					</div>
					<p>A continuacion observara un listado de los Ultimos Post's creados con su correspondiente Autor, Fecha y Resumen.
					Si es usuario propietario del Post's podra editar o eliminar el comentario segun lo deseado.</p>
        </div>
      			<section class="col-md-9">
      			  @forelse($posts as $post)
      			    <article class="post">
      			      <div class="page-header">
      			          @include('adminlte::posts.lastpost')

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
      			      {{ $posts->links('pagination::bootstrap-4') }}<br><br>
      			      </div>
      			  @endif
      			</section>

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



@endsection

@section('scripts')
		@include('adminlte::layouts.partials.scripts')

@endsection
