<?php $__env->startSection('content'); ?>

<div class="listado" style="width:80%;margin-left:10%;">
    <table class="table">
      <thead class="encabezadoFormulario text-white " >
        <tr>
          <th scope="col"></th>
          <th scope="col">Hora</th>
          <th scope="col">Placa</th>
          <th scope="col"># Ruta</th>
          <th scope="col">Despacho</th>
          <th scope="col">Observaciones</th>
        </tr>
      </thead>
      <tbody style="background:white;">
        <tr>
          <th scope="row">1</th>
          <td>2:00</td>
          <td>JLE34R</td>
          <td >26</td>
          <td><select style="width:37%" class="custom-select" required>
            <option>Si</option>
            <option>No</option>
          </select>
          </td>
          <td>Ninguna</td>
        </tr>
        <tr>
          <th scope="row">1</th>
          <td>2:00</td>
          <td>JLE34R</td>
          <td >26</td>
          <td><select style="width:37%" class="custom-select" required>
                <option>Si</option>
                <option>No</option>
              </select>
          </td>
          <td>Ninguna</td>
        </tr>
      </tbody>
    </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Estefania\Documents\PROYECTO TAKEVA\Takeva\resources\views/vehiculos/despacho.blade.php ENDPATH**/ ?>