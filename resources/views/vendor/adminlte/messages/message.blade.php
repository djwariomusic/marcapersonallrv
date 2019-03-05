@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
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
      				<h1>Detalle Mensaje</h1>
      			</div>
					</div>

					<div class="col-md-12">
				        <div class="box box-warning">
				            <div class="box-header with-border">
				              <h3 class="box-title">Mensaje Seleccionado</h3>

				              <div class="box-tools pull-right">
				                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
				                </button>
				              </div>
				            </div>
				        <!-- /.box-header -->
				        <div class="box-body">
				            <div class="row">
				                <div class="col-md-12">
													  <form method="post" action="/savemessage">
															{{ csrf_field() }}
												    <div class="page-header">
												    	<h3><b>Nombre Contacto:</b> {{ $message->name }}<br/><small><b>Datos de Contacto:</b> <br>{{$message->email}} - {{$message->telephone}}</small></h3>
												    </div>
															<input type="hidden" name="idmessage" value=" {{ $message->id }}">
															<h4><b>Asunto:</b></h3>
															 {!! $message->description  !!}
															<br><br>
															<b>Contenido Mensaje:</b><br>
												       {!! $message->message  !!}
															<input type="hidden" value="{{$message->id}}">
															<br><br>
														<div class="page-footer">
														  <h4><b>Estado Gestión:<b/></h4>
														  <select name="state" id="status" class="form-control">
														    <option <?php if($message->state == "Pendiente por Contactar") echo "selected"; ?>> Pendiente por Contactar</option>
																<option <?php if($message->state == "Cliente Contactado") echo "selected"; ?>> Cliente Contactado</option>
															</select>

														</div>
														<br><br>
														<input type="submit" class="btn btn-success" value="Cambiar Estado">
													  </form>
				                </div>
				                <!-- /.col -->
				            </div>
				        <!-- /.row -->
				        </div>
						</div>

			  </div>
		</div>
	</div>

@endsection




@section('scripts')
	@include('adminlte::layouts.partials.scripts')

<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a7ce0bb8ed3af77"></script>

<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://edwinbeltrandev.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

@endsection
