<?php $__env->startSection('content'); ?>


<div class="container">

  <div class="row">
    <div class="col-sm-6">
      <div class="card border-primary cardComparativos">
        <div class="card-header border-primary">Comparativos</div>
        <div class="card-body">
          <p class="card-text"><img class="imgComparativos" src="<?php echo e(asset('images/Comparativos.jpg')); ?>"></p>
          <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card border-primary cardComparativos">
        <div class="card-header border-primary">Históricos</div>
        <div class="card-body">
            <p class="card-text"><img class="imgHistoricos" src="<?php echo e(asset('images/historicos.png')); ?>"></p>
             <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Estefania\Documents\PROYECTO TAKEVA\Takeva\resources\views/pasajeros/comparativosHistoricos.blade.php ENDPATH**/ ?>