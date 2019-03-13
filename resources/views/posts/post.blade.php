@extends('layouts.app2')
<!-- aca le estoy indicando a modo blade que este se archivo.php se extiende y utiliza mi plantilla-->

@section('contenido')
<!--/ banner -->
  <div class="banner1">
  		<div class="w3_agileits_service_banner_info">
  			<h2>Blog</h2>
  		</div>
  	</div>
<!--/ banner -->

<!-- //contact -->
<div class="container">
	<div class="col-md-12 wthree_services_grid_left">
		<section class="post">
      @if(Auth::check())
        <h2><a href="{{ url('/home') }}"  class="btn btn-success"><font size="3"><i class="fa fa-list-alt"></i> Ir a Listado</font></a></h2>
      @else
        <h2><a href="{{ url('/blog') }}"  class="btn btn-success"><font size="3"><i class="fa fa-list-alt"></i> Ir a Listado</font></a></h2>
      @endif

			<article class="post">
				<div class="page-header">
					<h3>{{ $post->title }}<br/><small>Escrito por: {{ $users->name }} Fecha Publicación: {{ $post->publish_date }} </small></h3>
				</div>
        <img src="{{$post->imagen}}">
			</article>
      {!! $post->description  !!}
		</section>
		<hr>
    Compartir este Post en Redes:
    <!--
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5963c2c8d84fccbe"></script>
    <div class="addthis_inline_share_toolbox"></div>
    -->
    <div id="disqus_thread"></div>
	</div>
</div>

<script id="dsq-count-scr" src="//edwinbeltrandev.disqus.com/count.js" async></script>

<script type="text/javascript" src="{{url('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{ url('js/ckeditor/ckeditor.js') }}"></script>
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
