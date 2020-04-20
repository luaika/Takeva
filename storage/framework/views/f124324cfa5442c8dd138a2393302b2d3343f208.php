<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="public\css\estilos.css">



<?php $__env->startSection('content'); ?>

<div class="container">

<div style="float:left; padding: 15px 30px">
    <img src="/images/Logo.png">
</div>
        <div>
            <br>
            <div style="float:right; padding: 8px 50px">
            <div class="card" style="width:450px">
            <br>
                <b><div class="form-group row" style="justify-content:center"><?php echo e(__('Iniciar sesión')); ?></div><b>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row" style="justify-content:center">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Correo')); ?></label> -->

                            <div style="position:relative">
                                <i class="fas fa-envelope" style="color:#aaa; padding: 10px 8px; position:absolute; left:0%; top:8%"  required autocomplete="email" autofocus></i>
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
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Contraseña')); ?></label> -->


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
                                <!--  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                  <label class="form-check-label" for="remember">
                                        <?php echo e(__('Recordar')); ?>

                                    </label>
                                </div>  -->

                            <br>
                                <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Olvidaste tu contraseña')); ?>

                                    </a>
                                <?php endif; ?>

                            </div>
                        </div>

                        <br>
                        <div class="form-group row mb-0" style="justify-content:center">

                            <div>
                                <b><button class="btn" type="submit" style="background-color: #787473; Font-Family: verdana; color:white"><b>
                                    <?php echo e(__('Registrarse')); ?>

                                </button>

                                <b><button type="submit" class="btn" style="background-color: #F55804; Font-Family: verdana;  color:white" ><b>
                                    <?php echo e(__('Ingresar')); ?>

                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Estefania\Documents\LARAVEL\TAKEVA-20200417T212528Z-001\TAKEVA\resources\views/auth/login.blade.php ENDPATH**/ ?>