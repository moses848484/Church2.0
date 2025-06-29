<div class="main-panel">
    <div class="content-wrapper">

        <?php if(session()->has('message')): ?>

        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
        <?php echo e(session()->get('message')); ?>


       </div>

        <?php endif; ?>

        <div class="row">

        </div>

        <div class="card2">
            <?php echo $__env->make('auth.membergiving', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->

            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<?php /**PATH C:\xampp\htdocs\church\resources\views/home/addgiving.blade.php ENDPATH**/ ?>