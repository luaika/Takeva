@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
        <div class="col-md-12 mx-auto " >
            <div class="card fondoFormulario" >
                <div class="modal-header  encabezadoFormulario" >
                    <h4 class="modal-title text-white" id="exampleModalLabel" style="text-align: center;" >Habilitar horarios</h5>
                </div>
                <div class="card-bady contenidoFormulario" >
                    <form >
                        <div class="form-group col-md-12">
                            <label >Hora</label>
                            <i class="fas fa-clock iconos"></i>
                            <input type="time" class="form-control inputTeceros" >
                        </div>
                        <div class="form-group col-md-12">
                            <label >Fecha</label>
                            <i class="far fa-calendar-alt iconos"></i> 
                            <input type="date" class="form-control inputTeceros" >
                        </div>
                        <div class="form-group col-md-12">
                            <label >Ruta</label>
                            <i class="fas fa-route iconos"></i>
                            <input type="text" class="form-control inputTeceros" >
                        </div>
                        <div class="form-group col-md-12">
                             <label >Vehiculo</label>
                             <i class="fas fa-bus iconos"></i>
                            <input type="text" class="form-control inputTeceros" >
                        </div> 
                        </div>
                        <div class="btn-width">               
                            <button type="submit" class="btn botonCancelar botones">Cancelar</button>
                            <button type="submit" class="btn botonAgregar botones">Agregar</button>
                        </div>
                    </form>
           
        </div>
    </div>
</div>
</div>
@endsection 