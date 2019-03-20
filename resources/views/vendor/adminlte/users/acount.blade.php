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
      				<h1>Perfil Usuario</h1>
      			</div>
      		</div>

          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Mi Perfil Usuario</h3>
            </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{url('/saveAcount')}}" method="POST">
                     {{ csrf_field() }}
                     <label for="title"><b>Nombre Usuario:</b></label>
                         <input type="hidden" name="user_id" value="">
                         <input type="text" name="name" id="name" class="form-control" placeholder="Nombre Usuario..." value="{{ $user->name }}">
                     <label for="publish_date"><b>Email Usuario:</b></label>
                         <input type="text" name="email" id="email" class="form-control" placeholder="Email Usuario..." value="{{ $user->email }}">
                     <label for="publish_date"><b>Username o Alias:</b></label>
                         <input type="text" name="username" id="username" class="form-control" placeholder="Alias Usuario..." value="{{ $user->username }}">
                     <label for="publish_date"><b>Contraseña:</b></label>
                         <input type="password" name="pass" id="pass" class="form-control" placeholder="Contraseña Cifrada..." value="{{ $user->password }}">
                      <br><br>
                     <!--<input type="submit" class="btn btn-success" value="Actualizar"><br>-->
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
