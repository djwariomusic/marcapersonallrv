@extends('layouts.app2')
<!-- aca le estoy indicando a modo blade que este se archivo.php se extiende y utiliza mi plantilla-->

@section('contenido')
<!--/ banner -->
  <div class="banner1">
  		<div class="w3_agileits_service_banner_info">
  			<h2>Blog</h2>
  		</div>
  	</div>
<!--/ banner -->

<!-- links -->
      <div class="stats2">
          <div class="inner_w3l_agile_grids">
          <br>
          <h3 class="w3l_header w3_agileits_header"> Encuéntrame en <span>Redes</span></h3>
          <div class="col-md-4 w3layouts_stats_left2 w3_counter_grid">
             <i class="fa fa-wordpress" aria-hidden="true"></i>
             <h3><a href="https://edwinbeltrandev.wordpress.com/" target="_blank"><br>Publicaciones</a></h3>
          </div>
          <div class="col-md-4 w3layouts_stats_left2 w3_counter_grid1">
             <i class="fa fa-linkedin-square" aria-hidden="true"></i>
             <h3><a href="https://www.linkedin.com/in/edwin-beltran-80b20641/" target="_blank"><br>Contactos</a></h3>
          </div>
          <div class="col-md-4 w3layouts_stats_left2 w3_counter_grid2">
            <i class="fa fa-trophy" aria-hidden="true"></i>
            <h3><a href="https://www.hackerrank.com/mario_edwin" target="_blank"><br>Retos Hackerrank</a></h3>
          </div>
          <div class="clearfix"> </div>
          </div>
      </div>
<!--//links-->
<!-- //contact -->
<div class="container">
	<div class="col-md-12 wthree_services_grid_left">
		<section class="post">
      @if(Auth::check())
        <a href="{{ url('/home') }}" class="btn btn-success"><- Listado</a>
      @else
        <a href="{{ url('/blog') }}" class="btn btn-success"><- Listado</a>
      @endif

			<article class="post">
				<div class="page-header">
					<h3>{{ $post->title }}<br/><small>Escrito por: {{ $users->name }} Fecha Publicación: {{ $post->publish_date }} </small></h3>
				</div>
        <img src="{{$post->imagen}}">
				 <p>
           {{ $post->description  }}
         </p>
			</article>
		</section>
		<hr>
    Compartir este Post en Redes:
    <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5963c2c8d84fccbe"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
		<div class="comments">
			<div role="tabpanel">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active">
						<a href="#list" aria-controls="list" role="tab" data-toggle="tab">Comentarios</a>
					</li>
					<li role="presentation">
						<a href="#new" aria-controls="new" role="tab" data-toggle="tab">Nuevo</a>
					</li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					{{-- Comments list --}}
					<div role="tabpanel" class="tab-pane active" id="list">
						{{-- Bucle de comentarios --}}
						@foreach($comments as $comment)
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">
										{{ $comment->username }}
										<a href="{{ url('comments/deletecomment/'.$comment->id) }}" class="btn btn-danger btn-xs pull-right">X</a>
									</h3>
								</div>
								<div class="panel-body">
									{{ $comment->text }}
								</div>
							</div>
						@endforeach
						{{-- END Bucle de comentarios --}}
					</div>
					{{-- New comment --}}
					<div role="tabpanel" class="tab-pane" id="new">
						<div class="well">
							<form action="{{ url('comments/createcomment') }}" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="post_id" value="{{ $post->id }}">
								<label for="user">Usuario:</label>
								<input type="text" name="user" id="user" class="form-control" required><br/>
								<label for="comment">Comentario:</label>
								<textarea rows="5" name="comment" id="comment" class="form-control" required></textarea><br/>
								<input type="submit" class="btn btn-success" value="Enviar">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<script type="text/javascript" src="{{url('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{ url('js/ckeditor/ckeditor.js') }}"></script>
@endsection
