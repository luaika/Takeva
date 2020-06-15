<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="<?php echo e(asset('css/estilos.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="<?php echo e(asset('js/main.js')); ?>"></script>

</head>
<body> 
    <div id="app">
       
<nav class="navbar navbar-expand-lg navbar-light bg-light menu">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">

        <a class="nav-item nav-link divMenu" class="active" href="#">Inicio</a>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle divMenu" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Parámetros</a>
            <div class="dropdown-menu menu">
              <a class="dropdown-item divMenu" href="/vehiculos/crearTerceros">Registrar terceros</a>
              <a class="dropdown-item divMenu" href="/vehiculos/registrarVehiculo">Registrar vehículos</a>
              <a class="dropdown-item divMenu" href="/vehiculos/registrarRutas">Registar rutas</a>
              <a class="dropdown-item divMenu" href="/vehiculos/crearHorario">Registrar horarios</a>
            </div>
          </li>
          <li class="nav-item dropdown menu">
            <a class="nav-link dropdown-toggle divMenu" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Rodamiento</a>
            <div class="dropdown-menu menu">
              <a class="dropdown-item divMenu" href="/vehiculos/consultarVehiculosRutas">Consultar rutas y vehículos</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle divMenu" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Despachos</a>
            <div class="dropdown-menu menu">
              <a class="dropdown-item divMenu" href="/vehiculos/rutavehiculo">Rutas y vehiculos en tiempo real</a>
              <a class="dropdown-item divMenu" href="/vehiculos/despacho">Despachos</a>
            </div>
          </li>
          <a class="nav-item nav-link divMenu" href="#">Estadisticas y Comparativos</a>
      </div>
    </div>
    <button type="button" class="btn botonAgregar botones text-white btn-cerrarSesion">Cerrar sesión</button>
  </nav>
        <main class="py-4 " >
            <?php echo $__env->yieldContent('content'); ?>
          
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\Users\ACER\Documents\proyecto_takeva\Takeva\resources\views/layouts/app.blade.php ENDPATH**/ ?>