<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> EdwinBeltránDEV - AdminLTE</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="keywords" content="Desarrollo Web Economico, Freelance Bogota, Diseño Web Responsive, Backend+HTML5+CSS3,
    Maquetacion Bootstrap" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('/css/all.css') }}" rel="stylesheet" type="text/css" />


    <!-- //custom-theme -->

    <!-- Owl-carousel-CSS -->
    <link href="{{ url('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{ url('css/font-awesome.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{url('css/dataTables.bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('css/dataTables.bootstrap.min.css')}}">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        //See https://laracasts.com/discuss/channels/vue/use-trans-in-vuejs
        window.trans = @php
            // copy all translations from /resources/lang/CURRENT_LOCALE/* to global JS variable
            $lang_files = File::files(resource_path() . '/lang/' . App::getLocale());
            $trans = [];
            foreach ($lang_files as $f) {
                $filename = pathinfo($f)['filename'];
                $trans[$filename] = trans($filename);
            }
            $trans['adminlte_lang_message'] = trans('adminlte_lang::message');
            echo json_encode($trans);
        @endphp
    </script>
</head>
