<?php

Route::get('/registrarVehiculo', function(){
  return view('vehiculos/registro');
});

Auth::routes();

Route::get('/matricula', function(){
  return view('vehiculos/contenidoVehiculo/matricula');
});


Route::get('/crearHorario', function(){
  return view('vehiculos/crearHorarios');
});

Auth::routes();

Route::get('/consultarVehiculosRutas', function(){
  return view('vehiculos/consultarVehiculosRutas');
});

Auth::routes();

Route::get('/crearTerceros', function(){
  return view('rutasTerceros/crearTerceros');
});

Auth::routes();

Route::get('/registrarRutas', function(){
  return view('rutasTerceros/registrarRutas');
});

Auth::routes();

Route::get('/despacho', function(){
  return view('vehiculos/despacho');
});

Auth::routes();

Route::get('/rutavehiculo', function(){
  return view('vehiculos/rutasandvehiculos');
});

Auth::routes();

Route::get('/cantidadPasajeros', function(){
    return view('pasajeros/cantidadPasajeros');
  });
Auth::routes();

Route::get('/comparativosHistoricos', function(){
    return view('pasajeros/comparativosHistoricos');
  });
Auth::routes();

Route::get('/reporteCalificacionServicio', function(){
    return view('pasajeros/reporteCalificacionServicio');
  });
Auth::routes();

//Router::get('/registrar', 'VehiculosController@index')->name('vehiculos/registro');
