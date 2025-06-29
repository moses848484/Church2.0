<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scorecards</title>

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
            /* Align links to the left */
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
            flex-wrap: wrap;
            /* Ensures links wrap on smaller screens */
            gap: 10px;
            /* Adds spacing between links */
            justify-content: center;
            /* Centers the links */
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
                width: 100%;
                /* Make each link take full width on smaller screens */
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 class="text-center mb-4">UNIVERSITY SEVENTH DAY ADVENTIST CHURCH </h2>
        <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h2 class="text-center mb-4"><?php echo e($detail->department_name); ?></h2>
            <h3 class="text-center mb-4"><?php echo e($detail->quoter); ?></h3>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <!-- Navigation Links -->
        <div class="navigation-links">
            <a class="nav-link" href="<?php echo e(url('/redirected')); ?>">Back to Dashboard</a>
            <a href="<?php echo e(route('scorecard.create')); ?>">Create Scorecard</a>
            <a href="<?php echo e(route('scorecard.details')); ?>">Add Details</a>
            <a href="<?php echo e(route('scorecard.export-pdf')); ?>">Export to PDF</a>
            <a href="<?php echo e(route('scorecard.clear-detail')); ?>"
                onclick="return confirm('Are you sure you want to clear all details?')" style="color: red;">Clear All
                Details</a>
            <a href="<?php echo e(route('scorecard.clear-scorecards')); ?>"
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
                        <th rowspan="2">Kpi</th>
                        <th rowspan="2">Initiatives/Activities</th>
                        <th colspan="5" class="text-center">Target</th>
                        <th rowspan="2">Status</th>
                        <th rowspan="2">Explanation</th>
                        <th colspan="2" class="text-center">Actions</th>
                    </tr>
                    <tr>
                        <th><?php echo e($selectedYear); ?></th>
                        <th>Q1 (%)</th>
                        <th>Q2 (%)</th>
                        <th>Q3 (%)</th>
                        <th>Q4 (%)</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // Group scorecards by "no" and "kpi"
                        $groupedScorecards = $scorecards->groupBy(function ($item) {
                            return $item->no . '-' . $item->kpi;
                        });
                    ?>

                    <?php $__currentLoopData = $groupedScorecards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $groupKey => $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $rowCount = $group->count(); // Number of rows in this group
                        ?>

                        <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $scorecard): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <?php if($index === 0): ?>
                                    <!-- Only show "No" and "Kpi" values once, spanning the rows -->
                                    <td rowspan="<?php echo e($rowCount); ?>" class="align-middle"><?php echo e($scorecard->no); ?></td>
                                <?php endif; ?>
                                <?php if($index === 0): ?>
                                    <!-- Only show "No" and "Kpi" values once, spanning the rows -->
                                    <td rowspan="<?php echo e($rowCount); ?>" class="align-middle">
                                        <?php echo e($scorecard->strategic_theme); ?></td>
                                <?php endif; ?>
                                <?php if($index === 0): ?>
                                    <!-- Only show "No" and "Kpi" values once, spanning the rows -->
                                    <td rowspan="<?php echo e($rowCount); ?>" class="align-middle">
                                        <?php echo e($scorecard->strategic_area); ?></td>
                                <?php endif; ?>

                                <td class="align-middle"><?php echo e($scorecard->strategic_objective); ?></td>
                                <?php if($index === 0): ?>
                                    <!-- Only show "No" and "Kpi" values once, spanning the rows -->
                                    <td rowspan="<?php echo e($rowCount); ?>" class="align-middle"><?php echo e($scorecard->kpi); ?></td>
                                <?php endif; ?>
                                <td class="align-middle"><?php echo e($scorecard->initiatives_activities); ?></td>

                                <?php
                                    // Calculate total progress from all quarters
                                    $totalProgress =
                                        $scorecard->q1_target +
                                        $scorecard->q2_target +
                                        $scorecard->q3_target +
                                        $scorecard->q4_target;

                                    // Determine the status based on total progress
                                    $statusColor = 'red';
                                    $statusText = 'No Activity Yet';
                                    if ($totalProgress > 0 && $totalProgress < 100) {
                                        $statusColor = 'orange';
                                        $statusText = 'In Progress';
                                    } elseif ($totalProgress >= 100) {
                                        $statusColor = 'green';
                                        $statusText = 'Completed';
                                    }
                                ?>
                                <!-- Year column now displays total progress -->
                                <td class="align-middle"><?php echo e($totalProgress); ?>%</td>
                                <!-- Show the percentage values for each quarter -->
                                <td class="align-middle"><?php echo e($scorecard->q1_target); ?>%</td>
                                <td class="align-middle"><?php echo e($scorecard->q2_target); ?>%</td>
                                <td class="align-middle"><?php echo e($scorecard->q3_target); ?>%</td>
                                <td class="align-middle"><?php echo e($scorecard->q4_target); ?>%</td>
                                <td style="background-color: <?php echo e($statusColor); ?>; color: white;" class="align-middle">
                                    <?php echo e($statusText); ?></td>
                                <td class="align-middle"><?php echo e($scorecard->explanation); ?></td>
                                <td>
                                    <a href="<?php echo e(route('scorecard.edit', $scorecard->id)); ?>"
                                        class="action-button edit-button">Edit</a>
                                </td>
                                <td>
                                    <form action="<?php echo e(route('scorecard.destroy', $scorecard->id)); ?>" method="POST"
                                        style="display: inline;">
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
            </table>

            <div class="prepared">

                <p>
                    <strong>Leader:</strong>
                    <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($detail->leader); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <br>
                    <strong>Elder in Charge:</strong>
                    <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($detail->elder_in_charge); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <br><br>
                    <?php
                        // Split the explanation into an array of lines
                        $explanations = [];
                        foreach ($details as $detail) {
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
<?php /**PATH C:\xampp\htdocs\church\resources\views/scorecard/index.blade.php ENDPATH**/ ?>