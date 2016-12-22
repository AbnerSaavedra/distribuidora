<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'Default') | Panel de administración</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href="{{asset('bootstrap/css/bootstrap.css')}}">

</head>
<header class="container-fluid" style="background:#5a4181">

     <div class="col-xs-1">

         <!--<img src="http://www.joncar.info/img/d307d-bootstrap.png" style="width:100%">-->
         <h2 style="align:center; color: white">Distribuidora Ricamar</h2>

     </div>

 </header>
 @include('admin.template.partials.nav')
 <body>
 <section>
 	<div class="container-fluid">
    @include('flash::message')
 		@yield('content')
 	</div>
 </section>
 </body>
<footer class="row container-fluid navbar-fixed-bottom">
      <div class="large-12 columns">
        <hr/>
        <div class="row">
          <div class="large-6 columns">
            <p style="text-align: center;">Distribuidora Ricamar&nbsp;&copy; Copyright <?php echo date('Y'); ?>.</p>
          </div>
        </div>
      </div>
</footer>
<script type="text/javascript" src="{{asset('jquery/jquery-3.1.1.js')}}"></script>
<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
</html>