<!DOCTYPE html>
<html lang="en">
​<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crea tu blog con Laravel 5.1</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

​
​    @yield('css')
​
  </head>
  <body>

    <!-- Contenido -->
    <section class="container">
​     @yield('content')
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>

​    @yield('js')
​
​  </body>
</html>
