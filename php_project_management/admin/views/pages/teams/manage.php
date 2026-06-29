<?php

$msg = "";
require_once 'models/teamclass.php';

if(isset($_POST['delete_id'])){
    $id = $_POST['delete_id'];
    // echo $id;
    $res = Teams::delete($id);

    if($res === true){
        $msg= "project Delated Sucessfully";
    }else{
        $msg = $res;
    }

    

}


$rows = Teams::readALL();
// echo "<pre>";
// print_r($rows);
// echo "</pre>";

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
                        <h3 class="mb-0">Team List</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb bg-transparent  justify-content-end">
                            <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Team list</li>
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
                                <a class="btn btn-sm btn-dark" href="create_teams">create Teams</a>

                            </div>
                            <!-- /.card-header -->

                          <h4><?= $msg; ?></h4>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>projects</th>
                                                <th>Action</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php foreach($rows as $items): ?>
                                            <tr class="align-middle">
                                                <td><?= $items['id'] ?></td>
                                                <td><?= $items['name'] ?></td>
                                                <td><?= $items['project_title'] ?></td>
                                                
                                             
                                                <td>
                                                    <div class="btn-group">
                                                        
                                                        <a href="edit_teams?id=<?= $items['id']; ?>" class="btn btn-sm btn-default" ><i class="fa fa-edit text-success"></i></a> 
                                                        <form action="" method="POST">
                                                            <input type="hidden" name="delete_id" value="<?= $items['id']; ?>">
                                                             <button type="submit" class="btn btn-sm btn-default"><i class="fa fa-trash text-denger"></i></button>
                                                        </form>
                                                        


                                                    </div>
                                                </td>
                                            </tr>

                                            <?php endforeach;?>



                                        </tbody>
                                    </table>
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