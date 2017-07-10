@extends('layouts.app')
<!-- aca le estoy indicando a modo blade que este se archivo.php se extiende y utiliza mi plantilla-->
@section('login')
  <div>
  <ul class="agile_forms">
  <!-- Authentication Links -->
      @if (Auth::guest())
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Register</a></li>
      @else
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>

              <ul class="dropdown-menu agile_forms2" role="menu">
                  <li>
                  <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
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
  <li><a href="/" class="effect-3">Inicio</a></li>
  <li><a href="/servicios" class="effect-3">Servicios</a></li>
  <li><a href="/proyectos" class="effect-3">Proyectos</a></li>
  <li class="active"><a href="/blog" class="effect-3">Blog</a></li>
  <li><a href="/contacto" class="effect-3">Contacto</a></li>
@endsection
@section('contenido')
<!--/ banner -->
  <div class="banner1">
  		<div class="w3_agileits_service_banner_info">
  			<h2>Blog</h2>
  		</div>
  	</div>
<!--/ banner -->

<!!-- links -->
      <div class="stats2">
          <div class="inner_w3l_agile_grids">
          <br>
          <h3 class="w3l_header w3_agileits_header"> Encuentrame en <span>Redes</span></h3>
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
<!!--//links-->
<!-- //contact -->

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
						<h3>{{ $post->title }}<br/> <small>{{ $post->publish_date }}</small></h3>
					</div>
					<p>{{ $post->resume }}</p>
					<a href="{{ url('blog/getPost/'.$post->id) }}"><span class="label label-success">Ver post -></span></a>
          @if(Auth::check())
          <a href="{{ url('edit-post/'.$post->id) }}"><span class="label label-success">Editar Post</span></a>
          <a href="{{ url('deletedPost/'.$post->id) }}"><span class="label label-success">Editar Post</span></a>
          @endif
				</article>
			@endforeach




      @if(count($posts))
          <div class="mt-2 mx-auto">
          {{ $posts->links('pagination::bootstrap-4') }}
          </div>
      @endif
		</section>
    <div class="clearfix"> </div>
		{{-- END Esta seccion sera un bucle de Posts --}}
	</div>
  </div>
</article>

<!-- js -->
<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js')}}"></script>
@endsection
