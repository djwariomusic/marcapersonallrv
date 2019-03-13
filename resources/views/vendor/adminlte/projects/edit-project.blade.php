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
      				<h1>Editar Proyecto</h1>
      			</div>
      		</div>

          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Mi Proyecto</h3>
            </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{url('/savedProject')}}" method="POST">
                     {{ csrf_field() }}
                     <label for="title"><b>Nombre Proyecto:</b></label>
                         <input type="hidden" name="idproject" value="{{ isset($project) ? $project->idproject : '' }}">
                         <input type="text" name="name" id="name" class="form-control" placeholder="Nombre Proyecto..." value="{{isset($project) ? $project->name : '' }}">
                     <label for="publish_date"><b>Empresa u Organización:</b></label>
                         <input type="text" name="enterprise" id="enterprise" class="form-control" placeholder="Empresa u Organización..." value="{{isset($project) ? $project->enterprise : '' }}">
                     <label for="publish_date"><b>URL Proyecto:</b></label>
                         <input type="text" name="url" id="url" class="form-control" placeholder="URL Proyecto..." value="{{isset($project) ? $project->url : '' }}">
                     <label for="publish_date"><b>URL Galería:</b></label>
                         <input type="text" name="urlgaleria" id="urlgaleria" class="form-control" placeholder="URL Galería..." value="{{isset($project) ? $project->urlgaleria : '' }}">
                     <label for="publish_date"><b>Tecnologías:</b></label>
                         <textarea type="text" name="technology" id="technology" class="form-control" placeholder="Tecnologías..." rows="3">{{ isset($project) ? $project->technology : '' }}</textarea>
                     <label for="publish_date"><b>Descripción del Proyecto:</b></label>
                         <textarea type="text" name="description" id="description" class="form-control" placeholder="Descripción..." rows="5">{{ isset($project) ? $project->description : '' }}</textarea>
                     <label for="publish_date"><b>Participación en el Proyecto:</b></label>
                         <textarea type="text" name="participation" id="participation" class="form-control" placeholder="Participación..." rows="3">{{ isset($project) ? $project->participation : '' }}</textarea>
                     <label for="title"><b>Estado Publicación</b></label>
                         <select name="status" id="status" class="form-control">
                             <option value="0" {{ (isset($project) && $project->status == 0)  ? 'selected' : '' }}>NO</option>
                             <option value="1" {{ (isset($project) && $project->status == 1)  ? 'selected' : '' }} selected>SI</option>
                         </select>
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
