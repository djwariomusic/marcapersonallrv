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
						<h3 class="box-title">Home</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						{{ trans('adminlte_lang::message.logged') }}. Start creating your amazing application!
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
			<div class="col-md-12 wthree_services_grid_left">
					<div class="alert alert-success" role="alert">
            <div class="page-header">
      				<h1>Detalle Post's</h1>
      			</div>
					</div>
          @if(Auth::check())
            <h2><a href="{{ url('/home') }}"  class="btn btn-success"><font size="3"><i class="fa fa-list-alt"></i> Ir a Listado</font></a></h2>
          @endif
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
				                <div class="col-md-12">
																	<article class="post">
												    				<div class="page-header">
												    					<h3>{{ $post->title }}<br/><small>Escrito por: {{ $users->name }} Fecha Publicación: {{ $post->publish_date }} </small></h3>
												    				</div>
												            <img src="{{$post->imagen}}"><br>
												               {!! $post->description  !!}
												    			</article>
																	{{-- Esta sección sera un bucle de Posts (Los listará todos)--}}

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
																	<div id="disqus_thread"></div>
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

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<!--
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a7ce0bb8ed3af77"></script>
-->

<script id="dsq-count-scr" src="//edwinbeltrandev.disqus.com/count.js" async></script>
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
