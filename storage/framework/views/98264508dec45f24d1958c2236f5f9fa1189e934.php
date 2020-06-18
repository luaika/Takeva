<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>-->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="<?php echo e(asset('css/estilos.css')); ?>" rel="stylesheet">
</head>

<body>


    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light menu">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link divMenu" class="active" href="/inicio">Inicio</a>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle divMenu" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Parámetros</a>
            <div class="dropdown-menu menu">
              <a class="dropdown-item divMenu" href="/vehiculos/crearTerceros">Registrar terceros</a>
              <a class="dropdown-item divMenu" href="/vehiculos/registrarVehiculo">Registrar vehículos</a>
              <a class="dropdown-item divMenu" href="/vehiculos/registrarRutas">Registar rutas</a>
              <a class="dropdown-item divMenu" href="/vehiculos/crearHorario">Registrar horarios</a>
              <!--<a class="dropdown-item divMenu" href="#">Disponibilidad de reservas</a>-->
            </div>
          </li>
          <li class="nav-item dropdown menu">
            <a class="nav-link dropdown-toggle divMenu" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Rodamiento</a>
            <div class="dropdown-menu menu">
              <!--<a class="dropdown-item divMenu" href="#">Asignar Rutas</a>-->
              <a class="dropdown-item divMenu" href="/vehiculos/consultarVehiculosRutas">Consultar rutas y vehículos</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle divMenu" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Despachos</a>
            <div class="dropdown-menu menu">
              <a class="dropdown-item divMenu" href="/vehiculos/rutavehiculo">Rutas y vehiculos en tiempo real</a>
              <a class="dropdown-item divMenu" href="/vehiculos/despacho">Despachos</a>
              <a class="dropdown-item divMenu" href="/vehiculos/cantidadPasajeros">Cantidad de pasajeros movilizados</a>
              <a class="dropdown-item divMenu" href="/vehiculos/comparativosHistoricos">Comparativos e históricos</a>
              <!--<a class="dropdown-item divMenu" href="#">Reporte de novedades</a>-->
              <a class="dropdown-item divMenu" href="/vehiculos/reporteCalificacionServicio">Reporte de calificación del servicio</a>
            </div>
          </li>
          <!--<a class="nav-item nav-link divMenu" href="/vehiculos/estadisticasComparativos">Estadisticas y Comparativos</a>-->
      </div>
    </div>
    <button type="button" class="btn btn-cerrarSesion">Cerrar sesión</button>
  </nav>

        <main class="py-4 " >
            <?php echo $__env->yieldContent('content'); ?>
        </main>

    </div>
</body>
</html>
<?php /**PATH C:\Users\Estefania\Documents\PROYECTO TAKEVA\Takeva\resources\views/layouts/app.blade.php ENDPATH**/ ?>