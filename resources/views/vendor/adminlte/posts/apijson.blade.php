@extends('adminlte::layouts.app')

@section('htmlheader_title')
	API JSON
@endsection

@section('contentheader_title')
	<i class='fa fa-code' style="color:#00ba66;"></i> API JSON
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">API JSON Descripción</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						Start creating your amazing application!
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
	</div>
	<div class="col-md-12 wthree_services_grid_left">
			<div class="alert alert-success" role="alert">
				<div class="page-header">
					<h1>API JSON</h1>
				</div>
			</div>
			<p>Respuesta a traves de JSON. Listado de Post's publicados por Autor del Sitio.</p><br>
			<h3><i class="fa fa-file-code-o" aria-hidden="true"></i> <a href="{{url('apijson/posts/apirest')}}" target="_blank"><span class="label label-success"> Ver Respuesta JSON</span></a></h3>
	</div>
	</div>
	@endsection
