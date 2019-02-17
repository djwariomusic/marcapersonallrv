@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Crear Post´s
@endsection

@section('contentheader_title')
	<i class='fa fa-edit' style="color:#00ba66;"></i> Crear Post's
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
						 Actividad frecuente, validando que el usuario que desea realizar estas acciones sea propietario del Post's y se
						 encuentre Auntenticado.
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
			<div class="col-md-12 wthree_services_grid_left">
					<div class="alert alert-success" role="alert">
            <div class="page-header">
      				<h1>Editar o Crear Post</h1>
      			</div>
      		</div>

          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Mis Indicadores</h3>
            </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{url('/savedPost')}}" method="POST">
                     {{ csrf_field() }}
                     <label for="title">Título</label>
                         <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                         <input type="hidden" name="post_id" value="{{ isset($post) ? $post->id : '' }}">
                         <input type="text" name="title" id="title" class="form-control" placeholder="Título..." value="{{isset($post) ? $post->title : '' }}">
                     <label for="publish_date">Fecha de Publicación</label>
                         <input type="date" name="publish_date" id="publish_date" class="form-control" placeholder="" value="{{isset($post) ? $post->publish_date : '' }}">
                     <label for="resume">Resumen</label>
                         <textarea type="text" name="resume" id="resume" class="form-control" placeholder="Resumen..." rows="3" maxlength="300">{{ isset($post) ? $post->resume : '' }}</textarea>
                     <label for="description">Descripción</label>
                         <textarea class="ckeditor" name="description" id="description" placeholder="Descripcion..." rows="7" cols="80">{{ isset($post) ? $post->description : '' }}</textarea>
                     <label for="title">Publicado?</label>
                         <select name="status" id="status" class="form-control">
                             <option value="0" {{ (isset($post) && $post->status == 0)  ? 'selected' : '' }}>NO</option>
                             <option value="1" {{ (isset($post) && $post->status == 1)  ? 'selected' : '' }} selected>SI</option>
                         </select>
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
