<?php $__env->startSection('content'); ?>

<div class="container">

    <div style="float:left; padding: 5px 0px;">
        <!--<img src="/images/Logo.png"> -->
        <img src="/images/Logop1.png">
    </div>
    <div>
        <br>
        <div style="float:right; padding: 8px 0px">
            <div class="card fondoFormulario" style="width:450px">
            <br>
            <b>
                <div class="form-group row" style="justify-content:center"><?php echo e(__('Iniciar sesión')); ?></div>
                <b>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row" style="justify-content:center">
                            <div style="position:relative">
                                <i class="fas fa-envelope" style="color:#aaa; padding: 10px 8px; position:absolute; left:0%; top:8%"></i>
                                <input style="width:300px; padding: 15px 30px"  id="email" type="email" placeholder="Correo" class="form-control <?php $__errorArgs = ['email'];
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
                        </div>

                        <div class="form-group row" style="justify-content:center">
                            <div style="position:relative">
                                <i class="fas fa-lock" style="color:#aaa; padding: 9px 9px; position:absolute; left:0%; top:8%"></i>
                                <input style="width:300px; padding: 15px 30px" placeholder="Contraseña" id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">
                                    <?php $__errorArgs = ['password'];
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
                        </div>

                        <div class="form-group row" style="justify-content:center">
                            <div>
                                <br>
                                    <?php if(Route::has('password.request')): ?>
                                        <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                            <?php echo e(__('Olvidaste tu contraseña')); ?>

                                        </a>
                                    <?php endif; ?>

                            </div>
                        </div>

                            <br>
                        
                        <div>
                            <b><button type="submit" class="btn botonAgregar botones btn-width-ag"  ><b>
                                <?php echo e(__('Ingresar')); ?>

                            </button>
                        </div>
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\Documents\proyecto_takeva\Takeva\resources\views/auth/login.blade.php ENDPATH**/ ?>