<?php
require_once 'models/taskclass.php';
require_once 'models/teamclass.php';
require_once 'models/projectclass.php';
require_once 'models/phasesclass.php';

$msg = "";

$Tasks = Tasks::readALL();
// echo "<pre>";
// print_r($tasks);
// echo "</pre>";

$Teams = Teams::readALL();

$project = Project::readALL();

$phases = Phases::readALL();


$row = null;
if(isset($_GET['id'])){
    $row = Tasks::readById($_GET['id']);
    // echo "<pre>";
    // print_r($row);
    // echo "</pre>";
}





if (isset($_POST['btn_submit'])) {
    $project_id = $_POST['project_id'];
    $phase_id = $_POST['phase_id'];
    $tittle = $_POST['tittle'];
    $tassign_to_team_id = $_POST['assign_to_team_id'];



    $tasks = new Tasks($_GET['id'], $project_id, $phase_id,  $tittle, $tassign_to_team_id);

    $tasks = $tasks->update();

    if ($tasks === true) {
        $msg = "tasks saved successfully.";
    } else {
        $msg = "Error: " . $tasks;
    }
}


?>


<!-- <div class="content-wrapper">
    <div class="card card-primary card-outline mb-4">
        <div class="card-header">
            <div class="card-title">Form</div> <br> <br>

            <a href="manage_tasks" class="btn btn-sm btn-dark">Back</a>
        </div>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="card-body">

                <div class="form-group">
                    <label class="text-primary">project </label>
                    <select name="project_id" class="form-control">
                        <?php foreach ($project as $items): 
                             $selected = $items['id'] == $row['project_id'] ? 'selected' : '';
                            ?>
                            <option value="<?= $items['id']; ?>" <?=  $selected ?> ><?= $items['title']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label class="text-primary">phases </label>
                    <select name="phase_id" class="form-control">
                        <?php foreach ($phases as $items):
                            $selected = $items['id'] == $row['phase_id'] ? 'selected' : '';
                            ?>
                            <option value="<?= $items['id']; ?>" <?=  $selected ?> ><?= $items['title']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label class="text-primary">Tittle</label>
                    <input type="text" class="form-control" name="tittle" placeholder="Enter name"  value="<?= $row['title'] ?>">
                </div>

                <div class="form-group">
                    <label class="text-primary">assign to teams </label>
                    <select name="assign_to_team_id" class="form-control">
                        <?php foreach ($Teams as $items): 
                            $selected = $items['id'] == $row['assign_to_team_id'] ? 'selected' : '';
                            ?>
                            <option value="<?= $items['id']; ?>" <?=  $selected ?> ><?= $items['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>


            </div>
            
            <div class="card-footer">
                <button type="submit" name="btn_submit" class="btn btn-primary">Update</button>
            </div>
        </form>

        <h3><?= $msg; ?></h3>
    </div>


</div> -->



<div class="content-wrapper m-5">
  <div class="nk-block nk-block-lg m-5">
    <div class="nk-block-head">
      <div class="nk-block-head-content">
        <h4 class="title nk-block-title">Edit Task</h4>
      </div>
    </div>
    <div class="card card-bordered">
      <div class="card-inner">
        <div class="card-head d-flex justify-content-between align-items-center mb-3">
          <h5 class="card-title">Task Info</h5>
          <div>
            <h6 class="text-success d-inline me-3"><?= $msg; ?></h6>
            <a href="manage_tasks" class="btn btn-sm btn-dark">Back</a>
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
                <label class="form-label text-primary">Title</label>
                <div class="form-control-wrap">
                  <input type="text" class="form-control bg-white" name="tittle" placeholder="Enter title" value="<?= $row['title'] ?>">
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="form-group">
                <label class="form-label text-primary">Assign To Teams</label>
                <div class="form-control-wrap">
                  <select name="assign_to_team_id" class="form-control bg-white">
                    <?php foreach ($Teams as $items):
                      $selected = $items['id'] == $row['assign_to_team_id'] ? 'selected' : ''; ?>
                      <option value="<?= $items['id']; ?>" <?= $selected ?>><?= $items['name']; ?></option>
                    <?php endforeach; ?>
                  </select>
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