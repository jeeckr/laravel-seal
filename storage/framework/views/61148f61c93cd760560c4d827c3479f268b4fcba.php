<html>

<head>

    <link rel="stylesheet" type="text/css" href="/loginAdmin/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/loginAdmin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="/loginAdmin/fonts/iconic/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" type="text/css" href="/loginAdmin/vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="/loginAdmin/vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="/loginAdmin/vendor/animsition/css/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="/loginAdmin/vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="/loginAdmin/vendor/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="/loginAdmin/css/util.css">
    <link rel="stylesheet" type="text/css" href="/loginAdmin/css/main.css">

    <style>
        .wrap-login100 {
            width: 400px !important;
            height: 80vh !important;
            padding: 40px 45px 37px 45px !important;
        }
    </style>

</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="<?php echo e(route('loginAdminStore')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <span class="login100-form-logo">
                        <i class="zmdi zmdi-landscape"></i>
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Log in
                    </span>

                    <div class="wrap-input100 validate-input">
                        <input class="input100 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="email" name="email" id="email" name="email" value="<?php echo e(old('email')); ?>" required placeholder="Email">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>

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

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="password" name="password" id="password" name="password" value="<?php echo e(old('password')); ?>" required placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>

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

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" name="login">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>



    <script src="/loginAdmin/vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="/loginAdmin/vendor/animsition/js/animsition.min.js"></script>

    <script src="/loginAdmin/vendor/bootstrap/js/popper.js"></script>
    <script src="/loginAdmin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="/loginAdmin/vendor/select2/select2.min.js"></script>

    <script src="/loginAdmin/vendor/daterangepicker/moment.min.js"></script>
    <script src="/loginAdmin/vendor/daterangepicker/daterangepicker.js"></script>

    <script src="/loginAdmin/vendor/countdowntime/countdowntime.js"></script>

    <script src="/loginAdmin/js/main.js"></script>

</body>

</html><?php /**PATH /home/jeeckr/Documents/Laravel/Elearning/resources/views/login/loginAdmin.blade.php ENDPATH**/ ?>