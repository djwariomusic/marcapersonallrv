@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Crear Post´s
@endsection

@section('contentheader_title')
	<i class='fa fa-envelope-open-o' style="color:#00ba66;"></i> Listado Mensajes
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
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
			<div class="col-md-12 wthree_services_grid_left">
					<div class="alert alert-success" role="alert">
            <div class="page-header">
      				<h1>Listado de Mensajes</h1>
      			</div>
      		</div>

          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Mis Mensajes</h3>
            </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                       <th> Nombres y Apellidos </th>
                       <th> Email </th>
                       <th> Estado </th>
                       <th><center> Descripción</center></th>
                       <th><center> Ver Más</center></th>
                       <th><center> Eliminar</center></th>
                      </tr>
                    <!-- Conditional x  Variable Listado de Usuarios-->
                    @if(isset($messages))
                    @forelse($messages as $message)
                      <tr>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->state }}</td>
                        <td>{{ $message->description }}</td>
                        <td align="center"><a href="{{url('/messages/'.$message->id)}}"><i class="fa fa-file"></i></a></td>
                        <td align="center">
                          <a href="" data-toggle="modal" data-target="#MyModal" data-id="{{$message->id}}" href="#addIdModal" class="open-AddIdModal">
                            <i class="fa fa-trash"></i>
                          </a>
                          </td>
                      </tr>
                    <!-- Conditional Variable Empty Variable listado-->
                    @empty
                      <tr>
                        <td colspan="6" scope="col">No Existen Mensajes Registrados</td>
                      </tr>
                    @endforelse
                    </tbody></table>
                    <!-- Conditional Pagination Bootstrap -->
                    <div class="box-footer clearfix">
                      @if(count($messages))
                        <div class="mt-2 mx-auto">
                          {{ $messages->links('pagination::bootstrap-4') }}
                        </div>
                      @endif
                    </div>
                    @endif

      			   </div>
             </div>
          </div>
      </div>
<!--FIN.-->
		</div>
	</div>
	<!-- js -->

  <!-- Modal Bootstrap 1 -->
<div class="modal fade" id="MyModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Confirmar Acción</h4>
      </div>

      <div class="modal-body">
        <p align="justify">
          Esta Seguro que desea Eliminar el Mensaje<br>

        </p>
      </div>

      <div class="modal-footer">
        <form action="{{url('/delmessage')}}" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="idmessage" id="idmessage" value=""/>
          <button type="submit" class="btn btn-danger">Eliminar</button>
          <button type="button" id="btnmodalclose" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </form>
      </div>
    </div>
  </div>
</div>

	@endsection
  @section('scripts')
  @include('adminlte::layouts.partials.scripts')
  <script>
    $(document).on("click", ".open-AddIdModal", function () {
       var myId = $(this).data('id');
       $(".modal-footer #idmessage").val( myId );
      $('#addIdModal').modal('show');
    });
  </script>
  @endsection
