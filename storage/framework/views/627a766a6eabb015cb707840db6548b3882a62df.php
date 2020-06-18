<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="card">
        <div class="modal-header encabezadoFormulario" >
            <h4 class="text-center text-white" id="exampleModalLabel">Registrar Terceros</h5>
        </div>

            <div class="card primerContenedor">
               <div class="row">
                <div class="form-group col-md-4">
                     <label>Identificación</label>
                        <i class="far fa-address-card iconos"></i>
                        <input type="text" class="form-control inputTeceros" required>
                </div>
                <div class="form-group col-md-1">
                    <label>D.V</label>
                    <input type="text" class="form-control inputTeceros" required>
               </div>
                <div class="form-group col-md-4">
                  <label>Tipo Documento</label>
                  <select class="custom-select" id="validationServer04" required>
                    <option>CC</option>
                    <option>TI</option>
                    <option>RC</option>
                  </select>
                </div>
                <div class="form-group col-md-3 divFoto">
                    <input id="inputFoto" placeholder="Foto" class="form-control col-md-6" required>
                </div>
               </div>
                <div class="row">
                 <div class="form-group col-md-6">
                     <label>Nombres</label>
                     <i class="far fa-edit iconos"></i>
                     <input type="text" class="form-control inputTeceros" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="validationServer02">Apellidos</label>
                    <i class="far fa-edit iconos"></i>
                    <input type="text" class="form-control inputTeceros"required>
                </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Razon social</label>
                        <i class="fas fa-users iconos"></i>
                        <input type="text" class="form-control inputTeceros" required>
                      </div>

                    <div class="form-group col-md-6">
                        <label>Nombre comercial</label>
                        <i class="fas fa-building iconos "></i>
                        <input type="text" class="form-control inputTeceros" required>
                      </div>
                    </div>
                    <div class="row">

              <div class="form-group col-md-6">
                <label>Fecha Nacimiento</label>
                <input type="date" class="form-control" value="2020-01-01" required>
              </div>
                    <div class="form-group col-md-6">
                        <label >Genero</label>
                          <select class="custom-select" required>
                            <option>Masculino</option>
                            <option>Femenino</option>
                            <option></option>
                          </select>
                      </div>
                    </div>
                </div>

                <div class="card segundoContenedor">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Telefono</label>
                        <i class="fas fa-phone-square iconos"></i>
                        <input type="text" class="form-control inputTeceros" required>
                      </div>
                    <div class="form-group col-md-4">
                      <label>Celular</label>
                      <i class="fas fa-mobile-alt iconos"></i>
                      <input type="text" class="form-control inputTeceros" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Correo</label>
                         <i class="far fa-envelope iconos"></i>
                         <input type="email" class="form-control inputTeceros" required>
                    </div>
                </div>
                    <div class="row">
                    <div class="form-group col-md-6">
                        <label>Dirección</label>
                         <i class="fas fa-map-marker-alt iconos"></i>
                         <input type="text" class="form-control inputTeceros" required>
                    </div><div class="form-group col-md-6">
                        <label>Ciudad</label>
                        <i class="fas fa-city iconos"></i>
                         <input type="text" class="form-control inputTeceros" required>
                    </div>
                    </div>
                </div>

            <div class="card tercerContenedor">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Tipo Tercero</label>
                        <select class="custom-select" required>
                            <option></option>
                          </select>
                      </div>

                      <div class="form-group col-md-6">
                        <label >Estado</label>
                          <select class="custom-select" required>
                            <option>Activo</option>
                            <option>Inactivo</option>
                            <option></option>
                          </select>
                      </div>
                </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label>Fecha Creación</label>
                <input type="date" class="form-control" value="2020-01-01" required>
              </div>

              <div class="form-group col-md-6">
                <label>Fecha Modificación</label>
                <input type="date" class="form-control" value="2020-01-01" required>
              </div>
        </div>
        <div class="btn-width">
            <button class="btn botonCancelar botones" type="submit" >Cancelar</button>
            <button class="btn botonAgregar botones" type="submit">Agregar</button>
        </div>

       </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Estefania\Documents\PROYECTO TAKEVA\Takeva\resources\views/rutasTerceros/crearTerceros.blade.php ENDPATH**/ ?>