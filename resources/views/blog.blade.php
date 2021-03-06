@extends('layouts.app')
<!-- aca le estoy indicando a modo blade que este se archivo.php se extiende y utiliza mi plantilla-->
@section('login')
  <div>
  <ul class="agile_forms">
  <!-- Authentication Links -->
      @if (Auth::guest())
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Registrarse</a></li>
      @else
          <label style="display:none;">{{$me = Auth::user()->username}}</label>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>

              <ul class="dropdown-menu agile_forms2" role="menu">
                  <center>
                  <li>
                      <img class="img-thumbnail" width="100" height="100" src="{{url('images/avatar/avatar.jpg')}}">
                  </li>
                  </center>
                  <li>
                      <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>
                        Dashboard
                      </a>
                  </li>
                  <ol>
                    <li><i class="fa fa-edit"></i><a href="{{url('/edit-post')}}"> Crear Posts</a></li>
                    <li><i class="fa fa-folder-open-o"></i><a href="{{url('/home/'.$me)}}"> Mis Posts</a></li>
                    <li><i class="fa fa-bar-chart-o"></i><a href="{{url('/home/'.$me.'/graphs')}}"> Graficas</a></li>
                    <li><i class="fa fa-code"></i><a href="{{url('/apijson')}}"> API JSON</a></li>
                  </ol>
                  <li><a href="{{url('/documents')}}"><i class="fa fa-files-o"></i> Documentación</a></li>
                  <li>
                  <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>
                    Logout
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                  </li>
              </ul>
         </li>
      @endif
  </ul>
  </div>
  <div class="clearfix"> </div>
@endsection

@section('barnav')
  <li><a href="{{url('/')}}" class="effect-3">Inicio</a></li>
  <li><a href="{{url('/servicios')}}" class="effect-3">Servicios</a></li>
  <li><a href="{{url('/proyectos')}}" class="effect-3">Proyectos</a></li>
  <li class="active"><a href="{{url('/blog')}}" class="effect-3">Blog</a></li>
  <li><a href="{{url('/contacto')}}" class="effect-3">Contacto</a></li>
@endsection
@section('contenido')
<!--/ banner -->
  <div class="banner1">
  		<div class="w3_agileits_service_banner_info">
  			<h2>Blog</h2>
  		</div>
  	</div>
<!--/ banner -->
<!-- //contact -->
<article class="container">
  <div class="inner_main_agile_section">
	<div class="col-md-12 wthree_services_grid_left">
		<div class="well">
			<div class="page-header">
				<h1>Listado de Post's</h1>
			</div>
      <p>Desarrollo en Framework Laravel 5 PHP, componentes Laravel: Migrates, Controllers, Models, Routes, Factory, Seeds, Bootstrap. Sistema de Autenticación para la creación de posts, los cuales podrán ser editados o eliminados siempre y cuando sea su creador se encuentre logeado.
      Al dar click al creador de un post se podrán observar todos los post's relacionados a ese usuario creador. Los comentarios están asociados a los post's para su creación.</p>
		</div>
		{{-- Esta sección sera un bucle de Post's (Los listará todos) --}}
		<section class="col-md-12">
			@forelse($postsp as $postp)
				<article class="post">
					<div class="page-header">
              @include('posts.lastpost')
      @empty
        <article class="post">
          <div class="page-header">
            <h3>No hay Mensajes</h3><br/>
          </div>
        </article>
        <div class="clearfix"><br></div>
      @endforelse

      @forelse($posts as $post)
      <div class="col-md-4">
        <div class="well" style="height:40em;">
    			<div class="page-header" style="height:3em;">
    				<h4><strong>{{ $post->title }}</strong></h47>
    			</div>
          <img class="img-thumbnail" src="{{ $post->imagen }}"><br>
          <p>{{ $post->resume }}</p>
    		</div>
        <a href="{{ url('blog/getPost/'.$post->id) }}" class="btn btn-success"><font size="3">Ver post  <i class="fa fa-sticky-note-o"></i></font></a>
      </div>
      @empty
      <div class="col-md-12">
        <div class="well">
          <div class="page-header">
            <h1>No hay Mensajes</h1>
          </div>
        </div>
      </div>
      <div class="clearfix"><br></div>
      @endforelse

      @if(count($posts))
          <div class="mt-2 mx-auto">
          {{ $posts->links('pagination::bootstrap-4') }}<br><br>
          </div>
      @endif
    </section>

          <div class="clearfix"> </div>
  </div>
  </div>
</article>

<!-- js -->
<script type="text/javascript" src="{{ url('js/jquery-2.1.4.min.js')}}"></script>
@endsection
