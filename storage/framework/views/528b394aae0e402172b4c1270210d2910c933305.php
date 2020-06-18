<?php $__env->startSection('content'); ?>

<div  style="width:90%;margin-left:5%;">
<div>
    <div class="card  fondoFormulario" >
        <div class="modal-header encabezadoFormulario mb-3" >
                <h4 class="modal-title text-white" id="exampleModalLabel" style="text-align: center;" >Registrar vehículo</h4>
        </div>
        <div class="card-bady contenidoFormulario" >
        <form>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label>Placa</label>
                        <i class="fas fa-digital-tachograph iconos"></i>
                        <input type="text" class="form-control inputTeceros">
                    </div>
                    <div class="col">
                        <label >Matrícula</label>
                        <i class="far fa-credit-card iconos"></i>
                        <input type="text" class="form-control inputTeceros">
                    </div>
                    <div class="col">
                        <label >Servicio</label>
                        <i class="far fa-edit iconos"></i>
                        <input type="text" class="form-control inputTeceros">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="">Clase</label>
                        <i class="fas fa-bus iconos"></i>
                        <input type="text" class="form-control inputTeceros">
                    </div>
                    <div class="col">
                        <label for="">Marca</label>
                        <i class="far fa-edit iconos"></i>
                        <input type="text" class="form-control inputTeceros" >
                    </div>
                    <div class="col">
                        <label for="">Color</label>
                        <i class="fas fa-palette iconos"></i>
                        <input type="text" class="form-control inputTeceros">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="">Carroceria</label>
                        <i class="far fa-edit iconos"></i>
                        <input type="text" class="form-control inputTeceros">
                    </div>
                    <div class="col">
                        <label for="">Combustible</label>
                        <i class="fas fa-gas-pump iconos"></i>
                        <input type="text" class="form-control inputTeceros">
                    </div>
                    <div class="col">
                        <label for="">Linea</label>
                        <i class="far fa-edit iconos"></i>
                        <input type="text" class="form-control inputTeceros">
                    </div>

                </div>
           </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-4">
                        <label for="">Modelo</label>
                        <i class="far fa-edit iconos"></i>
                        <input type="" class="form-control inputTeceros">
                    </div>
                    <div class="col">
                        <label for="">Número de serie</label>
                        <i class="fas fa-hashtag iconos"></i>
                        <input type="number" class="form-control inputTeceros">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="">Número de chasis</label>
                        <i class="fas fa-hashtag iconos"></i>
                        <input type="number" class="form-control inputTeceros">
                    </div>
                    <div class="col">
                        <label for="">Número de motor</label>
                        <i class="fas fa-hashtag iconos"></i>
                        <input type="number" class="form-control inputTeceros">
                    </div>
                </div>
           </div>


           <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="">Número de puertas</label>
                        <i class="fas fa-hashtag iconos"></i>
                        <input type="number" class="form-control inputTeceros">
                    </div>

                    <div class="col">
                        <label for="">Número de pasajeros</label>
                        <i class="fas fa-users iconos"></i>
                        <input type="number" class="form-control inputTeceros">
                    </div>
                </div>
            </div>

             <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="">Observaciones</label>
                        <i class="fas fa-hand-point-right iconos"></i>
                        <input type="text" class="form-control inputTeceros">

                    </div>
                    <div class="col">
                        <label for="">Estado</label>
                        <i class="far fa-edit iconos"></i>
                        <input type="text" class="form-control inputTeceros">

                    </div>
                </div>
            </div>
            <div class="form-goup">
                <div class="">
                    <ul class="tabs">
                        <li class="tab"><a href="#tab1"><span class="fas fa-digital-tachograph "></span><span class="tab-text">Matrícula</span></a></li>
                        <li class="tab"><a href="#tab2"><span class="fas fa-file-alt"></span><span class="fas fa-search"></span><span class="tab-text">Póliza</span></a></li>
                        <li class="tab"><a href="#tab3"><span class="fas fa-briefcase"></span><span class="tab-text">Operación</span></a></li>
                        <li class="tab"><a href="#tab4"><span class="fas fa-screwdriver"></span><span class="tab-text">RTM</span></a></li>
                        <li class="tab"><a href="#tab5"><span class="fas fa-users "></span><span class="tab-text">Terceros</span></a></li>
                        <li class="tab"><a href="#tab6"><span class="fas fa-route "></span><span class="tab-text">Rutas</span></a></li>
                   </ul>

                    <div class="form-goup secciones">
                        <div id="tab1">
                                <table class="table md-7" >
                                <thead class=" encabezadoFormulario text-white " >
                                    <tr>
                                    <th class="thRegiVehiculo" scope="col"># Licencia Transito</th>
                                    <th class="thRegiVehiculo" scope="col">Fecha Registro</th>
                                    <th class="thRegiVehiculo" scope="col">Tipo Registro</th>
                                    <th class="thRegiVehiculo" scope="col">Observaciones</th>
                                    <th class="thRegiVehiculo" scope="col">Estado</th>
                                    <th class="thRegiVehiculo" scope="col">Fecha Creación</th>
                                    <th class="thRegiVehiculo" scope="col">Fecha Modificación</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th>1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td >@mdo</td>
                                    <td >@mdo</td>
                                    <td >@mdo</td>
                                    <td >@mdo</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div id="tab2">
                            <table class="table md-7" >
                            <thead class=" encabezadoFormulario text-white " >
                                    <tr>
                                    <th class="thRegiVehiculo" scope="col">Descripción</th>
                                    <th class="thRegiVehiculo" scope="col">Aseguradora</th>
                                    <th class="thRegiVehiculo" scope="col">Número</th>
                                    <th class="thRegiVehiculo" scope="col">Fecha expide</th>
                                    <th class="thRegiVehiculo" scope="col">Fecha inicio</th>
                                    <th class="thRegiVehiculo" scope="col">Fecha vence</th>
                                    <th class="thRegiVehiculo" scope="col">Observación</th>
                                    <th class="thRegiVehiculo" scope="col">Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th>1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td >@mdo</td>
                                    <td >@mdo</td>
                                    <td >@mdo</td>
                                    <td >@mdo</td>
                                    <td >@mdo</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div id="tab3">
                            <table class="table">
                            <thead class="encabezadoFormulario text-white " >
                                <tr>
                                <th class="thRegiVehiculo"  scope="col" rowspan="2"># Tarjeta Operación</th>
                                <th class="thRegiVehiculo" scope="col" colspan="4" style="border:2px solid white !important; text-align:center !important;">Fecha</th>
                                <th class="thRegiVehiculo" scope="col" rowspan="2">Observaciones</th>
                                <th class="thRegiVehiculo" scope="col" rowspan="2">Estado</th>
                                </tr>
                                <tr>
                                <th scope="col">Vigencia Inicia</th>
                                <th scope="col">Vigencia Fin</th>
                                <th scope="col">Creación</th>
                                <th scope="col">Modificación</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td >@mdo</td>
                                <td >@mdo</td>
                                <td >@mdo</td>
                                <td >@mdo</td>

                                </tr>
                            </tbody>
                            </table>
                        </div>

                        <div id="tab4">
                            <table class="table md-7" >
                            <thead class="encabezadoFormulario text-white " >
                            <tr>
                                <th scope="col" rowspan="2"># Certificado</th>
                                <th scope="col" colspan="5" style="border:2px solid white !important; text-align:center !important;">Fecha</th>
                                <th scope="col" rowspan="2">Observaciones</th>
                                <th scope="col" rowspan="2">Estado</th>
                                </tr>
                                <tr>
                                <th scope="col">Expedición</th>
                                <th scope="col">Vigencia Inicia</th>
                                <th scope="col">Vigencia Fin</th>
                                <th scope="col">Creación</th>
                                <th scope="col">Modificación</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td >@mdo</td>
                                <td >@mdo</td>
                                <td >@mdo</td>
                                <td >@mdo</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>


                        <div id="tab5">
                            <table class="table md-7" >
                            <thead class=" encabezadoFormulario text-white " >
                            <tr>
                                <th scope="col" colspan="4" style="border:2px solid white !important; text-align:center !important;">Fecha</th>
                                <th scope="col" rowspan="2">Observaciones</th>
                                <th scope="col" rowspan="2">Estado</th>
                                </tr>
                                <tr>
                                <th scope="col">Inicio</th>
                                <th scope="col">Fin</th>
                                <th scope="col">Creación</th>
                                <th scope="col">Modificación</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td >@mdo</td>
                                <td >@mdo</td>
                                <td >@mdo</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>


                        <div id="tab6">
                            <table class="table md-7" >
                            <thead class=" encabezadoFormulario text-white " >
                                <tr>
                                <th scope="col">Observaciones</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Fecha Creación</th>
                                <th scope="col">Fecha Modificación</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td >@mdo</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                <div  class="btn-width ">
                    <button type="submit" class="btn botonCancelar botones">Cancelar</button>
                    <button type="submit" class="btn botonAgregar botones" >Agregar</button>
                </div>
                <br>
            </div>
        </form>
        </div>
   </div>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Estefania\Documents\PROYECTO TAKEVA\Takeva\resources\views/vehiculos/registro.blade.php ENDPATH**/ ?>