<?php $__env->startSection('content'); ?>

<div class="container ">
    <div class="cardHorario">
        <div class="modal-header encabezadoFormulario" >
                    <h4 class="modal-title text-white" id="exampleModalLabel" style="text-align: center;" >Habilitar horarios</h5>
                </div>
                <br>
                <div class="card-bady contenidoFormulario" style="background-color: #F1F1EF;">
                    <form>
                        <div class="form-group col-md-12" >
                            <label >Hora</label>
                            <!--<i class="fas fa-clock iconos"></i>-->
                            <input type="time" class="form-control" >
                        </div>
                        <div class="form-group col-md-12">
                            <label >Fecha</label>
                            <!--<i class="far fa-calendar-alt iconos"></i>-->
                            <input type="date" class="form-control" >
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
                        <button class="btn botonCancelar botones" type="submit" >Cancelar</button>
                        <button class="btn botonAgregar botones" type="submit">Agregar</button>
                    </div>
                    <br>
             </form>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Estefania\Documents\PROYECTO TAKEVA\Takeva\resources\views/vehiculos/crearHorarios.blade.php ENDPATH**/ ?>