<?php $__env->startSection('style_css'); ?>

<style>
    body {
        overflow-y: hidden;
        margin: 0 !important;
        margin-bottom: 0 !important;
    }

    .main {
        background-color: unset !important;
        background-image: linear-gradient(-41deg, #00c8ff, #092c79);
        height: 100vh;
    }

    figure {
        margin-bottom: 0 !important;
    }

    .signin-content {
        padding-top: 30px !important;
        padding-bottom: 30px !important;
    }

    .signup-image-link {
        margin-top: 2rem;
    }

    .signin-form {
        margin-top: 1rem;
    }

    .form-title {
        text-align: center;
        font-size: 30px;
    }

    .form-submit {
        padding-top: 11px !important;
    }

    .btn-login {
        border-radius: 100px !important;
        width: 9rem !important;
        height: 2.5rem;
        background-image: linear-gradient(-30deg, #00c8ff, #057abc);
    }

    .btn-kembali {
        border-radius: 100px !important;
        width: 9rem !important;
        float: right;
        height: 2.5rem;
        background-image: linear-gradient(-30deg, #00c8ff, #057abc);
    }
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Sing in  Form -->
<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="/assets/img/signin-image.jpg" alt="sing up image"></figure>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Login Siswa</h2>
                <form action="<?php echo e(route('loginSiswaStore')); ?>" method="POST" class="register-form" id="login-form">

                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" id="email" value="<?php echo e(old('email')); ?>" required placeholder="Email" />

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

                    <div class="form-group">
                        <label for="password"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" id="password" value="<?php echo e(old('password')); ?>" required placeholder="Password" />

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

                    <div class="form-group">
                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                        <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit btn-login" value="Masuk" />
                        <a href="<?php echo e(route('home')); ?>">
                            <input type="button" name="signin" id="signin" class="form-submit btn-kembali" value="Kembali" />
                        </a>
                    </div>
                </form>
                <!-- <a href="<?php echo e(route('formRegisterSiswa')); ?>" class="signup-image-link">Create an account</a> -->
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.authTemplate.AppLogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeeckr/Documents/Laravel/Elearning/resources/views/authUser/login/loginSiswa.blade.php ENDPATH**/ ?>