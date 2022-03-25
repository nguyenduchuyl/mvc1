<?php include 'views/frontend/layout/master.php' ?>

<?php startblock('title') ?>
    User manage
<?php endblock() ?>

<?php startblock('css') ?>
    <?php include('views/admin/user/css.php')?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.13/fc-3.2.2/fh-3.1.2/r-2.1.0/sc-1.4.2/datatables.min.css" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php endblock() ?>


<?php startblock('content') ?>

    <div style="width: 100%; ">

        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#create-user">Create</button>

        
        <table class="table table-bordered table-hover users-table" id="list-users">
            <thead>
                <tr>
                    <th>
                        STT
                    </th>
                    <th>
                        Avatar
                    </th>
                    <th>
                        <input type="text" class="form-control" placeholder="Full name" />
                    </th>
                    <th>
                        <input type="text" class="form-control" placeholder="User name" />
                    </th>
                    <th>
                        <input type="text" class="form-control" placeholder="Birthday" />
                    </th>
                    <th>
                        <input type="text" class="form-control" placeholder="Email" />
                    </th>
                    <th>
                         <input type="text" class="form-control" placeholder="Phone" />
                    </th>
                    <th>
                         <input type="text" class="form-control" placeholder="Address" />
                    </th>
                    <th>
                        Select
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($users as $user){
                ?>
                    <tr id="user-row-<?php echo $user->id;?>">
                        <td>

                        </td>
                        <td>
                            <img src="<?php echo $user->getAvatar();?>" class="avatar"/>
                        </td>
                        <td>
                            <?php echo $user->getFullName();?>
                        </td>
                        <td>
                            <?php echo $user->username;?>
                        </td>
                        <td>
                            <?php echo $user->getDateOfBirth();?>
                        </td>
                        <td>
                            <p>
                                <i class="fa fa-mail"></i> <?php echo $user->email;?>
                            </p>
                        </td>
                        <td>
                            <?php echo $user->phone_number;?>
                        </td>
                        <td>
                             <?php echo $user->address;?>
                         </td>
                        <td>

                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-user" onclick="showFormEdit(<?php echo $user->id;?>);">
                                Edit
                             </button>
                            <button type="button" class="btn btn-danger" onclick="deleteUser(<?php echo $user->id;?>);">
                               Delete
                            </button>
                        </td>
                    </tr>
                <?php
                    }
                ?>

            </tbody>
        </table>
    </div>


   <div class="modal" id="edit-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">

               </div>
           </div>
       </div>
    <div class="modal" id="create-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
                          <div class="modal-content">
                                <?php include "views/admin/user/create-user.php" ?>

                          </div>
                      </div>
                  </div>
    <div class="modal" id="forget-password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <?php include "views/admin/user/forgot-password"?>
            </div>
        </div>
    </div>
<?php endblock() ?>


<?php startblock('script') ?>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.2/js/dataTables.fixedColumns.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"
            integrity="sha512-Vp2UimVVK8kNOjXqqj/B0Fyo96SDPj9OCSm1vmYSrLYF3mwIOBXh/yRZDVKo8NemQn1GUjjK0vFJuCSCkYai/A=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <?php include('views/admin/user/script.php')?>
    <script>
        $(document).ready(function(){

            initDatatable($('#list-users'),true);
        });
    </script>
<?php endblock() ?>