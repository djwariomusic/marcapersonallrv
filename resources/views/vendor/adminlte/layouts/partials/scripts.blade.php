
<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<!-- Laravel App -->
<script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>

<script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('/js/Chart.js')}}"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
