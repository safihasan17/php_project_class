<?php
require_once 'models/userclass.php';
require_once 'models/roleclass.php';

$msg = "";

$roles = Role::readALL();
// echo "<pre>";
// print_r($roles);
// echo "</pre>";




if (isset($_POST['btn-submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $password = $_POST['password'];
    $con_password = $_POST['con_password'];

    //    echo  $role;

    if ($password == $con_password) {
        $pass = password_hash($password, PASSWORD_DEFAULT);
        $user = new User(null, $name, $email, $role, $pass);
        $res = $user->create();
        if ($res === true) {
            $msg = "User created Sucessfully";
        } else {
            $msg = $res;
        }
    } else {
        $msg = "password does not match";
    }
}
?>


<!-- <div class="content-wrapper">
    <div class="card card-primary card-outline mb-4">
        <div class="card-header">
            <div class="card-title">Form</div> <br> <br>

            <a href="manage" class="btn btn-sm btn-dark">Back</a>
        </div>

        <form method="POST">
            <div class="card-body">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">name</label>
                    <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="text" class="form-control" name="email" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"> Role</label>
                    <select class="form-control" name="role" id="">
                        <?php foreach ($roles as $items): ?>
                            <option value="<?= $items['id']; ?>"><?= $items['name']; ?></option>

                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"> Confirm Password</label>
                    <input type="password" class="form-control" name="con_password">
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" name="btn-submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

        <h3><?= $msg; ?></h3>
    </div>


</div> -->



<!-- <div class="content-wrapper m-5"> -->
    <!-- .nk-block -->
    <!-- <div class="nk-block nk-block-lg m-5">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="title nk-block-title"> Form</h4>
                <div class="nk-block-des">
                    <p></p>
                </div>
            </div>
        </div>
        <div class="card card-bordered">
            <div class="card-inner">
                <div class="card-head">
                     <h5 class="card-title">Customer Info S2</h5> -->
                <!-- </div>
                <form action="#">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label" for="full-name-1">Full Name</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="full-name-1">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label" for="email-address-1">Email address</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="email-address-1">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label" for="phone-no-1">Phone No</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="phone-no-1">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label" for="pay-amount-1">Amount</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="pay-amount-1">
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Communication</label>
                                <ul class="custom-control-group g-3 align-center">
                                    <li>
                                        <div class="custom-control custom-control-sm custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="com-email-1">
                                            <label class="custom-control-label" for="com-email-1">Email</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-control-sm custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="com-sms-1">
                                            <label class="custom-control-label" for="com-sms-1">SMS</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-control-sm custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="com-phone-1">
                                            <label class="custom-control-label" for="com-phone-1">Phone</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                        <!-- <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Payment Methods</label>
                                <ul class="custom-control-group g-3 align-center">
                                    <li>
                                        <div class="custom-control custom-control-sm custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="pay-card-1">
                                            <label class="custom-control-label" for="pay-card-1">Card</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-control-sm custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="pay-bitcoin-1">
                                            <label class="custom-control-label" for="pay-bitcoin-1">Bitcoin</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-control-sm custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="pay-cash-1">
                                            <label class="custom-control-label" for="pay-cash-1">Cash</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                        <!-- <div class="col-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> -->
    <!-- .nk-block -->
<!-- </div> --> 


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
          <h5 class="card-title">User Info</h5>
          <div>
            <h6 class="text-success d-inline me-3"><?= $msg; ?></h6>
            <a href="manage" class="btn btn-sm btn-dark">Back</a>
          </div>
        </div>

        <form method="POST">
          <div class="row g-4">

            <div class="col-6">
              <div class="form-group">
                <label class="form-label text-primary">Name</label>
                <div class="form-control-wrap">
                  <input type="text" class="form-control bg-white" name="name">
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="form-group">
                <label class="form-label text-primary">Email Address</label>
                <div class="form-control-wrap">
                  <input type="text" class="form-control bg-white" name="email">
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="form-group">
                <label class="form-label text-primary">Role</label>
                <div class="form-control-wrap">
                  <select class="form-control bg-white" name="role">
                    <?php foreach ($roles as $items): ?>
                      <option value="<?= $items['id']; ?>"><?= $items['name']; ?></option>
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
                <button type="submit" name="btn-submit" class="btn btn-lg btn-primary">Submit</button>
              </div>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>