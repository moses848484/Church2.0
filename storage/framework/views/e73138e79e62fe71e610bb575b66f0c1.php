<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Church Manager" />
    <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager" />
    <link rel="stylesheet" href="<?php echo asset('css/signup.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/fontawesome-free-6.5.2-web/css/all.min.css'); ?>" type="text/css">
    <title>Sign Up Page</title>
    <style>
        /* Autofill input styling */
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0 30px white inset !important;
            /* Changes background color */
            box-shadow: 0 0 0 30px white inset !important;
            -webkit-text-fill-color: #04AA6D !important;
            /* Changes text color */
        }
    </style>
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
    <div id="register" class="form-container">
        <form method="POST" autocomplete="on" action="<?php echo e(route('register')); ?>">
            <?php echo csrf_field(); ?>

            <div class="logo">
                <img src="/images/sda.png" class="sda_logo">
            </div>
            <h2 class="form-title">Sign up</h2>

            <div class="input-row">
                <div class="input-group">
                    <input id="name" name="name" :value="old('name')" type="text" required autofocus
                        autocomplete="name" class="input" />
                    <label for="name" value="<?php echo e(__('Name')); ?>" class="placeholder" data-icon="u">Name</label>
                </div>

                <div class="input-group">
                    <input id="email" name="email" :value="old('email')" type="email" required
                        autocomplete="email" class="input" />
                    <label for="email" value="<?php echo e(__('Email')); ?>" class="placeholder" data-icon="e">Email
                        Address</label>
                </div>


                <div class="input-group">
                    <input id="phone" name="phone" :value="old('phone')" type="number" required
                        autocomplete="phone" class="input" />
                    <label for="phone" value="<?php echo e(__('Phone')); ?>" class="placeholder" data-icon="u">Phone</label>
                </div>

                <div class="input-group">
                    <select class="gender-select" name="gender" id="gender" required="required" autocomplete="sex">
                        <option value="Select Gender">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="input-group">
                    <input id="address" name="address" :value="old('address')" type="text" required
                        autocomplete="address" class="input" />
                    <label for="address" value="<?php echo e(__('Address')); ?>" class="placeholder" data-icon="u">Address</label>
                </div>

                <div class="input-group">
                    <input id="birthday" type="date" name="birthday" min="1900-01-02" required="required"
                        class="input" autocomplete="bday">
                    <label for="birthday" class="placeholders" data-icon="u">Date Of Birth</label>
                </div>

                <div class="input-group">
                    <input id="password" name="password" required autocomplete="new-password" type="password"
                        class="input_1" />
                    <label for="password" value="<?php echo e(__('Password')); ?>" data-icon="p"
                        class="placeholder_1">Password</label>
                </div>

                <div class="input-group">
                    <input id="password_confirmation" name="password_confirmation" required autocomplete="new-password"
                        type="password" class="input_1" />
                    <label for="password_confirmation" value="<?php echo e(__('Confirm Password')); ?>" data-icon="p"
                        class="placeholder_1">Password</label>
                </div>
            </div>

            <button type="submit" value="Sign up" name="submit" class="submitbtn"><i
                    class="fa-solid fa-user-plus"></i>&nbsp;<?php echo e(__('Register')); ?></button>
            <p class="member">Already a Member?</p>
            <a href="<?php echo e(route('login')); ?>" class="to_login">
                <button type="button" class="loginbtn"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Go to Log
                    in</button>
            </a>

            <?php if(Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature()): ?>
                <div class="mt-4">
                    <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['for' => 'terms']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'terms']); ?>
                        <div class="flex items-center">
                            <?php if (isset($component)) { $__componentOriginal74b62b190a03153f11871f645315f4de = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74b62b190a03153f11871f645315f4de = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.checkbox','data' => ['name' => 'terms','id' => 'terms','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'terms','id' => 'terms','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal74b62b190a03153f11871f645315f4de)): ?>
<?php $attributes = $__attributesOriginal74b62b190a03153f11871f645315f4de; ?>
<?php unset($__attributesOriginal74b62b190a03153f11871f645315f4de); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal74b62b190a03153f11871f645315f4de)): ?>
<?php $component = $__componentOriginal74b62b190a03153f11871f645315f4de; ?>
<?php unset($__componentOriginal74b62b190a03153f11871f645315f4de); ?>
<?php endif; ?>

                            <div class="ms-2">
                                <?php echo __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' =>
                                        '<a target="_blank" href="' .
                                        route('terms.show') .
                                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                        __('Terms of Service') .
                                        '</a>',
                                    'privacy_policy' =>
                                        '<a target="_blank" href="' .
                                        route('policy.show') .
                                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                        __('Privacy Policy') .
                                        '</a>',
                                ]); ?>

                            </div>
                        </div>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $attributes = $__attributesOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__attributesOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $component = $__componentOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__componentOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
                </div>
            <?php endif; ?>
    </div>
    </form>
    </div>

    <script src="/images/script.js"></script>
</body>

</html>
<?php /**PATH C:\Users\Moses Blake Simataa\Videos\Moses Simataa Project Review\Application\church\church\resources\views/auth/register.blade.php ENDPATH**/ ?>