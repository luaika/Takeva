<?php $__env->startSection('content'); ?>
<div class="container contaRuta">
    <div class="card cardRutas">
    <div class="modal-header encabezadoFormulario" >
            <h4 class="text-center text-white" id="exampleModalLabel">Registrar Rutas</h5>
        </div>
      

        <form class="formularioRutas">

            <div class="row">

            <div class="form-group col-md-6">
                <label for="validationServer01">Codigo</label>
                <i class="fas fa-asterisk iconosRutas"></i>
                <input type="text" class="form-control inputRutas" id="validationServer01" required>
            </div>

            <div class="form-group col-md-6">
                <label for="validationServer01">Descripción</label>
                <i class="far fa-edit iconosRutas"></i>
                <input type="text" class="form-control inputRutas" id="validationServer01" required>
            </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                <label for="validationServer01">Origen</label>
                <i class="fas fa-map-marker-alt iconosRutas"></i>
                <input type="text" class="form-control inputRutas"required>
                </div>

                <div class="form-group col-md-6">
                <label for="validationServer01">Destino</label>
                <i class="fas fa-map-marked-alt iconosRutas"></i>
                <input type="text" class="form-control inputRutas" required>
                </div>
            </div>

            <div class="row">
            <div class="form-group col-md-6">
                <label for="validationServer01">Fecha Creación</label>
                <input type="date" class="form-control" value="2020-01-01" required>
            </div>

            <div class="form-group col-md-6">
                <label for="validationServer01">Fecha Modificación</label>
                <input type="date" class="form-control" value="2020-01-01" required>
            </div>
            </div>

            <div class="btn-width">
                <button class="btn  botonCancelar botones" type="submit">Cancelar</button>

                <button class="btn botonAgregar botones" type="submit">Agregar</button>
            </div>
        </div>
    </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\Documents\proyecto_takeva\Takeva\resources\views/rutasTerceros/registrarRutas.blade.php ENDPATH**/ ?>