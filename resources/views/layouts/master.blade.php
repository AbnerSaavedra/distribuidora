<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Distribuidora</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href="{{asset('bootstrap/css/bootstrap.css')}}">

</head>
<header class="container-fluid" style="background:#5a4181">

     <div class="col-xs-1">

         <!--<img src="http://www.joncar.info/img/d307d-bootstrap.png" style="width:100%">-->
         <h2 style="align:center; color: white">Distribuidora Ricamar</h2>

     </div>

 </header>
 <body>
 	@yield('content')
 </body>
<footer class="row">
      <div class="large-12 columns">
        <hr/>
        <div class="row">
          <div class="large-6 columns">
            <p>&copy; Copyright <?php echo date('Y'); ?>.</p>
          </div>
        </div>
      </div>
</footer>
</html>