<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Church Manager" />
    <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager" />
    <link rel="stylesheet" href="<?php echo asset('css/addmember.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/fontawesome-free-6.5.2-web/css/all.min.css') ?>" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Add Schedule</title>
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

        /* Notification styling */
        .notification {
            display: none;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            position: fixed;
            top: 10px;
            right: 10px;
            border-radius: 5px;
            z-index: 1000;
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
        <form id="scheduleForm" method="POST" autocomplete="on" action="<?php echo e(url('/add_schedule')); ?>">
            <?php echo csrf_field(); ?>

            <div class="logo">
                <img src="/images/sda.png" class="sda_logo">
            </div>
            <h2 class="form-title">Schedule</h2>

            <div class="input-row">
                <div class="input-group">
                    <input id="date" type="datetime-local" name="date" min="1900-01-02" required="required"
                        class="input" autocomplete="bday">
                    <label for="date" class="placeholders" data-icon="u">Date</label>
                </div>

                <div class="input-group">
                    <input id="theme" name="theme" type="text" required autofocus autocomplete="name" class="input" />
                    <label for="theme" class="placeholder" data-icon="u">Theme</label>
                </div>

                <div class="input-group">
                    <select id="elder_on_duty_1" name="elder_on_duty_1" required="required" class="input"
                        autocomplete="off">
                        <option value="Add an Elder On Duty Here">Select Elder On Duty - 1</option>
                        <option value="None">None</option>
                        <option value="Matakala">Matakala</option>
                        <option value="Christopher">Christopher</option>
                        <option value="Antoinetty">Antoinetty</option>
                        <option value="Joshua">Joshua</option>
                        <option value="Abel">Abel</option>
                        <option value="Moses">Moses</option>
                    </select>
                </div>

                <div class="input-group">
                    <select id="elder_on_duty_2" name="elder_on_duty_2" required="required" class="input"
                        autocomplete="off">
                        <option value="Add An Elder On Duty Here">Select Elder On Duty - 2</option>
                        <option value="None">None</option>
                        <option value="Matakala">Matakala</option>
                        <option value="Christopher">Christopher</option>
                        <option value="Antoinetty">Antoinetty</option>
                        <option value="Joshua">Joshua</option>
                        <option value="Abel">Abel</option>
                        <option value="Moses">Moses</option>
                    </select>
                </div>
            </div>
            <button type="submit" value="Sign up" name="submit" class="submitbtn"><i
                    class="fa-solid fa-calendar"></i>&nbsp;&nbsp;Add Schedule</button>

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
                    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' . __('Terms of Service') . '</a>',
                    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' . __('Privacy Policy') . '</a>',
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
        </form>
    </div>
    </div>
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted1 d-block text-center text-sm-left d-sm-inline-block">Copyright © University SDA
                Church 2024</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Computer Science Dept <a
                    href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Computer Systems
                    Engineering</a> from University Of Zambia</span>
        </div>
    </footer>

    <!-- JavaScript for delay and redirection -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('scheduleForm').addEventListener('submit', function (event) {
                event.preventDefault(); // Prevent the default form submission

                var form = this;

                // Create a FormData object to handle form submission
                var formData = new FormData(form);

                // Send the form data using fetch
                fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                    }
                }).then(response => {
                    if (response.ok) {
                        // Show SweetAlert success message
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Schedule added successfully!',
                            timer: 3000, // Auto-dismiss after 3 seconds
                            showConfirmButton: false
                        }).then(() => {
                            // Redirect after the alert
                            window.history.back();
                        });
                    } else {
                        // Handle errors
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'An error occurred. Please try again.',
                        });
                    }
                }).catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'An error occurred. Please try again.',
                    });
                });
            });
        });
    </script>
      <script src="/images/script.js"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\church\resources\views/auth/addschedule.blade.php ENDPATH**/ ?>