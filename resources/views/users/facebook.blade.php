@extends('layouts.app2')

@section('contenido')
<!--/ banner -->
  <div class="banner1">
  		<div class="w3_agileits_service_banner_info">
  			<h2>DOCUMENTACIÓN DESARROLLO WEB</h2>
  		</div>
  	</div>
<!--/ banner -->

	<div class="inner_main_agile_section">
		<div class="container">
		<h6>Desarrollo Web a la Medida</h6>
		<h3 class="w3l_header w3_agileits_header">Documentación <span class="fixed_w3">Marca Personal</span></h3>
		<p class="sub_para_agile two">Descarga de Archivos PDF</p>

    			<div class="agile_inner_grids">

    				<div class="col-md-12 w3_agileits_about2_grid_left">
              <form method="post" action="/auth/facebook/register">
              {{ csrf_field() }}
              <div class="card">
              	<div class="card-block">
              		<img class="img-thumbnail" src="{{ $user->avatar }}">
              	</div>
              	<div class="card-block">
              		<div class="form-group">
              			<label for="name" class="form-control-label">
              				Nombre
              			</label>
              			<input class="form-control" type="text" name="name" value="{{ $user->name }}" readonly>
              		</div>

              		<div class="form-group">
              			<label for="email" class="form-control-label">
              				Email
              			</label>
              			<input class="form-control" type="text" name="email" value="{{ $user->email }}" readonly>
              		</div>

              		<div class="form-group">
              			<label for="username" class="form-control-label">
              				Nombre de usuario
              			</label>
              			<input class="form-control" type="text" name="username" value="{{ old('username') }}">
              		</div>
              	</div>

              	<div class="card-footer">
              		<button class="btn btn-primary" type="submit">
              			Registrarse
              		</button>
              	</div>
              </div>
              </form>
    				</div>

		      </div>
	</div>
</div>
<!-- js -->
<script type="text/javascript" src="{{url('js/jquery-2.1.4.min.js')}}"></script>


@endsection
