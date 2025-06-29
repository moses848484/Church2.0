<!DOCTYPE html>
<html>

<head>
   <!-- Basic -->
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <!-- Site Metas -->
   <meta name="keywords" content="" />
   <meta name="description" content="" />
   <meta name="author" content="" />
   <link rel="shortcut icon" href="images/sda3.png" type="">
   <title>SDA Home Page</title>
   <!-- bootstrap core css -->
   <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
   <!-- font awesome style -->
   <link href="home/css/font-awesome.min.css" rel="stylesheet" />
   <!-- Custom styles for this template -->
   <link href="home/css/style.css" rel="stylesheet" />
   <!-- responsive style -->
   <link href="home/css/responsive.css" rel="stylesheet" />
   <link rel="stylesheet" href="<?php echo asset('css/fontawesome-free-6.5.2-web/css/all.min.css') ?>" type="text/css">
   <?php echo notifyCss(); ?>
</head>

<body>

   <div class="hero_area">
      <!-- header section strats -->
      <?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- end header section -->
      <!-- slider section -->
      <?php echo $__env->make('home.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- end slider section -->
   </div>
   <!-- containers section -->
   <?php echo $__env->make('home.containers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <!-- end containers section -->
   <!-- prayersection -->
   <?php echo $__env->make('home.prayer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <!-- end prayer section -->
   <?php echo $__env->make('home.welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <!-- songs section -->
   <?php echo $__env->make('home.songs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <!-- end songs section -->
   <!-- footer start -->
   <?php echo $__env->make('home.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <!-- footer end -->

   <!-- jQery -->
   <script src="home/js/jquery-3.4.1.min.js"></script>
   <!-- popper js -->
   <script src="home/js/popper.min.js"></script>
   <!-- bootstrap js -->
   <script src="home/js/bootstrap.js"></script>
   <!-- custom js -->
   <script src="home/js/custom.js"></script>

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

</html><?php /**PATH C:\xampp\htdocs\church\resources\views/home/userpage.blade.php ENDPATH**/ ?>