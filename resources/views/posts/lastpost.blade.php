          <h3><strong>{{ $postp->title }}</strong></h3><h4><small>{{ $postp->publish_date }} creado por: {{$postp->user->name}}</small></h4>
					</div>
          <center>
            <img class="img-thumbnail" src="{{ $postp->imagen }}">
          </center>
					<p>{{ $postp->resume }}</p>
          <form id="deletedPost" action="{{url('/deletedPost')}}" method="post">
            {{csrf_field()}}
  					<a href="{{ url('blog/getPost/'.$postp->id) }}" class="btn btn-success"><font size="3">Ver post  <i class="fa fa-sticky-note-o"></i></font></a>
            @if(Auth::check())
            <input type="hidden" name="id" value="{{$postp->id}}">
            <input type="hidden" name="login" value="{{$login=Auth::user()->id}}"><input type="hidden" name="author" value="{{ $author=$postp->user->id}}">
            @endif
          </form>
        </article>
        <div class="clearfix"><br></div>
