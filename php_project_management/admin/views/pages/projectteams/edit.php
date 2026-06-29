<?php
require_once 'models/projectteamsclass.php';
require_once 'models/teamclass.php';
require_once 'models/teamroleclass.php';
require_once 'models/teammemberclass.php';

$msg = "";

$projectTeams = ProjectTeam::readALL();
// echo "<pre>";
// print_r($Teams);
// echo "</pre>";

$Teams = Teams::readALL();

$TeamRole = TeamRole::readALL();

$TeamMember = TeamMember::readALL();


$row = null;
if(isset($_GET['id'])){
    $row = ProjectTeam::readById($_GET['id']);
    // echo "<pre>";
    // print_r($row);
    // echo "</pre>";
}





if (isset($_POST['btn_submit'])) {
    $team_id = $_POST['team_id'];
    $team_role_id = $_POST['team_role_id'];
    $team_member_id = $_POST['team_member_id'];
    


    $ProjectTeam = new ProjectTeam( $_GET['id'] ,$team_id, $team_role_id, $team_member_id);

    $teams = $ProjectTeam->update();

    if ($teams === true) {
        $msg = " project team list saved successfully.";
    } else {
        $msg = "Error: " . $teams;
    }
}


?>

<!-- 
<div class="content-wrapper">
    <div class="card card-primary card-outline mb-4">
        <div class="card-header">
            <div class="card-title">Form</div> <br> <br>

            <a href="manage_project_teams" class="btn btn-sm btn-dark">Back</a>
        </div>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="card-body">

                <div class="form-group">
                    <label>Teams </label>
                    <select class="form-control" name="team_id">

                        <?php foreach ($Teams as $items):
                           $selected = $items['id'] == $row['team_id'] ? 'selected' : '';  
                            ?>
                            <option value="<?= $items['id']; ?>" <?=  $selected ?> ><?= $items['name']; ?></option>
                        <?php endforeach; ?>

                    </select>
                </div>

                <div class="form-group">
                    <label>Team role </label>
                    <select class="form-control" name="team_role_id">

                        <?php foreach ($TeamRole as $items):
                           $selected = $items['id'] == $row['team_role_id'] ? 'selected' : ''; 
                            ?>
                            <option value="<?= $items['id']; ?>" <?=  $selected ?> ><?= $items['name']; ?></option>
                        <?php endforeach; ?>

                    </select>
                </div>

                <div class="form-group">
                    <label>Team member </label>
                    <select class="form-control" name="team_member_id">

                        <?php foreach ($TeamMember as $items):
                          $selected = $items['id'] == $row['team_member_id'] ? 'selected' : ''; 
                            ?>
                            <option value="<?= $items['id']; ?>" <?=  $selected ?>  ><?= $items['name']; ?></option>
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
        <h4 class="title nk-block-title">Edit Project Teams</h4>
      </div>
    </div>
    <div class="card card-bordered">
      <div class="card-inner">
        <div class="card-head d-flex justify-content-between align-items-center mb-3">
          <h5 class="card-title">Project Teams Info</h5>
          <div>
            <h6 class="text-success d-inline me-3"><?= $msg; ?></h6>
            <a href="manage_project_teams" class="btn btn-sm btn-dark">Back</a>
          </div>
        </div>

        <form action="" method="POST" enctype="multipart/form-data">
          <div class="row g-4">

            <div class="col-6">
              <div class="form-group">
                <label class="form-label text-primary">Teams</label>
                <div class="form-control-wrap">
                  <select class="form-control bg-white" name="team_id">
                    <?php foreach ($Teams as $items):
                      $selected = $items['id'] == $row['team_id'] ? 'selected' : ''; ?>
                      <option value="<?= $items['id']; ?>" <?= $selected ?>><?= $items['name']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="form-group">
                <label class="form-label text-primary">Team Role</label>
                <div class="form-control-wrap">
                  <select class="form-control bg-white" name="team_role_id">
                    <?php foreach ($TeamRole as $items):
                      $selected = $items['id'] == $row['team_role_id'] ? 'selected' : ''; ?>
                      <option value="<?= $items['id']; ?>" <?= $selected ?>><?= $items['name']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="form-group">
                <label class="form-label text-primary">Team Member</label>
                <div class="form-control-wrap">
                  <select class="form-control bg-white" name="team_member_id">
                    <?php foreach ($TeamMember as $items):
                      $selected = $items['id'] == $row['team_member_id'] ? 'selected' : ''; ?>
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
