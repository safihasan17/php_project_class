<?php

$msg = "";
require_once 'models/phase_costs_and_timing_class.php';


function formatDate($date) {
    if (!$date || $date == '0000-00-00 00:00:00' || $date == '1000-01-01 00:00:00') return '-';
    return date('d M Y', strtotime($date));
}

if (isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];
    $res = PhaseCostsandTiming::delete($id);

    if ($res === true) {
        $msg = "Phase cost deleted successfully. Project budget updated automatically.";
    } else {
        $msg = $res;
    }
}


$rows = PhaseCostsandTiming::readALL();

?>


<div class="content-wrapper mt-5">
    <main class="app-main mt-5">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Phases Cost &amp; Timing</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb bg-transparent justify-content-end">
                            <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Phases Cost &amp; Timing List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <a class="btn btn-sm btn-dark" href="create_phases_cost">Add Phase Cost</a>
                                <small class="text-muted">
                                    <!-- <i class="fa fa-info-circle me-1"></i> -->
                                    <!-- Phase budget save/update করলে project এর overall budget automatic update হয়। -->
                                </small>
                            </div>

                            <?php if ($msg): ?>
                                <div class="alert alert-info mx-3 mt-2"><?= $msg; ?></div>
                            <?php endif; ?>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Project</th>
                                                <th>Phase</th>
                                                <th>Allocated Cost <small class="text-muted d-block fw-normal">(Budget)</small></th>
                                                <th>Actual Cost</th>
                                                <th>Phase Completion</th>
                                                <th>Expected Time</th>
                                                <th>Actual Time</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach ($rows as $items): ?>
                                                <?php
                                                $allocated = (float)$items['allocated_cost'];
                                                $actual    = (float)$items['actual_cost'];
                                                $percent   = (float)$items['phase_percent'];
                                                $isOver    = $actual > $allocated && $allocated > 0;

                                                if ($percent >= 100) {
                                                    $barColor = 'bg-success';
                                                } elseif ($percent >= 60) {
                                                    $barColor = 'bg-info';
                                                } elseif ($percent >= 30) {
                                                    $barColor = 'bg-warning';
                                                } else {
                                                    $barColor = 'bg-secondary';
                                                }
                                                ?>
                                                <tr class="align-middle">
                                                    <td><?= $items['id'] ?></td>
                                                    <td class="fw-semibold"><?= $items['project_title'] ?></td>
                                                    <td><?= $items['phase_title'] ?></td>

                                                    <!-- Allocated Cost (Budget) -->
                                                    <td class="fw-semibold text-primary">
                                                        <?= number_format($allocated, 2) ?>
                                                    </td>

                                                    <!-- Actual Cost -->
                                                    <td class="<?= $isOver ? 'text-danger fw-semibold' : '' ?>">
                                                        <?= number_format($actual, 2) ?>
                                                        <?php if ($isOver): ?>
                                                            <br><small class="text-danger"><i class="fa fa-arrow-up"></i> Over</small>
                                                        <?php endif; ?>
                                                    </td>

                                                    <!-- Phase Completion -->
                                                    <td style="min-width: 130px;">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="progress flex-grow-1" style="height:10px; border-radius:6px;">
                                                                <div class="progress-bar <?= $barColor ?>"
                                                                    role="progressbar"
                                                                    style="width: <?= $percent ?>%;"
                                                                    aria-valuenow="<?= $percent ?>"
                                                                    aria-valuemin="0"
                                                                    aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                            <span class="small fw-semibold" style="min-width:38px;">
                                                                <?= $percent ?>%
                                                            </span>
                                                        </div>
                                                    </td>

                                                    <td><?= formatDate($items['expected_time']) ?></td>
                                                    <td><?= formatDate($items['actual_time']) ?></td>

                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="edit_phases_cost?id=<?= $items['id']; ?>" class="btn btn-sm btn-default">
                                                                <i class="fa fa-edit text-success"></i>
                                                            </a>
                                                            <form action="" method="POST">
                                                                <input type="hidden" name="delete_id" value="<?= $items['id']; ?>">
                                                                <button type="submit" class="btn btn-sm btn-default">
                                                                    <i class="fa fa-trash text-danger"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>

                                            <?php endforeach; ?>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>