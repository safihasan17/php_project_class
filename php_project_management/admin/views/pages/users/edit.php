<?php
require_once 'models/userclass.php';
require_once 'models/roleclass.php';

$msg = "";


if(isset($_POST['btn-submit'])){
   $id= $_POST['id'];
   $name= $_POST['name']; 
   $email= $_POST['email']; 
   $role= $_POST['role']; 

   $user = new User($id, $name, $email, $role);
   $user->update();
   
   

}

$roles = Role::readALL();

$row = null;
if(isset($_GET['id'])){
    $row = User::readById($_GET['id']);
    // echo "<pre>";
    // print_r($item);
    // echo "</pre>";
}
else{
    
}
// echo "<pre>";
// print_r($roles);
// echo "</pre>";




?>


<!-- <div class="content-wrapper">
    <div class="card card-primary card-outline mb-4">
        <div class="card-header">
            <div class="card-title">Edit User</div> <br> <br>

           <a  href="manage"  class="btn btn-sm btn-dark">Back</a>
        </div>
        <h4><?= $msg ?? "" ?></h4>
        
        <form method="POST">
            <input type="hidden" name="id" id="" value="<?= $row['id']; ?>" >
            <div class="card-body">
 
               <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">name</label>
                    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" value="<?= $row['name'] ?>">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="text" class="form-control" name="email" aria-describedby="emailHelp" value="<?= $row['email'] ?>">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"> Role</label>
                    <select class="form-control" name="role" id="">
                        <?php foreach($roles as $items): 
                             $selected = $items['id'] == $row['role_id'] ? 'selected' : '';?>
                        <option value="<?= $items['id']; ?>" <?= $selected; ?> > <?= $items['name']; ?></option>
                        
                        <?php endforeach;?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"> Confirm Password</label>
                    <input type="password" class="form-control" name="con_password" >
                </div>

            </div>
            <div class="card-footer">
                <button type="submit"  name="btn-submit" class="btn btn-primary">Update </button>
            </div>
        </form>

        <h3><?= $msg; ?></h3> 
    </div>


</div> -->



<div class="content-wrapper m-5">
  <div class="nk-block nk-block-lg m-5">
    <div class="nk-block-head">
      <div class="nk-block-head-content">
        <h4 class="title nk-block-title">Edit User</h4>
      </div>
    </div>
    <div class="card card-bordered">
      <div class="card-inner">
        <div class="card-head d-flex justify-content-between align-items-center mb-3">
          <h5 class="card-title">User Info</h5>
          <div>
            <h6 class="text-success d-inline me-3"><?= $msg ?? "" ?></h6>
            <a href="manage" class="btn btn-sm btn-dark">Back</a>
          </div>
        </div>

        <form method="POST">
          <input type="hidden" name="id" value="<?= $row['id']; ?>">
          <div class="row g-4">

            <div class="col-6">
              <div class="form-group">
                <label class="form-label text-primary">Name</label>
                <div class="form-control-wrap">
                  <input type="text" class="form-control bg-white" name="name" value="<?= $row['name'] ?>">
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="form-group">
                <label class="form-label text-primary">Email Address</label>
                <div class="form-control-wrap">
                  <input type="text" class="form-control bg-white" name="email" value="<?= $row['email'] ?>">
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="form-group">
                <label class="form-label text-primary">Role</label>
                <div class="form-control-wrap">
                  <select class="form-control bg-white" name="role">
                    <?php foreach ($roles as $items):
                      $selected = $items['id'] == $row['role_id'] ? 'selected' : ''; ?>
                      <option value="<?= $items['id']; ?>" <?= $selected; ?>><?= $items['name']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="form-group">
                <label class="form-label text-primary">Password</label>
                <div class="form-control-wrap">
                  <input type="password" class="form-control bg-white" name="password">
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="form-group">
                <label class="form-label text-primary">Confirm Password</label>
                <div class="form-control-wrap">
                  <input type="password" class="form-control bg-white" name="con_password">
                </div>
              </div>
            </div>

            <div class="col-12">
              <div class="form-group">
                <button type="submit" name="btn-submit" class="btn btn-lg btn-primary">Update</button>
              </div>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>