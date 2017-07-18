@extends('layouts.app2')

@section('contenido')
	<!--/ banner -->
	  <div class="banner1">
	  		<div class="w3_agileits_service_banner_info">
	  			<h2>Blog</h2>
	  		</div>
	  	</div>
	<!--/ banner -->
		<article class="container">
			<div class="col-md-12 wthree_services_grid_left">
			<div class="page-header">
				<h1>Editar o crear post</h1>
			</div>

	    <form action="/savedPost" method="POST">
	     {{ csrf_field() }}
	     @if(isset($post))
	         <input type="hidden" name="post_id" value="{{ $post->id }}">
					 <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
	     @endif

	     <label for="title">Título</label>
			     <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
	         <input type="text" name="title" id="title" class="form-control" placeholder="Título..." value="{{isset($post) ? $post->title : '' }}">
	     <label for="publish_date">Fecha de publicacion</label>
	         <input type="date" name="publish_date" id="publish_date" class="form-control" placeholder="" value="{{isset($post) ? $post->publish_date : '' }}">
	     <label for="resume">Resumen</label>
	         <textarea type="text" name="resume" id="resume" class="form-control" placeholder="Resumen..." rows="3" maxlength="300">{{ isset($post) ? $post->resume : '' }}</textarea>
	     <label for="description">Descripción</label>
					 <textarea class="ckeditor" name="description" id="description" placeholder="Descripcion..." rows="7" cols="80">{{ isset($post) ? $post->description : '' }}</textarea>
	     <label for="title">Publicado?</label>
	         <select name="status" id="status" class="form-control">
	             <option value="0" {{ (isset($post) && $post->status == 0)  ? 'selected' : '' }}>NO</option>
	             <option value="1" {{ (isset($post) && $post->status == 1)  ? 'selected' : '' }} selected>SI</option>
	         </select>
	     <input type="submit" class="btn btn-success" value="Guardar"><br>
	  </form>
    </div>
    <div class="clearfix"> </div>
		</article>
		

		<script type="text/javascript" src="{{url('js/jquery-2.1.4.min.js')}}"></script>
		<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
@endsection
