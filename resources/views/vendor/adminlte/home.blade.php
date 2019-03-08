@extends('adminlte::layouts.app')

@section('htmlheader_title')
	DASHBOARD
@endsection

@section('contentheader_title')
  <i class='fa fa-dashboard' style="color:#00ba66;"></i>	DASHBOARD
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Inicio</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						{{ trans('adminlte_lang::message.logged') }}. Interactua con nuestra Dashboard realizada con AdminLTE.
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
				<div class="col-md-12">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Mis Indicadores</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="salesChart" style="height: 180px; width: 703px;" width="703" height="180"></canvas>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>Gráfico de Herramientas</strong>
                  </p>

                  <div class="progress-group">
                    <span class="progress-text">Backend</span>
                    <span class="progress-number"><b>80</b>/100</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-aqua" style="width: 80%"  data-toggle="tooltip" title="PHP - Python - .NET"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Frontend</span>
                    <span class="progress-number"><b>65</b>/100</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-red" style="width: 65%"  data-toggle="tooltip" title="HTML5 - CSS3 - Bootstrap"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Frameworks</span>
                    <span class="progress-number"><b>75</b>/100</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-green" style="width: 85%" data-toggle="tooltip" title="Laravel 5 - Eclipse - Jquery"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Base de Datos</span>
                    <span class="progress-number" ><b>75</b>/100</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-yellow" style="width: 70%" data-toggle="tooltip" title="MySQL - PostgreSQL - SQL Server"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                    <h5 class="description-header">181</h5>
                    <span class="description-text">TOTAL POST'S</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                    <h5 class="description-header">14</h5>
                    <span class="description-text">TOTAL USUARIOS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                    <h5 class="description-header">2</h5>
                    <span class="description-text">TOTAL MENSAJES</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block">
                    <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                    <h5 class="description-header">8</h5>
                    <span class="description-text">TOTAL PROYECTOS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>

				<!-- TABLE: LATEST ORDERS -->
				<div class="col-md-8">
				          <div class="box box-info">
				            <div class="box-header with-border">
				              <h3 class="box-title">Top de Usuarios con mas Post's</h3>

				              <div class="box-tools pull-right">
				                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
				                </button>
				              </div>
				            </div>
				            <!-- /.box-header -->
				            <div class="box-body">
				              <div class="table-responsive">
				                <table class="table no-margin">
				                  <thead>
				                  <tr>
				                    <th>User ID</th>
				                    <th>Nombre</th>
				                    <th>Email</th>
				                    <th>No Post's</th>
				                  </tr>
				                  </thead>
				                  <tbody>
				                  <tr>
				                    <td><a href="https://adminlte.io/themes/AdminLTE/pages/examples/invoice.html">OR9842</a></td>
				                    <td>Call of Duty IV</td>
				                    <td>mario-edwin@hotmail.com</td>
				                    <td>
				                      <span class="label label-info">Processing</span>
				                    </td>
				                  </tr>
				                  <tr>
				                    <td><a href="https://adminlte.io/themes/AdminLTE/pages/examples/invoice.html">OR1848</a></td>
				                    <td>Samsung Smart TV</td>
				                    <td><span class="label label-warning">Pending</span></td>
				                    <td>
				                      <span class="label label-info">Processing</span>
				                    </td>
				                  </tr>
				                  <tr>
				                    <td><a href="https://adminlte.io/themes/AdminLTE/pages/examples/invoice.html">OR7429</a></td>
				                    <td>iPhone 6 Plus</td>
				                    <td><span class="label label-danger">Delivered</span></td>
				                    <td>
				                      <span class="label label-info">Processing</span>
				                    </td>
				                  </tr>
				                  <tr>
				                    <td><a href="https://adminlte.io/themes/AdminLTE/pages/examples/invoice.html">OR7429</a></td>
				                    <td>Samsung Smart TV</td>
				                    <td><span class="label label-info">Processing</span></td>
				                    <td>
				                      <span class="label label-info">Processing</span>
				                    </td>
				                  </tr>
				                  <tr>
				                    <td><a href="https://adminlte.io/themes/AdminLTE/pages/examples/invoice.html">OR1848</a></td>
				                    <td>Samsung Smart TV</td>
				                    <td><span class="label label-warning">Pending</span></td>
				                    <td>
				                      <span class="label label-info">Processing</span>
				                    </td>
				                  </tr>
				                  <tr>
				                    <td><a href="https://adminlte.io/themes/AdminLTE/pages/examples/invoice.html">OR7429</a></td>
				                    <td>iPhone 6 Plus</td>
				                    <td><span class="label label-danger">Delivered</span></td>
				                    <td>
				                      <span class="label label-info">Processing</span>
				                    </td>
				                  </tr>
				                  <tr>
				                    <td><a href="https://adminlte.io/themes/AdminLTE/pages/examples/invoice.html">OR9842</a></td>
				                    <td>Call of Duty IV</td>
				                    <td><span class="label label-success">Shipped</span></td>
				                    <td>
				                      <span class="label label-info">Processing</span>
				                    </td>
				                  </tr>
													<tr>
				                    <td><a href="https://adminlte.io/themes/AdminLTE/pages/examples/invoice.html">OR9842</a></td>
				                    <td>Call of Duty IV</td>
				                    <td><span class="label label-success">Shipped</span></td>
				                    <td>
				                      <span class="label label-info">Processing</span>
				                    </td>
				                  </tr>
													<tr>
				                    <td><a href="https://adminlte.io/themes/AdminLTE/pages/examples/invoice.html">OR9842</a></td>
				                    <td>Call of Duty IV</td>
				                    <td><span class="label label-success">Shipped</span></td>
				                    <td>
				                      <span class="label label-info">Processing</span>
				                    </td>
				                  </tr>
				                  </tbody>
				                </table>
				              </div>
				              <!-- /.table-responsive -->
				            </div>
				            <!-- /.box-body -->
				            <div class="box-footer clearfix">
				              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
				              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
				            </div>
				            <!-- /.box-footer -->
				          </div>
				          <!-- /.box -->
				        </div>
				        <!-- /.col -->
								<div class="col-md-4">
									<div class="box box-info">
				            <div class="box-header with-border">
				              <h3 class="box-title">Totales</h3>

				              <div class="box-tools pull-right">
				                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
				                </button>
				              </div>
				            </div>
				            <!-- /.box-header -->
				            <div class="box-body">
				              <div class="table-responsive">
								<!-- Info Boxes Style 2 -->
								<div class="info-box bg-yellow">
									<span class="info-box-icon"><i class="fa fa-edit"></i></span>

									<div class="info-box-content">
										<span class="info-box-text">Post's</span>
										<span class="info-box-number">5,200</span>

										<div class="progress">
											<div class="progress-bar" style="width: 10%"></div>
										</div>
										<span class="progress-description">
													Incremento 10%
												</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
								<div class="info-box bg-green">
									<span class="info-box-icon"><i class="fa fa-group"></i></span>

									<div class="info-box-content">
										<span class="info-box-text">Usuarios</span>
										<span class="info-box-number">92,050</span>

										<div class="progress">
											<div class="progress-bar" style="width: 20%"></div>
										</div>
										<span class="progress-description">
													Incremento 20%
												</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
								<div class="info-box bg-red">
									<span class="info-box-icon"><i class="fa fa-pencil"></i></span>

									<div class="info-box-content">
										<span class="info-box-text">Comentarios</span>
										<span class="info-box-number">114,381</span>

										<div class="progress">
											<div class="progress-bar" style="width: 5%"></div>
										</div>
										<span class="progress-description">
													Incremento 5%
												</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
								<div class="info-box bg-aqua">
									<span class="info-box-icon"><i class="fa fa-envelope-o"></i></span>

									<div class="info-box-content">
										<span class="info-box-text">Mensajes Directos</span>
										<span class="info-box-number">163,921</span>

										<div class="progress">
											<div class="progress-bar" style="width: 50%"></div>
										</div>
										<span class="progress-description">
													Incremento 50%
												</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
								</div>
							</div>
						</div>
					</div>
				<!-- /.col -->
			</div>
		<!-- /.row -->
	</div>

	@if(session('alerts')==null)
	    <input type="hidden" data-toggle="modal"  data-target="#myModalPost"  value="">
	@elseif (session('alerts')=='Post guardado')
	    <script language="JavaScript">
	        function load() {
	            document.getElementById("buttonpost").click();
	        }
	        window.onload = load;
	    </script>
	  <input type="hidden" data-toggle="modal"  id="buttonpost" data-target="#myModalPost">
	@elseif (session('alerts')=='Post Eliminado')
	    <script language="JavaScript">
	        function load() {
	            document.getElementById("buttonpost").click();
	        }
	        window.onload = load;
	     </script>
	  <input type="hidden" data-toggle="modal"  id="buttonpost" data-target="#myModalPostDel">
	@elseif (session('alerts')=='No Permitido')
	    <script language="JavaScript">
	        function load() {
	            document.getElementById("buttonpost").click();
	        }
	        window.onload = load;
	     </script>
	  <input type="hidden" data-toggle="modal"  id="buttonpost" data-target="#myModalDened">
	@elseif (session('alerts')=='Comentario Creado')
	    <script language="JavaScript">
	        function load() {
	            document.getElementById("buttonpost").click();
	        }
	        window.onload = load;
	     </script>
	  <input type="hidden" data-toggle="modal"  id="buttonpost" data-target="#myModalComment">
	@elseif (session('alerts')=='Comentario Eliminado')
			<script language="JavaScript">
					function load() {
							document.getElementById("buttonpost").click();
					}
					window.onload = load;
			 </script>
		<input type="hidden" data-toggle="modal"  id="buttonpost" data-target="#myModalCommentDel">
	@endif

@endsection

@section('scripts')
		@include('adminlte::layouts.partials.scripts')
		@include('adminlte::layouts.partials.scripts_graphs')
@endsection
