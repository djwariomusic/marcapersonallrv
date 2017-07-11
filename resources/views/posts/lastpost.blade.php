
<article class="container">
  <div class="inner_main_agile_section">
	<div class="col-md-12 wthree_services_grid_left">
		<div class="well">
			<div class="page-header">
				<h1>Listado de Posts</h1>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati omnis vel nulla doloremque at dicta libero, repellendus quas, velit eos ab dolorem, minima provident modi eligendi alias sapiente corporis quos.</p>
		</div>
		{{-- Esta seccion sera un bucle de Posts (Los listará todos) --}}
		<section class="col-md-9">
			@foreach($posts as $post)
				<article class="post">
					<div class="page-header">
          <h3>{{ $post->title }}</h3><br/><h4><small>{{ $post->publish_date }} creado por: {{$post->user->name}}</small></h4>
					</div>
          <img class="img-thumbnail" src="{{ $post->imagen }}">
					<p>{{ $post->resume }}</p>

					<h2><a href="{{ url('blog/getPost/'.$post->id) }}"><span class="label label-success"><font size="2">Ver post  <i class="fa fa-sticky-note-o"></i></font></span></a>
          @if(Auth::check())
            <input type="hidden" name="login" value="{{$login=Auth::user()->name}}"><input type="hidden" name="author" value="{{ $author=$post->user->name}}">
            @if($login==$author)
          <a href="{{ url('edit-post/'.$post->id) }}"><span class="label label-success"><font size="2">Editar Post  <i class="fa fa-edit"></i></font></span></a>
          <a href="{{ url('deletedPost/'.$post->id) }}"><span class="label label-success"><font size="2">Eliminar Post <i class="fa fa-trash"></i></font></span></a></h2>
            @else

            @endif
          @endif

				</article>
        <div class="clearfix"><br></div>
			@endforeach
      @if(count($posts))
      <div class="mt-2 mx-auto">
      {{ $posts->links('pagination::bootstrap-4') }}
      </div>
      @endif
		</section>
		{{-- END Esta seccion sera un bucle de Posts --}}
    <div class="col-md-3">
      <div class="col-md-3">
        <i class="fa fa-phone" aria-hidden="true"></i>
      </div>
      <p>+(57) 301 2388303</p>
    </div>
    <div class="col-md-3">
      <div class="col-md-3">
        <i class="fa fa-phone" aria-hidden="true"></i>
      </div>
      <p>+(57) 301 2388303</p>
    </div>
    <div class="clearfix"> </div>
	</div>
  </div>
</article>
