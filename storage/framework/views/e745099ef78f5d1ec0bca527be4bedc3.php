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
        <?php $__currentLoopData = $detaile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                        <th rowspan="2">KPI</th>
                        <th rowspan="2">Initiatives/Activities</th>
                        <th colspan="4" class="text-center">Target</th>
                        <th colspan="2" class="text-center">Timing</th>
                        <th rowspan="2">Resource Persource</th>
                        <th rowspan="2">Budget Per Initiative</th>
                        <th rowspan="2">Comments</th>
                   
                    </tr>
                    <tr>
                        <th>Q1 (%)</th>
                        <th>Q2 (%)</th>
                        <th>Q3 (%)</th>
                        <th>Q4 (%)</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                    
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $groupedScores = $scores->groupBy(function ($item) {
                            return $item->no . '-' . $item->kpi;
                        });
                        $totalBudget = 0;
                    ?>

                    <?php $__currentLoopData = $groupedScores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $score): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $totalBudget += $score->budget_perinitiative;
                            ?>
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
                                <td><?php echo e(\Carbon\Carbon::parse($score->start_date)->format('d, M, Y')); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($score->end_date)->format('d, M, Y')); ?></td>
                                <td><?php echo e($score->resource_persource); ?></td>
                                <td><?php echo e($currencySymbol . number_format($score->budget_perinitiative)); ?></td>
                                <td><?php echo e($score->comments); ?></td>
                                
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

                <tfoot>
                    <tr>
                        <td colspan="10" class="text-end"><strong>Total Budget: </strong></td>
                        <td colspan="5" class="text-center">
                            <strong><?php echo e($currencySymbol . number_format($totalBudget)); ?></strong>
                        </td>
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
<?php /**PATH C:\xampp\htdocs\church\resources\views/strategic_plan/pdf.blade.php ENDPATH**/ ?>