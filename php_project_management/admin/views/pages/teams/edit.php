<?php
require_once 'models/projectclass.php';
require_once 'models/teamclass.php';

$msg = "";

$Teams = Project::readALL();
// echo "<pre>";
// print_r($p_catagory);
// echo "</pre>";

$row = null;
if(isset($_GET['id'])){
    $row = Teams::readById($_GET['id']);
    // echo "<pre>";
    // print_r($row);
    // echo "</pre>";
}




if (isset($_POST['btn_submit'])) {
  $name = $_POST['name'];
  $project_id = $_POST['project_id'];

  
  $team = new Teams($_GET['id'], $name, $project_id );

  $teams = $team->update();

  if ($teams === true) {
    $msg = "Team Updated  successfully.";
  } else {
    $msg = "Error: " .$teams;
  }

  
}


?>


<!-- <div class="content-wrapper">
  <div class="card card-primary card-outline mb-4">
    <div class="card-header">
      <div class="card-title">Form</div> <br> <br>

      <a href="manage_teams" class="btn btn-sm btn-dark">Back</a>
    </div>

    <form action="" method="POST" enctype="multipart/form-data">
      <div class="card-body">
        <div class="form-group">
          <label>name</label>
          <input  class="form-control" type="text" name="name" id="" value="<?= $row['name'] ?>">
        </div>

        <div class="form-group">
          <label>projects </label>
          <select class="form-control" name="project_id">

            <?php foreach ($Teams as $items):
            $selected = $items['id'] == $row['project_id'] ? 'selected' : '';
            ?>
              <option value="<?= $items['id']; ?>" <?=  $selected ?> ><?= $items['title']; ?></option>
            <?php endforeach; ?>

          </select>
        </div>
        
        
      </div>
     
      <div class="card-footer">
        <button type="submit" name="btn_submit" class="btn btn-primary">update</button>
      </div>
    </form>

    <h3><?= $msg; ?></h3>
  </div>


</div> -->



<div class="content-wrapper m-5">
  <div class="nk-block nk-block-lg m-5">
    <div class="nk-block-head">
      <div class="nk-block-head-content">
        <h4 class="title nk-block-title">Form</h4>
      </div>
    </div>
    <div class="card card-bordered">
      <div class="card-inner">
        <div class="card-head d-flex justify-content-between align-items-center mb-3">
          <h5 class="card-title">Teams Info</h5>
          <div>
            <h6 class="text-success d-inline me-3"><?= $msg; ?></h6>
            <a href="manage_teams" class="btn btn-sm btn-dark">Back</a>
          </div>
        </div>

        <form action="" method="POST" enctype="multipart/form-data">
          <div class="row g-4">

            <div class="col-6">
              <div class="form-group">
                <label class="form-label text-primary">Name</label>
                <div class="form-control-wrap">
                  <input class="form-control" type="text" name="name" value="<?= $row['name'] ?>">
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="form-group">
                <label class="form-label text-primary">Projects</label>
                <div class="form-control-wrap">
                  <select class="form-control bg-white" name="project_id">
                    <?php foreach ($Teams as $items):
                      $selected = $items['id'] == $row['project_id'] ? 'selected' : '';
                    ?>
                      <option value="<?= $items['id']; ?>" <?= $selected ?>><?= $items['title']; ?></option>
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


