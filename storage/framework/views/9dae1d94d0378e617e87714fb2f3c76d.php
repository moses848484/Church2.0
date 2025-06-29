<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo notifyCss(); ?>
    <!-- Required meta tags -->
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>


    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <?php echo $__env->make('home.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
        <?php echo $__env->make('home.header1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
        <?php echo $__env->make('home.body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <?php echo $__env->make('home.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End custom js for this page -->
        <?php if (isset($component)) { $__componentOriginal58ef761b4a8d895ed279bb45cfc348ea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal58ef761b4a8d895ed279bb45cfc348ea = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'notify::components.notify','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('notify::notify'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal58ef761b4a8d895ed279bb45cfc348ea)): ?>
<?php $attributes = $__attributesOriginal58ef761b4a8d895ed279bb45cfc348ea; ?>
<?php unset($__attributesOriginal58ef761b4a8d895ed279bb45cfc348ea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal58ef761b4a8d895ed279bb45cfc348ea)): ?>
<?php $component = $__componentOriginal58ef761b4a8d895ed279bb45cfc348ea; ?>
<?php unset($__componentOriginal58ef761b4a8d895ed279bb45cfc348ea); ?>
<?php endif; ?>
        <?php echo notifyJs(); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\church\resources\views/home/memberhome.blade.php ENDPATH**/ ?>