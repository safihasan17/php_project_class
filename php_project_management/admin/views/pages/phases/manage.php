<?php

$msg = "";
require_once 'models/phasesclass.php';

if (isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];
    // echo $id;
    $res = Phases::delete($id);

    if ($res === true) {
        $msg = "project Delated Sucessfully";
    } else {
        $msg = $res;
    }
}


$rows = Phases::readALL();
// echo "<pre>";
// print_r($rows);
// echo "</pre>";


$limit = 7;
$pages = Phases::getpageNo($limit);
// print_r($pages);

$rows = Phases::readAll(1, $limit);
// echo '<pre>';
// print_r($rows);
// echo '</pre>';


if (isset($_GET['pg'])) {
    $pg = $_GET['pg'];
    // echo "<h1> page Number: $pg</h1>";
    $rows = Phases::readAll($pg, $limit);
}

?>


<div class="content-wrapper mt-5">
    <main class="app-main mt-5">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Phases List</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb bg-transparent  justify-content-end">
                            <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Phases list</li>
                        </ol>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <a class="btn btn-sm btn-dark" href="create_phases">create Phases</a>

                            </div>
                            <!-- /.card-header -->

                            <h4><?= $msg; ?></h4>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>title</th>
                                                <th>project_categories</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach ($rows as $items): ?>
                                                <tr class="align-middle">
                                                    <td><?= $items['id'] ?></td>
                                                    <td><?= $items['title'] ?></td>
                                                    <td><?= $items['project_category'] ?></td>


                                                    <td>
                                                        <div class="btn-group">

                                                            <a href="edit_phases?id=<?= $items['id']; ?>" class="btn btn-sm btn-default"><i class="fa fa-edit text-success"></i></a>
                                                            <form action="" method="POST">
                                                                <input type="hidden" name="delete_id" value="<?= $items['id']; ?>">
                                                                <button type="submit" class="btn btn-sm btn-default"><i class="fa fa-trash text-denger"></i></button>
                                                            </form>



                                                        </div>
                                                    </td>
                                                </tr>

                                            <?php endforeach; ?>



                                        </tbody>
                                    </table>
                                </div>

                                <!-- pagination -->

                                <div class="card-footer clearfix">
                                    <ul class="pagination pagination-sm m-0 float-right">

                                        <li class="page-item"><a class="page-link" href="manage_phases?pg=1">First</a></li>

                                        <?php for ($i = 1; $i <= $pages; $i++): ?>
                                            <li class="page-item <?= ($pg == $i) ? 'active' : '' ?>">
                                                <a class="page-link" href="manage_phases?pg=<?= $i; ?>"><?= $i ?></a>
                                            </li>
                                        <?php endfor; ?>

                                        <li class="page-item"><a class="page-link" href="manage_phases?pg=<?= $pages; ?>">Last</a></li>

                                    </ul>
                                </div>

                            </div>
                            <!-- /.card-body -->

                        </div>
                        <!-- /.card -->


                        <!-- /.card -->
                    </div>
                    <!-- /.col -->

                    <!-- /.col -->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content-->
    </main>
</div>


<!-- <div class="content-wrapper mt-4">
     <div class="nk-block nk-block-lg mt-3 ">
                      <div class="nk-block-head">
                        <div class="nk-block-head-content">
                          <h4 class="nk-block-title">Table </h4>
                          <div class="nk-block-des">
                            <p class="btn btn-sm btn-dark m-3"> Users </p>
                          </div>
                        </div>
                      </div>
                      <div class="card card-bordered card-preview">
                        <div class="card-inner">
                          <table class="table">
                            <thead>
                              <tr>
                                <th >ID</th>
                                <th >Name</th>
                                <th >Email</th>
                                <th >Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      
                      
</div> -->