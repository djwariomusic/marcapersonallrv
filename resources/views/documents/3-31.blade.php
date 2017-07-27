@extends('layouts.app2')

@section('contenido')
<!--/ banner -->
  <div class="banner1">
  		<div class="w3_agileits_service_banner_info">
  			<h2>DOCUMENTACIÓN DESARROLLO WEB</h2>
  		</div>
  	</div>
<!--/ banner -->
<div class="inner_main_agile_section">
  <div class="container">
  <h6>Desarrollo Web a la Medida</h6>
  <h3 class="w3l_header w3_agileits_header">Documentación <span class="fixed_w3">Etapa Diseño</span></h3>

        <div class="agile_inner_grids">
          <div class="col-md-12 wthree_services_grid_left">
    				<br>
    				<h3><span>COMPONENTES FÍSICOS Y LÓGICOS</span> </h3>
            <p>Para el funcionamiento de este sistema de información se necesitan componentes físicos y
              lógicos que interactuaran para que se dé el funcionamiento esperado. Los siguientes componentes
              físicos son recomendados para la creación de una stage area la cual permita recrear al máximo un
              servidor en condiciones básicas para producción.
            </p>
            <strong>COMPONENTES FÍSICOS</strong><br><br>
            <ol>
              <li>Equipo Computo PC de siguientes características:</li>
              <br>•	Memoria swap: 4gb.
              <br>•	Disco Duro: mínimo 60gb recomendado 120 gb.
              <br>•	Memoria RAM: 1.5 gb por cada 500 usuarios concurrentes.
              <br>•	Memoria cache: 500 mb.
              <br>•	2 procesadores: Intel x86 2.4 ghz.<br><br>
              <li>Proveedor de Internet 5 a 10 Megas.</li>
              <br>•	Apertura de Puertos 80 http.
              <br>•	Configuración Router DMZ IP Privada de Servidor Web.
            </ol>
            <strong>COMPONENTES LÓGICOS</strong><br><br>
            <p>Los componentes lógicos mencionados son lenguajes de Programación, Librerias, Frameworks,
              Servidores de Datos, Herramientas de Testing y el uso de contenedores como Docker para su
              implementación en la nube como puede ser Google App Engine o Heroku lo cual permite acceder
              a una serie de características impensables versus un servidor de Hosting tradicional.
            </p>
            <ol>
              <li>Servidor Apache 2.4.xx WEB XAMPP 3.2.2. y PHP 5.5.</li>
              <li>Composer y Creación de Proyecto PHP Laravel 5.14.</li>
              <li>Control de Versiones por medio de Git y Github.</li>
              <li>Uso de Librerías y API Especializadas como Bootstrap, Jquery, ChartJS, Facebook API, Google Maps API.</li>
              <li>Configuración Motor de Base de Datos PostgreSQL 1.20.xx .</li>
              <li>Testing con PHPUnit, Selenium, Travis, Sonarqube.</li>
              <li>Navegador de Internet (Chrome 55.xx Pc, Chrome Mobile 53.xx).</li>
              <li>Editor Atom 1.18(Recomendado).</li>
            </ol>
            <br>
            <strong>1. Servidor Apache 2.4.xx WEB XAMPP 3.2.2. y PHP 5.5.</strong><br>
            <p>Este tipo de Suite de Programacion y Desarrollo Web no solo nos instala y configura los servicios web
              proporcionados por Apache, si no que tambien nos brinda un buen motor de base de datos llamado Maria DB
              sucesor de MySQL tras la venta de este producto a Sun Microsystems. Se encuentra acompañado de PHP y
              Perl como herramientas para establecer el Backend, permitiendo la interacción con el servidor de Datos.
            </p>
            <br>
            <strong>2. Composer y Creación de Proyecto PHP Laravel 5.14.</strong><br>
            <p>La forma más sencilla de instalar Composer en tu ordenador Windows consiste en descargar y ejecutar
              el archivo <a href="https://getcomposer.org/Composer-Setup.exe">Composer-Setup.exe</a>, que instala la
              versión más reciente de Composer y actualiza el PATH de tu ordenador para que puedas ejecutar Composer
              simplemente escribiendo el comando composer. Laravel necesita previamente un servidor web que puede
              ser el recomendado anteriormente.<br>
              La manera más rápida de instalar Laravel es vía Composer. Abrimos un terminal ('cmd') y nos ubicamos
              en la ruta C:/xampp/htdocs que es donde ira nuestro proyecto.Una vez situados en el directorio,
              ejecutaremos el siguiente comando para crear el proyecto en Laravel:
              <br><font color="#0ac876" style="font-family:'Courier New'">composer create-project laravel/laravel --prefer-dist Proyecto</font>
            </p>
            <p>Es de vital importancia comprender la estructura de archivos a la cual nos enfrentaremos para asi mismo
              poder interactuar con el Framework Laravel. Les recomiendo el siguiente link el cual existe una descripción
              completa de la Estructura de un Proyecto Laravel <a href="https://richos.gitbooks.io/laravel-5/content/capitulos/chapter4.html">
              ('Gitbook-Laravel')</a>. Es necesario el conocimiento del sistema de archivos manejado por Laravel ya sobre
              este construiremos el Modelo Vista Controlador basado en rederizacion de HTML por medio de URL's.            
              <br><font color="#0ac876" style="font-family:'Courier New'">composer create-project laravel/laravel --prefer-dist Proyecto</font>
            </p>
            <br>
            <strong>3. Control de Versiones por medio de Git y Github.</strong><br>
            <p>Tecnólogo o Ingeniero de Sistemas o carreras afines con el diseño gráfico, con experiencia y
              conocimientos en maquetación web HTML5, CSS3, JavaScript y PHP Básico. Con cualidades de
              creatividad y ampliamente comunicativo.
            </p>
            <br>
            <strong>4. Uso de Librerías y API Especializadas como Bootstrap, Jquery, ChartJS, Facebook API, Google Maps API.</strong><br>
            <p>Tecnólogo o Ingeniero de Sistemas con conocimientos en múltiples lenguajes de programación como
              lo son PHP, Java, HTML, JavaScript, C++. Con cualidades que lo identifiquen como responsable y
              con sed de conocimiento.
            </p>
            <br>
            <strong>5. Configuración Motor de Base de Datos PostgreSQL 1.20.xx </strong><br>
            <p>Técnico o Tecnólogo en Sistemas que cumpla funciones de soporte técnico, documentador y
              capacitador de productos asociados al desarrollo software. Con cualidades en atención al cliente,
              identificación de fallas altamente proactivo,
            </p>
            <br>
            <strong>6. Implementación de Pruebas por medio de PHPUnit, Selenium, Sonarqube.</strong><br>
            <p>Técnico o Tecnólogo en Sistemas que cumpla funciones de soporte técnico, documentador y
              capacitador de productos asociados al desarrollo software. Con cualidades en atención al cliente,
              identificación de fallas altamente proactivo,
            </p>
            <br>
            <strong>7. Navegador de Internet (Chrome 55.xx Pc, Chrome Mobile 53.xx).</strong><br>
            <p>Técnico o Tecnólogo en Sistemas que cumpla funciones de soporte técnico, documentador y
              capacitador de productos asociados al desarrollo software. Con cualidades en atención al cliente,
              identificación de fallas altamente proactivo,
            </p>
            <br>
            <strong>8. Editor Atom 1.18(Recomendado).</strong><br>
            <p>Técnico o Tecnólogo en Sistemas que cumpla funciones de soporte técnico, documentador y
              capacitador de productos asociados al desarrollo software. Con cualidades en atención al cliente,
              identificación de fallas altamente proactivo,
            </p>
          </div>
      <div class="clearfix"><br> </div>
    			</div>
    </div>
  </div>

<script type="text/javascript" src="{{url('js/jquery-2.1.4.min.js')}}"></script>

@endsection
