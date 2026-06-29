<?php
require_once 'models/projectcatagoryclass.php';
require_once 'models/phasesclass.php';

$msg = "";

// $p_phases = Phases::readALL();
// echo "<pre>";
// print_r($p_catagory);
// echo "</pre>";

$p_categories = ProjectCategory::readALL();


$tittles = Phases::readALL();
// echo "<pre>";
// print_r($p_categories);
// echo "</pre>";

// $users = User::readALL();
// echo "<pre>";
// print_r($users);
// echo "</pre>";

$row = null;
if (isset($_GET['id'])) {
    $row = Phases::readById($_GET['id']);
    // echo "<pre>";
    // print_r($row);
    // echo "</pre>";
}


if (isset($_POST['btn_submit'])) {
    $project_category_id = $_POST['project_category'];
    $title = $_POST['title'];


    $phases = new phases($_GET['id'], $project_category_id, $title);

    $phases = $phases->update();

    if ($phases === true) {
        $msg = "Phases saved successfully.";
    } else {
        $msg = "Error: " . $phases;
    }
}


?>


<!-- <div class="content-wrapper">
    <div class="card card-primary card-outline mb-4">
        <div class="card-header">
            <div class="card-title">Form</div> <br> <br>

            <a href="manage_phases" class="btn btn-sm btn-dark">Back</a>
        </div>

        <form action="" method="POST" enctype="multipart/form-data">


            <div class="card-body">
                <div class="form-group">
                    <label>title</label>
                    <input class="form-control" type="text" name="title" id="" value="<?= $row['title'] ?>">
                </div>

                <div class="form-group">
                    <label>project_category</label>
                    <select class="form-control" name="project_category">

                        <?php foreach ($p_categories as $items):
                            $selected = $items['id'] == $row['project_category_id'] ? 'selected' : ''; ?>

                            <option value="<?= $items['id']; ?>" <?= $selected ?>><?= $items['name']; ?></option>
                        <?php endforeach; ?>

                    </select>
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
        <h4 class="title nk-block-title">Edit Phases</h4>
      </div>
    </div>
    <div class="card card-bordered">
      <div class="card-inner">
        <div class="card-head d-flex justify-content-between align-items-center mb-3">
          <h5 class="card-title">Phases Info</h5>
          <div>
            <h6 class="text-success d-inline me-3"><?= $msg; ?></h6>
            <a href="manage_phases" class="btn btn-sm btn-dark">Back</a>
          </div>
        </div>

        <form action="" method="POST" enctype="multipart/form-data">
          <div class="row g-4">

            <div class="col-6">
              <div class="form-group">
                <label class="form-label text-primary">Title</label>
                <div class="form-control-wrap">
                  <input type="text" class="form-control bg-white" name="title" value="<?= $row['title'] ?>">
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="form-group">
                <label class="form-label text-primary">Project Category</label>
                <div class="form-control-wrap">
                  <select class="form-control bg-white" name="project_category">
                    <?php foreach ($p_categories as $items):
                      $selected = $items['id'] == $row['project_category_id'] ? 'selected' : ''; ?>
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
