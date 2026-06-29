<?php
require_once 'models/projectclass.php';

// Pull all projects (same data source used on the project list page)
$projects = Project::readAll();

// Calculate status counts using the same time-based logic as the project list page
$total = count($projects);
$completed = 0;
$active = 0;
$pending = 0;

foreach ($projects as $items) {
    $hasStart = $items['actual_starting_time'] != '0000-00-00 00:00:00';
    $hasEnd   = $items['actual_ending_time'] != '0000-00-00 00:00:00';

    if ($hasEnd) {
        $completed++;
    } elseif ($hasStart) {
        $active++;
    } else {
        $pending++;
    }
}

// Most recent 5 projects (highest ID first)
$recentProjects = $projects;
usort($recentProjects, function ($a, $b) {
    return $b['id'] <=> $a['id'];
});
$recentProjects = array_slice($recentProjects, 0, 5);

// Budget vs Actual cost totals
$totalBudget = 0;
$totalActual = 0;
foreach ($projects as $items) {
    $totalBudget += (float) $items['budget_cost'];
    $totalActual += (float) $items['actual_cost'];
}
$costDifference = $totalBudget - $totalActual;

// Helper: derive status label + badge color from timestamps (same logic as project list page)
function getProjectStatus($items)
{
    $hasStart = $items['actual_starting_time'] != '0000-00-00 00:00:00';
    $hasEnd   = $items['actual_ending_time'] != '0000-00-00 00:00:00';

    if ($hasEnd) {
        return ['label' => 'Completed', 'class' => 'bg-info'];
    } elseif ($hasStart) {
        return ['label' => 'Active', 'class' => 'bg-success'];
    } else {
        return ['label' => 'Pending', 'class' => 'bg-warning'];
    }
}
?>

<div class="nk-content">
  <div class="container-fluid">
    <div class="nk-content-inner">
      <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
          <div class="nk-block-between">
            <div class="nk-block-head-content">
              <h3 class="nk-block-title page-title">Project Management Dashboard</h3>
              <div class="nk-block-des text-soft">
                <p>Welcome to Project Management Dashboard.</p>
              </div>
            </div>
            <!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
              <div class="toggle-wrap nk-block-tools-toggle">
                <a
                  href="#"
                  class="btn btn-icon btn-trigger toggle-expand me-n1"
                  data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                <div
                  class="toggle-expand-content"
                  data-content="pageMenu">
                  <ul class="nk-block-tools g-3">
                    <li class="nk-block-tools-opt">
                      <a href="manage_project" class="btn btn-primary"><em class="icon ni ni-reports"></em><span>Project List</span></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- .nk-block-head-content -->
          </div>
          <!-- .nk-block-between -->
        </div>

        <div class="nk-block">
          <div class="row g-gs">

            <!-- Total Projects -->
            <div class="col-md-6 col-xxl-3">
              <div class="card card-bordered h-100">
                <div class="card-inner">
                  <div class="card-title-group align-start mb-2">
                    <div class="card-title">
                      <h6 class="title">Total Projects</h6>
                    </div>
                    <div class="card-tools">
                      <em class="icon ni ni-briefcase fs-3 text-primary"></em>
                    </div>
                  </div>
                  <div class="analytic-data">
                    <div class="amount fs-2 fw-bold"><?= $total ?></div>
                    <div class="title text-soft">All projects on record</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- .col -->

            <!-- Active Projects -->
            <div class="col-md-6 col-xxl-3">
              <div class="card card-bordered h-100">
                <div class="card-inner">
                  <div class="card-title-group align-start mb-2">
                    <div class="card-title">
                      <h6 class="title">Active</h6>
                    </div>
                    <div class="card-tools">
                      <em class="icon ni ni-activity fs-3 text-success"></em>
                    </div>
                  </div>
                  <div class="analytic-data">
                    <div class="amount fs-2 fw-bold"><?= $active ?></div>
                    <div class="title text-soft">Currently in progress</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- .col -->

            <!-- Completed Projects -->
            <div class="col-md-6 col-xxl-3">
              <div class="card card-bordered h-100">
                <div class="card-inner">
                  <div class="card-title-group align-start mb-2">
                    <div class="card-title">
                      <h6 class="title">Completed</h6>
                    </div>
                    <div class="card-tools">
                      <em class="icon ni ni-check-circle fs-3 text-info"></em>
                    </div>
                  </div>
                  <div class="analytic-data">
                    <div class="amount fs-2 fw-bold"><?= $completed ?></div>
                    <div class="title text-soft">Finished projects</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- .col -->

            <!-- Pending Projects -->
            <div class="col-md-6 col-xxl-3">
              <div class="card card-bordered h-100">
                <div class="card-inner">
                  <div class="card-title-group align-start mb-2">
                    <div class="card-title">
                      <h6 class="title">Pending</h6>
                    </div>
                    <div class="card-tools">
                      <em class="icon ni ni-clock fs-3 text-warning"></em>
                    </div>
                  </div>
                  <div class="analytic-data">
                    <div class="amount fs-2 fw-bold"><?= $pending ?></div>
                    <div class="title text-soft">Not yet started</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- .col -->

          </div>
          <!-- .row -->
        </div>
        <!-- .nk-block -->

        
        <!-- .nk-block -->

        <div class="nk-block">
          <div class="card card-bordered card-full">
            <div class="card-inner-group">
              <div class="card-inner">
                <div class="card-title-group">
                  <div class="card-title">
                    <h6 class="title">Recent Projects</h6>
                  </div>
                  <div class="card-tools">
                    <a href="manage_project" class="link">View All</a>
                  </div>
                </div>
              </div>
              <div class="card-inner p-0">
                <table class="nk-tb-list nk-tb-ulist">
                  <thead>
                    <tr class="nk-tb-item nk-tb-head">
                      <th class="nk-tb-col"><span class="sub-text">ID</span></th>
                      <th class="nk-tb-col"><span class="sub-text">Title</span></th>
                      <th class="nk-tb-col"><span class="sub-text">Client</span></th>
                      <th class="nk-tb-col"><span class="sub-text">Status</span></th>
                      <th class="nk-tb-col"><span class="sub-text">Budget Cost</span></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (empty($recentProjects)): ?>
                      <tr class="nk-tb-item">
                        <td class="nk-tb-col" colspan="5">
                          <span class="text-soft">No projects found.</span>
                        </td>
                      </tr>
                    <?php else: ?>
                      <?php foreach ($recentProjects as $items): ?>
                        <?php $status = getProjectStatus($items); ?>
                        <tr class="nk-tb-item">
                          <td class="nk-tb-col"><span><?= $items['id'] ?></span></td>
                          <td class="nk-tb-col">
                            <span class="tb-lead">
                              <a href="project_detail?id=<?= $items['id']; ?>"><?= $items['title'] ?></a>
                            </span>
                          </td>
                          <td class="nk-tb-col"><span><?= $items['client_name'] ?></span></td>
                          <td class="nk-tb-col">
                            <span class="badge <?= $status['class'] ?>"><?= $status['label'] ?></span>
                          </td>
                          <td class="nk-tb-col"><span><?= $items['budget_cost'] ?></span></td>
                        </tr>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </tbody>
                </table>
              </div>
              <!-- .card-inner -->
            </div>
          </div>
        </div>
        <!-- .nk-block -->

      </div>
    </div>
  </div>
</div>
