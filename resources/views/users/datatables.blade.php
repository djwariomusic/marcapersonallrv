@extends('layouts.app2')

@section('contenido')
<!--/ banner -->
  <div class="banner1">
  		<div class="w3_agileits_service_banner_info">
  			<h2>DATATABLES</h2>
  		</div>
  	</div>
<!--/ banner -->
<div class="inner_main_agile_section">
  <div class="container">
  <h6>Desarrollo Web a la Medida</h6>
  <h3 class="w3l_header w3_agileits_header">Tablas <span class="fixed_w3">Dinámicas</span></h3>
  <p class="sub_para_agile two">DataTables Jquery</p>
        <div class="agile_inner_grids">
          <div class="col-md-12 w3_agileits_about2_grid_left">
            <p>Datatables plugin de Jquery permite una integracion con los datos</p><br>
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
          </div>
      <div class="clearfix"><br> </div>
  </div>
</div>
</div>
<!-- js -->
<script type="text/javascript" src="{{url('js/jquery-2.1.4.min.js')}}"></script>
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
