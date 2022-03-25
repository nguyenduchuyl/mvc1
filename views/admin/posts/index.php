<?php include 'views/frontend/layout/master.php' ?>

<?php startblock('title') ?>
    Post manage
<?php endblock() ?>

<?php startblock('css') ?>
    <?php include('views/admin/posts/css.php')?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.13/fc-3.2.2/fh-3.1.2/r-2.1.0/sc-1.4.2/datatables.min.css" />
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php endblock() ?>


<?php startblock('content') ?>
      <div style="width: 100%">

       <button type="button" class="btn btn-info" data-toggle="modal" data-target="#create-post">Create</button>

            <table class="table table-bordered table-hover users-table" id="list-posts">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th><input type="text" class="form-control" placeholder="Category Id" /></th>
                        <th><input type="text" class="form-control" placeholder="Name" /></th>
                        <th><input type="text" class="form-control" placeholder="Content" /></th>
                        <th><input type="text" class="form-control" placeholder="Slug" /></th>
                        <th><input type="text" class="form-control" placeholder="Publish date" /></th>
                        <th><input type="text" class="form-control" placeholder="Author id" /></th>
                        <th>Select</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($posts as $post){
                    ?>
                        <tr id="posts-row-<?php echo $post->id;?>">
                                <td>

                                </td>
                                <td>
                                    <?php echo $post->category_id;?>
                                </td>
                                <td>
                                    <?php echo $post->name;?>
                                </td>
                                <td>
                                    <?php echo $post->getContentWith3Dots($post->content);?>
                                </td>
                                <td>
                                    <?php echo $post->slug;?>
                                </td>
                                 <td>
                                    <?php echo $post->publish_date;?>
                                 </td>
                                 <td>
                                    <?php echo $post->author_id;?>
                                 </td>
                                 <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-post" onclick="showFormPost(<?php echo $post->id;?>);">
                                             Edit
                                         </button>
                                        <button type="button" class="btn btn-danger" onclick="deletePost(<?php echo $post->id;?>);">
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
      <div class="modal" id="edit-post" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                     <div class="modal-content">

                     </div>
                 </div>
             </div>
          <div class="modal" id="create-post" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                      <?php include "views/admin/posts/create-post.php" ?>

                                </div>
                            </div>
                        </div>
<?php endblock()?>

<?php startblock('script') ?>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.2/js/dataTables.fixedColumns.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"
                integrity="sha512-Vp2UimVVK8kNOjXqqj/B0Fyo96SDPj9OCSm1vmYSrLYF3mwIOBXh/yRZDVKo8NemQn1GUjjK0vFJuCSCkYai/A=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <?php include "views/admin/posts/script.php" ?>;
        <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
        <script>

            $(document).ready(function(){
                console.log($('#list-posts'));

               initDatatable($('#list-posts'),true);
            });
            CKEDITOR.replace( 'content' );
        </script>

<?php endblock() ?>