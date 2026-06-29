<?php
require_once 'models/userclass.php';
require_once 'models/projectcatagoryclass.php';
require_once 'models/clintclass.php';
require_once 'models/projectclass.php';


$msg = "";

$p_catagory = ProjectCategory::readALL();
// echo "<pre>";
// print_r($p_catagory);
// echo "</pre>";


$clints = Clint::readALL();
// echo "<pre>";
// print_r($clints);
// echo "</pre>";

$users = User::readALL();
// echo "<pre>";
// print_r($users);
// echo "</pre>";





if (isset($_POST['btn_submit'])) {
  $tittle = $_POST['tittle'];
  $clint_id = $_POST['clint_id'];
  $project_category_id = $_POST['project_category_id'];
  $user_id = $_POST['user_id'];
  $exstartingtime = !empty($_POST['exstartingtime']) ? $_POST['exstartingtime'] : '1000-01-01';
  $exendingtime   = !empty($_POST['exendingtime'])   ? $_POST['exendingtime']   : '1000-01-01';
  $acstartingtime = !empty($_POST['acstartingtime']) ? $_POST['acstartingtime'] : '1000-01-01';
  $acendingtime   = !empty($_POST['acendingtime'])   ? $_POST['acendingtime']   : '1000-01-01';


  $actualcost = $_POST['actualcost'];
  $budgetcost = $_POST['budgetcost'];

  // echo $exstartingtime . "<br>". $exendingtime;
 


  $project = new project(null, $tittle, $clint_id, $project_category_id, $user_id, $exstartingtime, $exendingtime, $acstartingtime, $acendingtime, $actualcost, $budgetcost);

  $projects = $project->create();

  if ($projects === true) {
    $msg = "Project saved successfully.";
  } else {
    $msg = "Error: " . $projects;
  }

  // $exstartingtime = !empty($_POST['exstartingtime']) ? $_POST['exstartingtime'] : null;
  // $exendingtime   = !empty($_POST['exendingtime'])   ? $_POST['exendingtime']   : null;
  // $acstartingtime = !empty($_POST['acstartingtime']) ? $_POST['acstartingtime'] : null;
  // $acendingtime   = !empty($_POST['acendingtime'])   ? $_POST['acendingtime']   : null;


  // $exstartingtime_raw = $_POST['exstartingtime'];
  // $exstartingtime = date('Y-m-d', strtotime($exstartingtime_raw));

  // $exendingtime_raw = $_POST['exendingtime'];
  // $exendingtime = date('Y-m-d', strtotime($exendingtime_raw));

  // $acstartingtime_raw = $_POST['acstartingtime'];
  // $acstartingtime = date('Y-m-d', strtotime($acstartingtime_raw));

  // $acendingtime_raw = $_POST['acendingtime'];
  // $acendingtime = date('Y-m-d', strtotime($acendingtime_raw));

  

  // echo  $budgetcost .  "<br>".  $exendingtime  . "<br>" . $exstartingtime. "<br>".  $acstartingtime . "<br>" . $actualcost  ;
  
}


?>


<!-- <div class="content-wrapper">
  <div class="card card-primary card-outline mb-4">
    <div class="card-header">
      <div class="card-title">Form</div> <br> <br>
       <h3><?= $msg; ?></h3>
      <a href="manage_project" class="btn btn-sm btn-dark">Back</a>
    </div>

    <form action="" method="POST" enctype="multipart/form-data">
      <div class="card-body">
        <div class="form-group">
          <label class="text-primary">tittle</label>
          <input type="text" class="form-control" name="tittle" placeholder="Enter name">
        </div>
        <div class="form-group">
          <label class="text-primary">clint</label>
          <select class="form-control" name="clint_id">

            <?php foreach ($clints as $items): ?>
              <option value="<?= $items['id']; ?>"><?= $items['name']; ?></option>
            <?php endforeach; ?>

          </select>
        </div>
        <div class="form-group">
          <label class="text-primary">project category</label>
          <select class="form-control" name="project_category_id">
            <?php foreach ($p_catagory as $items): ?>
              <option value="<?= $items['id']; ?>"><?= $items['name']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label class="text-primary">user</label>
          <select class="form-control" name="user_id">
            <?php foreach ($users as $items): ?>
              <option value="<?= $items['id']; ?>"><?= $items['name']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label class="text-primary">expected_starting_time</label>
          <input type="date" class="form-control" name="exstartingtime">
        </div>
        <div class="form-group">
          <label class="text-primary">expected_ending_time</label>
          <input type="date" class="form-control" name="exendingtime">
        </div>
        <div class="form-group">
          <label class="text-primary">actual_starting_time</label>
          <input type="date" class="form-control" name="acstartingtime" value="">
        </div>
        <div class="form-group">
          <label class="text-primary">actual_ending_time</label>
          <input type="date" class="form-control" name="acendingtime">
        </div>
        <div class="form-group">
          <label class="text-primary">actual_cost</label>
          <input type="number" class="form-control" name="actualcost" value="180000">
        </div>

        <div class="form-group">
          <label class="text-primary">budget_cost</label>
          <input type="number" class="form-control" name="budgetcost" value="190000">
        </div>


       
      </div>
      
      <div class="card-footer">
        <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
      </div>
    </form>

    
  </div>


</div> -->






<div class="content-wrapper mt-5">
  <div class="nk-block nk-block-lg m-5">
    <div class="nk-block-head">
      <div class="nk-block-head-content">
        <h4 class="title nk-block-title">Form</h4>
      </div>
    </div>
    <div class="card card-bordered">
      <div class="card-inner">
        <div class="card-head d-flex justify-content-between align-items-center mb-3">
          <h5 class="card-title">Project Info</h5>
          <div>
            <h6 class="text-success d-inline me-3"><?= $msg; ?></h6>
            <a href="manage_project" class="btn btn-sm btn-dark">Back</a>
          </div>
        </div>

        <form action="" method="POST" enctype="multipart/form-data">
          <div class="row g-4">

            <div class="col-12  col-md-6">
              <div class="form-group">
                <label class="form-label text-primary">Title</label>
                <div class="form-control-wrap">
                  <input type="text" class="form-control bg-white" name="tittle" placeholder="Enter title">
                </div>
              </div>
            </div>

            <div class="col-12  col-md-6">
              <div class="form-group">
                <label class="form-label text-primary">Client</label>
                <div class="form-control-wrap">
                  <select class="form-control bg-white" name="clint_id">
                    <?php foreach ($clints as $items): ?>
                      <option value="<?= $items['id']; ?>"><?= $items['name']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-12  col-md-6">
              <div class="form-group">
                <label class="form-label text-primary">Project Category</label>
                <div class="form-control-wrap">
                  <select class="form-control bg-white" name="project_category_id">
                    <?php foreach ($p_catagory as $items): ?>
                      <option value="<?= $items['id']; ?>"><?= $items['name']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-12  col-md-6">
              <div class="form-group">
                <label class="form-label text-primary">User</label>
                <div class="form-control-wrap">
                  <select class="form-control bg-white" name="user_id">
                    <?php foreach ($users as $items): ?>
                      <option value="<?= $items['id']; ?>"><?= $items['name']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-12  col-md-6">
              <div class="form-group">
                <label class="form-label text-primary">Expected Starting Time</label>
                <div class="form-control-wrap">
                  <input type="date" class="form-control bg-white" name="exstartingtime">
                </div>
              </div>
            </div>

            <div class="col-12  col-md-6">
              <div class="form-group">
                <label class="form-label text-primary">Expected Ending Time</label>
                <div class="form-control-wrap">
                  <input type="date" class="form-control bg-white" name="exendingtime">
                </div>
              </div>
            </div>

            <div class="col-12  col-md-6">
              <div class="form-group">
                <label class="form-label text-primary">Actual Starting Time</label>
                <div class="form-control-wrap">
                  <input type="date" class="form-control bg-white" name="acstartingtime">
                </div>
              </div>
            </div>

            <div class="col-12  col-md-6">
              <div class="form-group">
                <label class="form-label text-primary">Actual Ending Time</label>
                <div class="form-control-wrap">
                  <input type="date" class="form-control bg-white" name="acendingtime">
                </div>
              </div>
            </div>

            <div class="col-12  col-md-6">
              <div class="form-group">
                <label class="form-label text-primary">Actual Cost</label>
                <div class="form-control-wrap">
                  <input type="number" class="form-control bg-white" name="actualcost" value="180000">
                </div>
              </div>
            </div>

            <div class="col-12  col-md-6">
              <div class="form-group">
                <label class="form-label text-primary">Budget Cost</label>
                <div class="form-control-wrap">
                  <input type="number" class="form-control bg-white" name="budgetcost" value="190000">
                </div>
              </div>
            </div>

            <div class="col-12">
              <div class="form-group">
                <button type="submit" name="btn_submit" class="btn btn-lg btn-primary">Submit</button>
              </div>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>