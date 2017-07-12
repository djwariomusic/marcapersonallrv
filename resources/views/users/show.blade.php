@extends('layouts.app2')

@section('contenido')
<!--/ banner -->
  <div class="banner1">
  		<div class="w3_agileits_service_banner_info">
  			<h2>POSTS DE: {{$users->name}}</h2>
  		</div>
  	</div>
<!--/ banner -->
<article class="container">
  <div class="inner_main_agile_section">
	<div class="col-md-12 wthree_services_grid_left">
		<div class="well">
			<div class="page-header">
				<h1>Listado de Posts</h1>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati omnis vel nulla doloremque at dicta libero, repellendus quas, velit eos ab dolorem, minima provident modi eligendi alias sapiente corporis quos.</p>
		</div>
		{{-- Esta seccion sera un bucle de Posts (Los listará todos)--}}
		<section class="col-md-9">

			@foreach($posts as $post)
				<article class="post">
					<div class="page-header">
              @include('posts.lastpost')
          @if(Auth::check())
            <a href="{{ url('/home') }}" class="btn btn-success"><- Listado</a>
          @else
            <a href="{{ url('/blog') }}" class="btn btn-success"><- Listado</a>
          @endif
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

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

@endsection
