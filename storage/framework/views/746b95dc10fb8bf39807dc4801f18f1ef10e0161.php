<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">




<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card fondoFormulario" >
                <div class="modal-header encabezadoFormulario mb-3" >
                    <h4 class="modal-title text-white" id="exampleModalLabel" style="text-align: center;" ><?php echo e(__('Restablecer Contraseña')); ?></h5>
                </div>
                <div class="card-body contenidoFormulario" >
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo csrf_field(); ?>
                            <div class="form-group col-md-12 row" style="position:relative;">
                                <label>Correo</label>
                                <i class="fas fa-envelope iconos" ></i>
                                <input id="email" type="email"  class="inputTeceros form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group col-md-11 ">
                                    <button type="submit" class=" btn botonAgregar botones btn-width-ag">
                                        <?php echo e(__('Enviar enlace')); ?>

                                    </button>
                            
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\Documents\proyecto_takeva\Takeva\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>