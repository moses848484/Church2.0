<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Scorecards</title>

    <!-- Embedded CSS -->
    <style>
        /* Custom Styles for Table */
        .table-wrapper {
            overflow-x: auto;
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 12px 15px;
            vertical-align: middle;
            border: 1px solid #ddd;
        }

        .table th {
            background-color: #c4c4c4;
            font-weight: bold;
            text-align: center;
        }

        .table td {
            text-align: center;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f2f2f2;
        }

        .text-center {
            text-align: center;
        }

        /* Optional: Responsive table */
        @media (max-width: 768px) {
            .table-wrapper {
                overflow-x: auto;
            }
        }

        .navigation-links {
            margin: 20px 0;
            text-align: left;
        }

        .navigation-links a {
            text-decoration: none;
            color: #007bff;
            padding: 10px 20px;
            border: 1px solid #007bff;
            border-radius: 5px;
            margin: 0 10px;
            transition: background-color 0.3s;
        }

        .navigation-links a:hover {
            background-color: #007bff;
            color: white;
        }

        .container {
            margin-top: 25px;
        }

        .prepared {
            margin-top: -10px;
        }

        .action-button {
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            display: inline-block;
            margin: 2px;
            text-decoration: none;
        }

        .edit-button {
            background-color: #28a745;
        }

        .edit-button:hover {
            background-color: #218838;
        }

        .delete-button {
            background-color: #dc3545;
        }

        .delete-button:hover {
            background-color: #c82333;
        }

        .navigation-links {
        display: flex;
        flex-wrap: wrap; /* Ensures links wrap on smaller screens */
        gap: 10px; /* Adds spacing between links */
        justify-content: center; /* Centers the links */
        margin: 20px 0;
    }

    .navigation-links a {
        display: inline-block;
        text-decoration: none;
        color: #007bff;
        padding: 10px 20px;
        border: 1px solid #007bff;
        border-radius: 5px;
        transition: background-color 0.3s;
        text-align: center;
    }

    .navigation-links a:hover {
        background-color: #007bff;
        color: white;
    }

    .navigation-links .clear-button {
        color: red;
        border-color: red;
    }

    .navigation-links .clear-button:hover {
        background-color: red;
        color: white;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .navigation-links a {
            width: 100%; /* Make each link take full width on smaller screens */
            text-align: center;
        }
    }
    </style>
</head>

<body>

    <div class="container">
        <h2 class="text-center mb-4">UNIVERSITY SEVENTH DAY ADVENTIST CHURCH </h2>
        <?php $__currentLoopData = $detaile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h2 class="text-center mb-4"><?php echo e($detail->department_name); ?></h2>
            <h3 class="text-center mb-4"><?php echo e($detail->quoter); ?></h3>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <!-- Navigation Links -->
        <!-- Navigation Links -->
        <div class="navigation-links">
            <a class="nav-link" href="<?php echo e(url('/redirected')); ?>">Back to Dashboard</a>
            <a href="<?php echo e(route('strategic_plan.create')); ?>">Create Scorecard</a>
            <a href="<?php echo e(route('strategic_plan.details')); ?>">Add Details</a>
            <a href="<?php echo e(route('strategic_plan.export-pdf')); ?>">Export to PDF</a>
            <a href="<?php echo e(route('strategic_plan.clear-details')); ?>"
                onclick="return confirm('Are you sure you want to clear all details?')" style="color: red;">Clear All
                Details</a>
            <a href="<?php echo e(route('strategic_plan.clear-scorecard')); ?>"
                onclick="return confirm('Are you sure you want to clear all details?')" style="color: red;">Clear
                Scorecard
            </a>
        </div>

        <!-- Scorecard Table -->
        <div class="table-wrapper">
            <table class="table table-striped table-bordered text-center">
                <thead>
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Strategic Theme</th>
                        <th rowspan="2">Strategic Area</th>
                        <th rowspan="2">Strategic Objective</th>
                        <th rowspan="2">KPI</th>
                        <th rowspan="2">Initiatives/Activities</th>
                        <th colspan="4" class="text-center">Target (%)</th>
                        <th colspan="2" class="text-center">Timing</th>
                        <th rowspan="2">Resource Persource</th>
                        <th rowspan="2">Budget Per Initiative</th>
                        <th rowspan="2">Comments</th>
                        <th colspan="2" class="text-center">Actions</th>
                    </tr>
                    <tr>
                        <th>Q1</th>
                        <th>Q2</th>
                        <th>Q3</th>
                        <th>Q4</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                

                <tbody>
                    <?php
                        $groupedScores = $scores->groupBy(fn($item) => $item->no . '-' . $item->kpi);
                        $totalBudget = 0;
                    ?>
                
                    <?php $__currentLoopData = $groupedScores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $score): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $totalBudget += $score->budget_perinitiative; ?>
                            <tr>
                                <?php if($index === 0): ?>
                                    <td rowspan="<?php echo e($group->count()); ?>"><?php echo e($score->no); ?></td>
                                    <td rowspan="<?php echo e($group->count()); ?>"><?php echo e($score->strategic_theme); ?></td>
                                    <td rowspan="<?php echo e($group->count()); ?>"><?php echo e($score->strategic_area); ?></td>
                                <?php endif; ?>
                
                                <td><?php echo e($score->strategic_objective); ?></td>
                
                                <?php if($index === 0): ?>
                                    <td rowspan="<?php echo e($group->count()); ?>"><?php echo e($score->kpi); ?></td>
                                <?php endif; ?>
                
                                <td><?php echo e($score->initiatives_activities); ?></td>
                                <td><?php echo e($score->q1_target); ?>%</td>
                                <td><?php echo e($score->q2_target); ?>%</td>
                                <td><?php echo e($score->q3_target); ?>%</td>
                                <td><?php echo e($score->q4_target); ?>%</td>
                                <td><?php echo e(\Carbon\Carbon::parse($score->start_date)->format('d M, Y')); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($score->end_date)->format('d M, Y')); ?></td>
                                <td><?php echo e($score->resource_person); ?></td>
                                <td><?php echo e($currencySymbol . number_format($score->budget_perinitiative)); ?></td>
                                <td><?php echo e($score->comments); ?></td>
                                <td>
                                    <a href="<?php echo e(route('strategic_plan.edit', $score->id)); ?>" class="action-button edit-button">Edit</a>
                                </td>
                                <td>
                                    <form action="<?php echo e(route('scorecard.destroy', $score->id)); ?>" method="POST" style="display: inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="action-button delete-button"
                                            onclick="return confirm('Are you sure you want to delete this scorecard?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                

                <tfoot>
                    <tr>
                        <td colspan="12" class="text-end"><strong>Total Budget:</strong></td>
                        <td colspan="5" class="text-center"><strong><?php echo e($currencySymbol . number_format($totalBudget, 2)); ?></strong></td>
                    </tr>
                </tfoot>
                
            </table>
            <div class="prepared">

                <p>
                    <strong>Leader:</strong>
                    <?php $__currentLoopData = $detaile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($detail->leader); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <br>
                    <strong>Elder in Charge:</strong>
                    <?php $__currentLoopData = $detaile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($detail->elder_in_charge); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <br><br>
                    <?php
                        // Split the explanation into an array of lines
                        $explanations = [];
                        foreach ($detaile as $detail) {
                            $lines = explode("\n", $detail->explanation); // Split by newline
                            $explanations = array_merge($explanations, $lines); // Merge all lines into a single array
                        }
                    ?>

                    <?php if(!empty($explanations)): ?>
                        <ol>
                            <?php $__currentLoopData = $explanations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(!empty(trim($line))): ?>
                                    <!-- Ignore empty lines -->
                                    <li><?php echo e($line); ?></li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ol>
                    <?php else: ?>
                        <p>No explanations available.</p>
                    <?php endif; ?>

                </p>

            </div>

        </div>
    </div>
    </div>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\church\resources\views/strategic_plan/index.blade.php ENDPATH**/ ?>