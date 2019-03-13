          <h3><strong>{{ $post->title }}</strong></h3><h4><small>{{ $post->publish_date }} creado por: {{$post->user->name}}</small></h4>
					</div>
          <img class="img-thumbnail" src="{{ $post->imagen }}">
					<p>{{ $post->resume }}</p>
          <form id="deletedPost" action="{{url('/deletedPost')}}" method="post">
            {{csrf_field()}}
  					<h2><a href="{{ url('blog/getPost/'.$post->id) }}" class="btn btn-success"><font size="3">Ver post  <i class="fa fa-sticky-note-o"></i></font></a>
            @if(Auth::check())
            <input type="hidden" name="id" value="{{$post->id}}">
            <input type="hidden" name="login" value="{{$login=Auth::user()->id}}"><input type="hidden" name="author" value="{{ $author=$post->user->id}}">
            @if($login==$author)
              <a href="{{ url('edit-post/'.$post->id) }}" class="btn btn-warning"><font size="3">Editar Post  <i class="fa fa-edit"></i></font></a>
              <a href="javascript:;" onclick="document.getElementById('deletedPost').submit();" class="btn btn-warning"><font size="3">Eliminar Post <i class="fa fa-trash"></i></font></a></h2>
            @endif
          @endif
          </form>
        </article>
        <div class="clearfix"><br></div>
