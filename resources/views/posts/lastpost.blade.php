          <h3>{{ $post->title }}</h3><br/ ><h4><small>{{ $post->publish_date }} creado por:<a href="/{{$post->user->username}}"> {{$post->user->name}} </a></small></h4>
					</div>
          <img class="img-thumbnail" src="{{ $post->imagen }}">
					<p>{{ $post->resume }}</p>

					<h2><a href="{{ url('blog/getPost/'.$post->id) }}"><span class="label label-success"><font size="2">Ver post  <i class="fa fa-sticky-note-o"></i></font></span></a>
          @if(Auth::check())
            <input type="hidden" name="login" value="{{$login=Auth::user()->name}}"><input type="hidden" name="author" value="{{ $author=$post->user->name}}">
            @if($login==$author)
          <a href="{{ url('edit-post/'.$post->id) }}"><span class="label label-success"><font size="2">Editar Post  <i class="fa fa-edit"></i></font></span></a>
          <a href="{{ url('deletedPost/'.$post->id) }}"><span class="label label-success"><font size="2">Eliminar Post <i class="fa fa-trash"></i></font></span></a></h2>
            @endif
          @endif
        </article>
        <div class="clearfix"><br></div>
