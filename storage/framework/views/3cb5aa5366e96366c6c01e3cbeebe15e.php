<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scorecard PDF</title>

    <!-- Embedded CSS -->
    <style>
        /* Prevent zooming during PDF export */
        @page {
            size: A2;
            /* Set the page size to A4 */
            margin: 20mm;
            /* Set page margins */
            zoom: 100%;
            /* Prevent zooming */
        }

        /* Custom Styles for Table */
        .table-wrapper {
            overflow-x: auto;
            max-width: 100%;
            margin: 20px 0;
            /* Adjusted to give space on top and bottom */
            padding: 20px;
            text-align: left;
            /* Align the content to the left */
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 8px 10px;
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

        /* Ensure the table is responsive and breaks properly in PDF */
        @media print {
            body {
                margin: 0;
                padding: 0;
                font-size: 10px;
                /* Adjust font size for print */
            }

            .table-wrapper {
                page-break-before: always;
                /* Force page break before table if it's too long */
                width: 100%;
                text-align: left;
                /* Ensure the table is aligned to the left for PDF */
            }

            .table {
                page-break-inside: avoid;
                /* Prevent page break inside table */
                width: 100%;
            }

            .table th,
            .table td {
                font-size: 8px;
                /* Even smaller font size for large tables */
                padding: 6px 8px;
                /* Reduce padding for better space utilization */
            }

            tr {
                page-break-inside: avoid;
            }

            thead {
                display: table-header-group;
            }

            tfoot {
                display: table-footer-group;
            }

            /* Add space between the pages */
            .container {
                page-break-after: always;
            }
        }

        /* Optional: Responsive table for smaller screens */
        @media (max-width: 768px) {
            .table-wrapper {
                overflow-x: auto;
            }
        }

        .container {
            margin-top: -85px;
        }

        .prepared {
            margin-top: 7px;
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
                    </tr>
                    <tr>
                        <th><?php echo e($selectedYear); ?></th>
                        <th>Q1 (%)</th>
                        <th>Q2 (%)</th>
                        <th>Q3 (%)</th>
                        <th>Q4 (%)</th>
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
<?php /**PATH C:\xampp\htdocs\church\resources\views/scorecard/pdf.blade.php ENDPATH**/ ?>