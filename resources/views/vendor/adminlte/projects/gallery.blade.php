@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Crear Post´s
@endsection

@section('contentheader_title')
	<i class='fa fa-edit' style="color:#00ba66;"></i> Editar Proyectos
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">CRUD</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						 Por medio de Eloquent y una conexion a PostgresSQL, se esta realizando un CRUD sobre la Base de Datos.
						 Actividad frecuente, validando que el usuario que desea realizar estas acciones sobre los Project's y se
						 encuentre Auntenticado.
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
			<div class="col-md-12 wthree_services_grid_left">
					<div class="alert alert-success" role="alert">
            <div class="page-header">
      				<h1>Crear Proyecto</h1>
      			</div>
      		</div>

          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Mi Galeria de Proyectos</h3>
            </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{url('/saveGallery')}}" method="POST" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <label for="title"><b>Nombre Proyecto:</b></label>
                     <select name="idproject" id="idproject" style="width:100%;height:40px;">
                       <option disabled value=""> -- Seleccionar una Opción -- </option>
                       @forelse($projects as $project)
                       <option value="{{$project->idproject}}"> {{$project->name}} </option>
                       @empty
                       <option disabled select value> No se encontrarón Resultados </option>
                       @endforelse
                     </select>
                     <label for="publish_date"><b>Imagén a Cargar:</b></label>
                         <input type="file" name="file" id="file" class="form-control" required>
                     <br><br>
                     <input type="submit" class="btn btn-success" value="Guardar"><br>
                  </form>
      			   </div>
             </div>
          </div>
          </div>
<!--FIN.-->
		</div>
	</div>
	<!-- js -->
	@endsection
