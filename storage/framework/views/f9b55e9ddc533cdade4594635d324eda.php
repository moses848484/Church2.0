

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Church Scorecards</h1>
    <a href="<?php echo e(route('admin.create')); ?>" class="btn btn-primary">Add Scorecard</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Score</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $scorecards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scorecard): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($scorecard->name); ?></td>
                <td><?php echo e($scorecard->score); ?></td>
                <td style="color: <?php echo e($scorecard->status === 'good' ? 'green' : ($scorecard->status === 'average' ? 'orange' : 'red')); ?>">
                    <?php echo e(ucfirst($scorecard->status)); ?>

                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\church\resources\views/admin/index.blade.php ENDPATH**/ ?>