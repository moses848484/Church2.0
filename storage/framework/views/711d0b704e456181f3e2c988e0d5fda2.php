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
            <?php echo $__env->make('auth.seegivers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<?php /**PATH C:\xampp\htdocs\church\resources\views/admin/viewgivings.blade.php ENDPATH**/ ?>