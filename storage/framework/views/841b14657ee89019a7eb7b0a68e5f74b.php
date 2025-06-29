<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Church Manager" />
    <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager" />
    <link rel="stylesheet" href="<?php echo asset('css/addmember.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/fontawesome-free-6.5.2-web/css/all.min.css') ?>" type="text/css">
    <title>Update Member</title>
    <style>
        /* Autofill input styling */
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0 30px white inset !important;
            box-shadow: 0 0 0 30px white inset !important;
            -webkit-text-fill-color: #04AA6D !important;
        }

        /* Map styles */
        #map {
            height: 400px;
            /* Set the desired height */
            width: 100%;
            /* Full width */
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1vwmnw0U9WRwyPYz5R6vKltMB_u0PIZ8&libraries=places"></script>
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
        <form method="POST" autocomplete="on" action="<?php echo e(url('/update_registered', $data->id)); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="logo">
                <img src="/images/sda.png" class="sda_logo">
            </div>
            <h2 class="form-title">Update Member</h2>

            <div class="input-row">
                <div class="input-group">
                    <input id="fname" name="fname" value="<?php echo e($data->fname); ?>" type="text" required autofocus autocomplete="name" class="input" />
                    <label for="fname" class="placeholder" data-icon="u">First Name</label>
                </div>

                <div class="input-group">
                    <input id="mname" name="mname" value="<?php echo e($data->mname); ?>" type="text" autocomplete="additional-name" class="input" />
                    <label for="mname" class="placeholder" data-icon="u">Middle Name</label>
                </div>

                <div class="input-group">
                    <input id="lname" name="lname" value="<?php echo e($data->lname); ?>" type="text" required autofocus autocomplete="lname" class="input" />
                    <label for="lname" class="placeholder" data-icon="u">Last Name</label>
                </div>

                <div class="input-group">
                    <input id="mobile" name="mobile" value="<?php echo e($data->mobile); ?>" type="number" required="required" class="input" autocomplete="tel">
                    <label for="mobile" class="placeholder" data-icon="u">Mobile Number</label>
                </div>

                <div class="input-group">
                    <select id="ministry" name="ministry" required="required" class="input" autocomplete="off">
                        <option value="Select Ministry">Select Ministry</option>
                        <option value="None">None</option>
                        <option value="Choir">Choir</option>
                        <option value="Ushering">Ushering</option>
                        <option value="Prayer Band">Prayer Band</option>
                        <option value="Technical">Technical</option>
                        <option value="Prayer Warrior">Prayer Warrior</option>
                    </select>
                </div>

                <div class="input-group">
                    <select id="registeras" name="registeras" required="required" class="input" autocomplete="off">
                        <option value="Register As">Register As</option>
                        <option value="None">None</option>
                        <option value="Visitor">Visitor</option>
                        <option value="Member">Member</option>
                    </select>
                </div>

                <div class="input-group">
                    <input id="address" name="address" value="<?php echo e($data->address); ?>" type="text" required autocomplete="address" class="input" />
                    <label for="address" class="placeholder" data-icon="e">Home Address</label>
                </div>

                <div class="input-group">
                    <input id="occupation" name="occupation" value="<?php echo e($data->occupation); ?>" type="text" required autocomplete="occupation" class="input" />
                    <label for="occupation" class="placeholder" data-icon="e">Occupation</label>
                </div>
            </div>

                <div id="map"></div>

          

            <div class="input-row">
                <div class="input-group">
                    <select class="gender-select" name="gender" id="gender" required="required" autocomplete="sex">
                        <option value="Select Gender">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="input-group">
                    <input id="birthday" type="date" value="<?php echo e($data->birthday); ?>" name="birthday" min="1900-01-02" required="required" class="input" autocomplete="bday">
                    <label for="birthday" class="placeholders" data-icon="u">Date Of Birth</label>
                </div>
            </div>

            <div class="input-row">
                <div class="input-group">
                    <input id="email" name="email" value="<?php echo e($data->email); ?>" type="email" required autocomplete="email" class="input" />
                    <label for="email" class="placeholder" data-icon="e">Email Address</label>
                </div>

                <div class="input-group">
                    <input id="document" name="document" type="file" class="input" />
                    <label for="document" class="placeholders" data-icon="u">Change Baptism Certificate</label>
                </div>

                <?php if(!empty($data->document)): ?>
                <div class="input-group">
                    <p class="currentdocument">Current Baptism Certificate:
                        <a href="<?php echo e(asset('Baptism Certificates/' . $data->document)); ?>" target="_blank">
                            View Baptism Certificate
                        </a>
                    </p>
                </div>
                <?php else: ?>
                <p>No document available.</p>
                <?php endif; ?>

                <div class="input-group">
                    <select id="marital" name="marital" required="required" class="input" autocomplete="off">
                        <option value="Marital Status">Marital Status</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                    </select>
                </div>

                <div class="input-group">
                    <input id="registrationdate" type="datetime-local" name="registrationdate" value="<?php echo e($data->registrationdate); ?>" min="1900-01-02" required="required" class="input" autocomplete="bday">
                    <label for="registrationdate" class="placeholders" data-icon="u">Date Of Registration</label>
                </div>
            </div>

            <button type="submit" value="Sign up" name="submit" class="submitbtn"><i class="fa-solid fa-pen-to-square"></i>&nbsp;Update Member</button><br>

            <?php if(session('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session('message')); ?>


                <?php if(session('document')): ?>
                <p>
                    <a href="<?php echo e(asset('Baptism Certificates/' . session('document'))); ?>" target="_blank">View Uploaded Document</a>
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
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
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
            <span class="text-muted1 d-block text-center text-sm-left d-sm-inline-block">Copyright © University SDA Church 2024</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Computer Science Dept <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Computer Systems Engineering</a> from University Of Zambia</span>
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

</html><?php /**PATH C:\xampp\htdocs\church\resources\views/auth/memberaccount.blade.php ENDPATH**/ ?>