<?php include 'views/frontend/layout/master.php' ?>

<?php startblock('title') ?>
    Category manage
<?php endblock() ?>

<?php startblock('css') ?>
    <?php include('views/admin/category/css.php')?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.13/fc-3.2.2/fh-3.1.2/r-2.1.0/sc-1.4.2/datatables.min.css" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php endblock() ?>


<?php startblock('content') ?>

    <div style="width: 100%; ">

        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#create-category">Create</button>


        <table class="table table-bordered table-hover users-table" id="list-users">
            <thead>
                <tr>
                    <th>
                        STT
                    </th>
                    <th>
                         <input type="text" class="form-control" placeholder="Name post_category" />
                    </th>
                    <th>
                        <input type="text" class="form-control" placeholder="Parent id" />
                    </th>

                    <th>
                        Select
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($post_cate as $category){
                ?>
                    <tr id="category-row-<?php echo $category->id;?>">
                        <td>

                        </td>
                        <td>
                                 <?php echo $category->name;?>
                        </td>
                        <td>
                                 <?php echo $category->parent_id;?>
                        </td>

                        <td>

                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-category" onclick="showFormEditCate(<?php echo $category->id;?>);">
                                Edit
                             </button>
                            <button type="button" class="btn btn-danger" onclick="deleteCategory(<?php echo $category->id;?>);">
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


   <div class="modal" id="edit-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">

               </div>
           </div>
       </div>
    <div class="modal" id="create-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
                          <div class="modal-content">
                                <?php include "views/admin/category/create-category.php" ?>

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

    <?php include('views/admin/category/script.php')?>
    <script>

        $(document).ready(function(){
            initDatatable($('#list-users'),true);
        });
    </script>
<?php endblock() ?>