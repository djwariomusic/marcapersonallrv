@extends('adminlte::layouts.app')

@section('htmlheader_title')
	DataTables
@endsection

@section('contentheader_title')
  <i class="fa fa-table" style="color:#00ba66;"></i>	DataTables
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
      				<h1>Listado de Post's</h1>
      			</div>
            <p>Desarrollo en Framework Laravel 5 PHP, componentes Laravel: Migrates, Controllers, Models, Routes, Factory, Seeds, Bootstrap. Sistema de Autenticación para la creación de post's, los cuales podrán ser editados o eliminados siempre y cuando sea su creador se encuentre logeado.
            Al dar click al creador de un post se podrán observar todos los post's relacionados a ese usuario creador. Los comentarios están asociados a los post's para su creación.</p>
      		</div>
      		{{-- Esta sección sera un bucle de Posts (Los listará todos)--}}
      		<section class="col-md-12">
            <table id="task" class="table table-hover table-condensed">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Fecha Publicación</th>
                    <th>User Id</th>
                </tr>
                </thead>
            </table>
          </section>
            		{{-- END Esta seccion sera un bucle de Posts --}}
        </div>
      </div>
    </div>

@endsection

@section('scripts')
	@include('adminlte::layouts.partials.scripts')
	<script src="{{url('js/jquery.dataTables.min.js')}}"></script>
	<script src="{{url('js/dataTables.bootstrap.min.js')}}"></script>
	<script type="text/javascript">
    $(document).ready(function() {
        oTable = $('#task').DataTable({
          "language": {
              search: "Busqueda:",
              processing: "Procesando",
              info: "Visualizando la Página _PAGE_ de _PAGES_",
              paginate: {
                previous:   "Anterior",
                next:       "Siguiente"
              },
              lengthMenu: "Visualizando _MENU_ Registros por Página",
              infoEmpty: "Ningun Registro Encontrado",
              infoFiltered: "(Busqueda entre _MAX_ Registros)",
              zeroRecords: "Lo sentimos no se encontraron registros",
            },
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('dtt') }}",
            "headers": "{'X-CSRF-TOKEN': '{{csrf_token()}}'}",
            "columns": [
                {data: 'id', name: 'id'},
                {data: 'title', name: 'title'},
                {data: 'publish_date', name: 'publish_date'},
                {data: 'user_id', name: 'user_id'}
            ]

        });
    });
</script>
@endsection
