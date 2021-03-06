@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Mis Post's
@endsection

@section('contentheader_title')
  <i class="fa fa-folder-open-o" style="color:#00ba66;"></i>	Mis Post's
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h4 class="box-title"><i class="fa fa-info-circle"></i> Consultas SQL - Query</h4>
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						Las Consultas permiten mayor agilidad en el acceso a la información, en esta consulta particular,
						se enviaron parametros por GET, capturando el usuario autenticado y este parametros es enviado a un
						Controlador, el cual procesa la informacion y retorna los resultados de acuerdo al criterio.
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
      	<div class="col-md-12 wthree_services_grid_left">
      		<div class="alert alert-success" role="alert">
      			<div class="page-header">
      				<h1>Listado de Post's de</h1><h3>{{$users->username}}</h3>
      			</div>
            <p>Mis Post's le permite visualizar su propia informacion, accediendo a las opciones de Ver Post para observar su detalle, Editar Post's
						donde podra modificar el contenido puntual del Post´s seleccionado y por ultimo esta la opcion de Eliminar Post.
						</p>
      		</div>
					<div class="box box-warning">
							<div class="box-header with-border">
								<h3 class="box-title">Mis Indicadores</h3>
							</div>
					<!-- /.box-header -->
					<div class="box-body">
							<div class="row">
									<div class="col-md-12">
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
						                {{ $posts->links('pagination::bootstrap-4') }}
						                </div>
						            @endif
						          </section>
										</div>

								</div>
							</div>
					</div>
        </div>
      </div>
@endsection
