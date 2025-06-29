<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Church Manager" />
    <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager" />
    <link rel="stylesheet" href="<?php echo asset('css/login.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/fontawesome-free-6.5.2-web/css/all.min.css') ?>" type="text/css">
    <!----Name of page---->

    <title>Login Page</title>
    <title>Login</title>
</head>

<body>

<?php if (isset($component)) { $__componentOriginalb24df6adf99a77ed35057e476f61e153 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb24df6adf99a77ed35057e476f61e153 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.validation-errors','data' => ['class' => 'mb-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb24df6adf99a77ed35057e476f61e153)): ?>
<?php $attributes = $__attributesOriginalb24df6adf99a77ed35057e476f61e153; ?>
<?php unset($__attributesOriginalb24df6adf99a77ed35057e476f61e153); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb24df6adf99a77ed35057e476f61e153)): ?>
<?php $component = $__componentOriginalb24df6adf99a77ed35057e476f61e153; ?>
<?php unset($__componentOriginalb24df6adf99a77ed35057e476f61e153); ?>
<?php endif; ?>

    <?php $__sessionArgs = ['status'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
    <div class="mb-4 font-medium text-sm text-green-600">
        <?php echo e($value); ?>

    </div>
    <?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>

    <!--Login form-->
    <div class="input-group">
        <form method="POST" autocomplete="on" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

            <div class="logo">
                <a class="navbar-brand brand-logo-mini" href="/"><img src="/images/sda.png" class="sda_logo"></a>

                <h2 class="login_word_on_form">Login</h2>
                <div class="input-group">
                    <input id="email" name="email" :value="old('email')" type="email" required autofocus autocomplete="username" class="input">
                    <label for="email" class="placeholder" value="<?php echo e(__('Email')); ?>" data-icon="e">Email Address</label>
                    <div class="input-group">
                        <input id="password" name="password" required autocomplete="current-password" type="password" class="input_1">
                        <label for="password" data-icon="p" value="<?php echo e(__('Password')); ?>" class="placeholder_1">Password</label>
                        <button type="submit" name="login" class="submitbtn" value="submit">&nbsp;&nbsp;<i class="fa-solid fa-right-to-bracket"></i>&nbsp;<?php echo e(__('Log in')); ?>&nbsp;</button>
                        <div class="keep_login">
                                <p class="keeplogin">
                                    <input type="checkbox" class="checkbox-input" name="remember_me" id="remember" value="loginkeeping" />
                                    <label for="remember_me" class="checkbox-label"><?php echo e(__('Remember me')); ?></label>
                                </p>

                            </div>

                        <div class="rmember">
                                <p class="member">Not a member yet?</p>
                            </div>

                            <div class="signbtn">
                                <a href="<?php echo e(route('register')); ?>" class="to_register">
                                    <button type="button" class="signupbtn">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-user-plus"></i>&nbsp;Signup</button>
                                </a>
                            </div>
                        <div class="flex items-center justify-end mt-4">
                            <?php if(Route::has('password.request')): ?>
                            <a class="forgotpass" href="<?php echo e(route('password.request')); ?>">
                                <?php echo e(__('Forgot your password?')); ?>

                            </a>
                            <?php endif; ?>




                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#signin').tooltip('show');
                                    $('#signin').tooltip('hide');
                                });
                            </script>
        </form>
    </div>
    <script src="/images/script.js"></script>
</body>

</html>
<?php /**PATH C:\Users\Moses Blake Simataa\Videos\Moses Simataa Project Review\Application\church\church\resources\views/auth/login.blade.php ENDPATH**/ ?>