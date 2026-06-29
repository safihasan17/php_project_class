<?php
require_once 'models/phase_costs_and_timing_class.php';
require_once 'models/projectclass.php';
require_once 'models/phasesclass.php';

$msg = "";

$Tasks = PhaseCostsandTiming::readALL();
// echo "<pre>";
// print_r($tasks);
// echo "</pre>";

$project = Project::readALL();

$phases = Phases::readALL();

$row = null;
if(isset($_GET['id'])){
    $row = PhaseCostsandTiming::readById($_GET['id']);
    // echo "<pre>";
    // print_r($row);
    // echo "</pre>";
}


function getHtmlDateValue($datetimeString) {
    // Converts the datetime string into the YYYY-MM-DD format required by HTML
    return date('Y-m-d', strtotime($datetimeString));
}



if (isset($_POST['btn_submit'])) {
    $phase_id = $_POST['phase_id'];
    $project_id = $_POST['project_id'];
    $allocatecost = $_POST['allocatecost'];
    $actualcost = $_POST['actualcost'];

    $actualtime = !empty($_POST['actualtime']) ? $_POST['actualtime'] : '1000-01-01';
    $expected_time = !empty($_POST['expected_time']) ? $_POST['expected_time'] : '1000-01-01';
    



    $tasks = new PhaseCostsandTiming($_GET['id'],  $phase_id, $project_id, $allocatecost, $actualcost, $actualtime, $expected_time  );

    $tasks = $tasks->update();

    if ($tasks === true) {
        $msg = "tasks saved successfully.";
    } else {
        $msg = "Error: " . $tasks;
    }
}


?>

<!-- 
<div class="content-wrapper">
    <div class="card card-primary card-outline mb-4">
        <div class="card-header">
            <div class="card-title">Form</div> <br> <br>

            <a href="manage_phases_cost" class="btn btn-sm btn-dark">Back</a>
        </div>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="card-body">

                <div class="form-group">
                    <label class="text-primary">project </label>
                    <select name="project_id" class="form-control">
                        <?php foreach ($project as $items): 
                            $selected = $items['id'] == $row['project_id'] ? 'selected' : '';?>
                            ?>
                            <option value="<?= $items['id']; ?>" <?=  $selected ?> ><?= $items['title']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label class="text-primary">phases </label>
                    <select name="phase_id" class="form-control">
                        <?php foreach ($phases as $items):
                            $selected = $items['id'] == $row['phase_id'] ? 'selected' : '';?>
                            ?>
                            <option value="<?= $items['id']; ?>"  <?=  $selected ?> ><?= $items['title']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label class="text-primary">Allocate Cost</label>
                    <input type="number" class="form-control" name="allocatecost" value="<?= $row['allocated_cost'] ?>">
                </div>

                <div class="form-group">
                    <label class="text-primary">Actual Cost</label>
                    <input type="number" class="form-control" name="actualcost"  value="<?= $row['actual_cost'] ?>" >
                </div>

                <div class="form-group">
                    <label class="text-primary">Actual_time</label>
                    <input type="date" class="form-control" name="actualtime" value="<?= getHtmlDateValue($row['actual_time'])  ?>" >
                </div>

                <div class="form-group">
                    <label class="text-primary">expected_time</label>
                    <input type="date" class="form-control" name="expected_time" value="<?= getHtmlDateValue($row['expected_time'])  ?>">
                </div>

                


            </div>
            
            <div class="card-footer">
                <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

        <h3><?= $msg; ?></h3>
    </div>


</div> -->



<div class="content-wrapper m-5">
  <div class="nk-block nk-block-lg m-5">
    <div class="nk-block-head">
      <div class="nk-block-head-content">
        <h4 class="title nk-block-title">Edit Phases Cost</h4>
      </div>
    </div>
    <div class="card card-bordered">
      <div class="card-inner">
        <div class="card-head d-flex justify-content-between align-items-center mb-3">
          <h5 class="card-title">Phases Cost Info</h5>
          <div>
            <h6 class="text-success d-inline me-3"><?= $msg; ?></h6>
            <a href="manage_phases_cost" class="btn btn-sm btn-dark">Back</a>
          </div>
        </div>

        <form action="" method="POST" enctype="multipart/form-data">
          <div class="row g-4">

            <div class="col-6">
              <div class="form-group">
                <label class="form-label text-primary">Project</label>
                <div class="form-control-wrap">
                  <select name="project_id" class="form-control bg-white">
                    <?php foreach ($project as $items):
                      $selected = $items['id'] == $row['project_id'] ? 'selected' : ''; ?>
                      <option value="<?= $items['id']; ?>" <?= $selected ?>><?= $items['title']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="form-group">
                <label class="form-label text-primary">Phases</label>
                <div class="form-control-wrap">
                  <select name="phase_id" class="form-control bg-white">
                    <?php foreach ($phases as $items):
                      $selected = $items['id'] == $row['phase_id'] ? 'selected' : ''; ?>
                      <option value="<?= $items['id']; ?>" <?= $selected ?>><?= $items['title']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="form-group">
                <label class="form-label text-primary">Allocate Cost</label>
                <div class="form-control-wrap">
                  <input type="number" class="form-control bg-white" name="allocatecost" value="<?= $row['allocated_cost'] ?>">
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="form-group">
                <label class="form-label text-primary">Actual Cost</label>
                <div class="form-control-wrap">
                  <input type="number" class="form-control bg-white" name="actualcost" value="<?= $row['actual_cost'] ?>">
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="form-group">
                <label class="form-label text-primary">Actual Time</label>
                <div class="form-control-wrap">
                  <input type="date" class="form-control bg-white" name="actualtime" value="<?= getHtmlDateValue($row['actual_time']) ?>">
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="form-group">
                <label class="form-label text-primary">Expected Time</label>
                <div class="form-control-wrap">
                  <input type="date" class="form-control bg-white" name="expected_time" value="<?= getHtmlDateValue($row['expected_time']) ?>">
                </div>
              </div>
            </div>

            <div class="col-12">
              <div class="form-group">
                <button type="submit" name="btn_submit" class="btn btn-lg btn-primary">Update</button>
              </div>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>