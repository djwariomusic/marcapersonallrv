@extends('layouts.app2')

@section('contenido')
<!--/ banner -->
  <div class="banner1">
  		<div class="w3_agileits_service_banner_info">
  			<h2>DASHBOARD</h2>
  		</div>
  	</div>
<!--/ banner -->

<article class="container">
  <div class="inner_main_agile_section">
	<div class="col-md-12 wthree_services_grid_left">
      <div class="alert alert-success" role="alert">
      <center>
        <label style="display:none;">{{$me = Auth::user()->username}}</label>
        <div class="col-md-12">
        <nav>
          <ul class="pager">
            <li class="pager-prev"><a href="{{url('/edit-post')}}">Crear Post</a></li>
            <li class="pager-next"><a href="{{url('/home/'.$me)}}">Mis Posts</a></li>
            <li class="pager-next"><a href="{{url('/home/'.$me.'/graphs')}}">Grafica</a></li>
            <li class="pager-next"><a href="{{url('/datatable')}}">DataTables Jquery</a></li>
            <li class="pager-next"><a href="#">GIS</a></li>
            <li class="pager-next"><a href="{{url('/apijson')}}">API JSON</a></li>
            <li class="pager-next"><a href="{{url('/documents')}}">Documentación</a></li>
          </ul>
          <ul class="pager">
            <li class="pager-next">
                  <form action="{{url('/searchUser')}}" method="post">
                    {{csrf_field()}}
                      <div class="input-group">
                            <input type="text" name="username" class="form-control" placeholder="Busqueda de Usuarios por Username...">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Buscar</button>
                            </span>
                       </div>
                  </form>
            </li>
          </ul>
        </nav>
        </div>
      </center>
			<div class="page-header">
				<h1>Listado de Post's</h1>
			</div>
      <p>Desarrollo en Framework Laravel 5 PHP, componentes Laravel: Migrates, Controllers, Models, Routes, Factory, Seeds, Bootstrap. Sistema de Autenticación para la creación de post's, los cuales podrán ser editados o eliminados siempre y cuando sea su creador se encuentre logeado.
      Al dar click al creador de un post se podrán observar todos los post's relacionados a ese usuario creador. Los comentarios están asociados a los post's para su creación.</p>
		</div>
		{{-- Esta seccion sera un bucle de Posts (Los listará todos) --}}

		<section class="col-md-9">
			@forelse($posts as $post)
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

      @if(count($posts))
          <div class="mt-2 mx-auto">
          {{ $posts->links('pagination::bootstrap-4') }}<br><br>
          </div>
      @endif
    </section>
      		{{-- END Esta seccion sera un bucle de Posts --}}
          <div class="col-md-3">
            <img src="{{url('/images/giphy.gif')}}" width="256" height="256">
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

@if(session('alerts')==null)
    <input type="hidden" data-toggle="modal"  data-target="#myModalPost"  value="">
@elseif (session('alerts')=='Post guardado')
    <script language="JavaScript">
        function load() {
            document.getElementById("buttonpost").click();
        }
        window.onload = load;
    </script>
  <input type="hidden" data-toggle="modal"  id="buttonpost" data-target="#myModalPost">
@elseif (session('alerts')=='Post Eliminado')
    <script language="JavaScript">
        function load() {
            document.getElementById("buttonpost").click();
        }
        window.onload = load;
     </script>
  <input type="hidden" data-toggle="modal"  id="buttonpost" data-target="#myModalPostDel">
@elseif (session('alerts')=='No Permitido')
    <script language="JavaScript">
        function load() {
            document.getElementById("buttonpost").click();
        }
        window.onload = load;
     </script>
  <input type="hidden" data-toggle="modal"  id="buttonpost" data-target="#myModalDened">
@endif
<!-- js -->
<script type="text/javascript" src="{{url('js/jquery-2.1.4.min.js')}}"></script>
@endsection
