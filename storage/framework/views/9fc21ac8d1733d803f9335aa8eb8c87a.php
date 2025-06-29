<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Church Manager" />
    <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager" />
    <link rel="stylesheet" href="<?php echo asset('css/addmember.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/fontawesome-free-6.5.2-web/css/all.min.css'); ?>" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Update Member</title>
    <style>
        /* Custom Autofill input styling */
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0 30px white inset !important;
            box-shadow: 0 0 0 30px white inset !important;
            -webkit-text-fill-color: #04AA6D !important;
        }

        /* Floating Label Styles */
        .form-floating {
            position: relative;
        }

        .form-select {
            color: #04AA6D;
        }

        .form-floating input {
            padding: 1rem 0.75rem;
            padding-top: 1.5rem;
        }

        .form-floating label {
            position: absolute;
            top: 45%;
            left: 3%;
            transform: translateY(-50%);
            transition: all 0.2s ease-in-out;
            color: #04AA6D;
            pointer-events: none;
        }

        .form-floating input:focus+label,
        .form-floating input:not(:placeholder-shown)+label {
            top: 25%;
            transform: translateY(-100%);
            font-size: 0.80rem;
            color: #04AA6D;
            background: white;
        }

        /* Adjustments for input border */
        .form-control {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            color: #04AA6D;
        }

        .form-control:focus {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            color: #04AA6D;
        }

        .textcolor {
            color: #04AA6D;
        }

        .text-primary {
            color: #e4af00 !important;
        }

        /* Responsive adjustments */
        @media (max-width: 1200px) {
            .form-floating input {
                padding: 0.7rem 0.25rem;
                padding-top: 1rem;
                margin-bottom: 18px;
            }

            .form-floating label {
                font-size: 0.75rem;
                margin-top: -5px;
                margin-left: 7px;
            }

            .form-floating label:focus {
                font-size: 0.9rem;
                padding: 0.75rem 1rem;
            }

            .btn {
                font-size: 1rem;
            }

            .container {
                padding: 2rem;
            }

            .footer span {
                font-size: 0.85rem;
            }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .form-floating input {
                padding: 0.7rem 0.25rem;
                padding-top: 1rem;
                margin-bottom: 18px;
            }

            .form-floating label {
                font-size: 0.75rem;
                margin-top: -5px;
                margin-left: 7px;
            }

            .form-floating label:focus {
                font-size: 0.9rem;
                padding: 0.75rem 1rem;
            }

            .btn {
                font-size: 1rem;
            }

            .container {
                padding: 2rem;
            }

            .footer span {
                font-size: 0.85rem;
            }
        }

        @media (max-width: 576px) {
            .form-floating input {
                padding: 0.7rem 0.25rem;
                padding-top: 2rem;
                margin-bottom: 18px;
            }

            .form-floating label {
                font-size: 1rem;
                margin-top: -5px;
                margin-left: 7px;
            }

            .form-floating label:focus {
                font-size: 0.9rem;
                padding: 0.75rem 1rem;
            }

            .container {
                padding: 1rem;
            }

            .footer span {
                font-size: 0.75rem;
            }
        }

        /* Map styles */
        #map {
            height: 400px;
            /* Set the desired height */
            width: 100%;
            /* Full width */
            margin-bottom: 15px;
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGq_U4H3gTYCoglVeSGbYo8NZkmMWn7kc&libraries=places">
    </script>
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
        <form method="POST" autocomplete="on" action="<?php echo e(url('/update_registered', $data->id)); ?>"
            enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="logo">
                <img src="/images/sda.png" class="sda_logo">
            </div>
            <h2 class="form-title">Update Member</h2>


            <div class="row mb-3 form-floating">
                <div class="col-md-6">
                    <input id="fname" name="fname" value="<?php echo e($data->fname); ?>" type="text" required autofocus
                        class="form-control" placeholder=" ">
                    <label for="fname">First Name</label>
                </div>
                <div class="col-md-6">
                    <input id="mname" name="mname" value="<?php echo e($data->mname); ?>" type="text" class="form-control"
                        placeholder=" ">
                    <label for="mname">Middle Name</label>
                </div>
            </div>

            <div class="row mb-3 form-floating">
                <div class="col-md-6">
                    <input id="lname" name="lname" value="<?php echo e($data->lname); ?>" type="text" required
                        class="form-control" placeholder=" ">
                    <label for="lname">Last Name</label>
                </div>
                <div class="col-md-6">
                    <input id="mobile" name="mobile" value="<?php echo e($data->mobile); ?>" type="number" required
                        class="form-control" placeholder=" ">
                    <label for="mobile">Mobile Number</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="textcolor" for="ministry">Ministry</label>
                    <select id="ministry" name="ministry" required class="form-select" placeholder=" ">
                        <option value="None" <?php echo e($data->ministry == 'None' ? 'selected' : ''); ?>>None</option>
                        <option value="Choir" <?php echo e($data->ministry == 'Choir' ? 'selected' : ''); ?>>Choir</option>
                        <option value="Ushering" <?php echo e($data->ministry == 'Ushering' ? 'selected' : ''); ?>>Ushering</option>
                        <option value="Prayer Band" <?php echo e($data->ministry == 'Prayer Band' ? 'selected' : ''); ?>>Prayer Band</option>
                        <option value="Technical" <?php echo e($data->ministry == 'Technical' ? 'selected' : ''); ?>>Technical</option>
                        <option value="Prayer Warrior" <?php echo e($data->ministry == 'Prayer Warrior' ? 'selected' : ''); ?>>Prayer Warrior</option>
                    </select>
                </div>
            
                <div class="col-md-6">
                    <label class="textcolor" for="registeras">Register As</label>
                    <select id="registeras" name="registeras" required class="form-select" placeholder=" ">
                        <option value="None" <?php echo e($data->registeras == 'None' ? 'selected' : ''); ?>>None</option>
                        <option value="Visitor" <?php echo e($data->registeras == 'Visitor' ? 'selected' : ''); ?>>Visitor</option>
                        <option value="Member" <?php echo e($data->registeras == 'Member' ? 'selected' : ''); ?>>Member</option>
                    </select>
                </div>
            </div>
            

            <div class="row mb-3 form-floating">
                <div class="col-md-12">
                    <input id="address" name="address" type="text" value="<?php echo e($data->address); ?>" required
                        autocomplete="address" class="form-control" placeholder=" ">
                    <label for="address">Address</label>
                </div>
            </div>

            <div id="map"></div>

            <div class="row mb-3 form-floating">
                <div class="col-md-6">
                    <input id="occupation" name="occupation" type="text" value="<?php echo e($data->occupation); ?>" required
                        autofocus class="form-control" placeholder=" ">
                    <label for="occupation">Occupation</label>
                </div>
                <div class="col-md-6">
                    <input id="email" name="email" type="text" value="<?php echo e($data->email); ?>"
                        class="form-control" placeholder=" ">
                    <label for="email">Email Address</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 col-sm-6">
                    <label class="textcolor" for="gender">Gender</label>
                    <select id="gender" name="gender" required class="form-select" placeholder=" ">
                        <option value="" disabled <?php echo e(!$data->gender ? 'selected' : ''); ?>>Gender</option>
                        <option value="Male" <?php echo e($data->gender == 'Male' ? 'selected' : ''); ?>>Male</option>
                        <option value="Female" <?php echo e($data->gender == 'Female' ? 'selected' : ''); ?>>Female</option>
                    </select>
                </div>
       
            

                <div class="col-md-6">
                    <label class="textcolor" for="marital">Marital Status</label>
                    <select id="marital" name="marital" required class="form-select" placeholder=" ">
                        <option value="" disabled <?php echo e(!$data->marital ? 'selected' : ''); ?>>Marital Status</option>
                        <option value="Divorced" <?php echo e($data->marital == 'Divorced' ? 'selected' : ''); ?>>Divorced</option>
                        <option value="Single" <?php echo e($data->marital == 'Single' ? 'selected' : ''); ?>>Single</option>
                        <option value="Married" <?php echo e($data->marital == 'Married' ? 'selected' : ''); ?>>Married</option>
                    </select>
                </div>
            </div>


            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="textcolor" for="document">Change Baptism Certificate</label>
                    <input id="document" name="document" type="file" class="form-control" />
                </div>


                <?php if(!empty($data->document)): ?>
                    <div class="col-md-6">
                        <label class="textcolor" for="document">Current Baptism Certificate</label>
                        <a href="<?php echo e(asset('Baptism Certificates/' . $data->document)); ?>" class="form-control"
                            target="_blank">
                            View Baptism Certificate
                        </a>
                    </div>
            </div>
        <?php else: ?>
            <p>No document available.</p>
            <?php endif; ?>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="textcolor" for="date">Date Of Birth</label>
                    <input id="date" name="birthday" value="<?php echo e($data->birthday); ?>" type="date"
                        step="1" required class="form-control" placeholder=" ">
                </div>


                <div class="col-md-6">
                    <label class="textcolor" for="registrationdate">Date Of Registration</label>
                    <input id="registrationdate" name="registrationdate" value="<?php echo e($data->registrationdate); ?>"
                        type="datetime-local" step="1" required class="form-control" placeholder=" ">
                </div>
            </div>



            <button type="submit" value="Sign up" name="submit" class="submitbtn"><i
                    class="fa-solid fa-pen-to-square"></i>&nbsp;Update Member</button><br>

            <?php if(session('message')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('message')); ?>


                    <?php if(session('document')): ?>
                        <p>
                            <a href="<?php echo e(asset('Baptism Certificates/' . session('document'))); ?>" target="_blank">View
                                Uploaded Document</a>
                        </p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

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
        </form>
    </div>
    </div>

    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted1 d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                University
                SDA Church 2024</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-white">
                Computer Science Dept
                <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank"
                    class="text-white">
                    Computer Systems Engineering
                </a> from University Of Zambia
            </span>
        </div>
    </footer>

    <script src="/images/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <script>
        let map;
        let marker;

        function initMap() {
            const defaultAddress = "<?php echo e($data->address); ?>"; // Existing address
            const geocoder = new google.maps.Geocoder();

            // Geocode the existing address to get lat/lng
            geocoder.geocode({
                address: defaultAddress
            }, (results, status) => {
                if (status === google.maps.GeocoderStatus.OK) {
                    const location = results[0].geometry.location;

                    map = new google.maps.Map(document.getElementById("map"), {
                        center: location,
                        zoom: 15,
                    });

                    marker = new google.maps.Marker({
                        position: location,
                        map: map,
                        draggable: true, // Allow marker dragging
                    });

                    const input = document.getElementById('address');
                    const autocomplete = new google.maps.places.Autocomplete(input);

                    autocomplete.addListener('place_changed', function() {
                        const place = autocomplete.getPlace();
                        if (place.geometry) {
                            map.setCenter(place.geometry.location);
                            marker.setPosition(place.geometry.location);
                        }
                    });

                    marker.addListener('dragend', function(event) {
                        const lat = event.latLng.lat();
                        const lng = event.latLng.lng();
                        // Get the address from lat/lng and update the input
                        geocoder.geocode({
                            location: {
                                lat,
                                lng
                            }
                        }, function(results, status) {
                            if (status === google.maps.GeocoderStatus.OK && results[0]) {
                                input.value = results[0].formatted_address;
                            }
                        });
                    });
                } else {
                    console.error("Geocode was not successful for the following reason: " + status);
                }
            });
        }

        google.maps.event.addDomListener(window, 'load', initMap);
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\church\resources\views/auth/updatemember.blade.php ENDPATH**/ ?>