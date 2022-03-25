<div class="modal-header">
    <h4 class="modal-title" id="exampleModalLabel" align="center">
        <b style="color: #0d6efd">Create Post</b>
    </h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">

    <form action="" method="POST" enctype="multipart/form-data" id="create-post-form">
        <div >
            <label class="input-group-text"  style="margin-left: 10px;" id="basic-addon1"> Type : </label>
            <select name="category_id" id="category_id">
                <?php foreach ($post_cate as $category){?>

                    <option value="<?php echo $category->id?>"> <?php echo $category->name?> </option>

                <?php }?>
            </select>

        </div>
        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text"  style="margin-top: 30px;margin-left: 22px;" create-post-formid="basic-addon1">Tittle : </label>
                </div>
                <input style="margin-left: 100px;margin-top: -20px;width: 450px;"type="text" class="form-control name" name="name" value="">

            </div>
            <span class="help-block category-validate" />
        </div>

        <div>
            <label class="input-group-text"  style="margin-left: 10px;" id="basic-addon1">Content : </label>
            <textarea name="content" type="text" id="content"></textarea>

        </div>
        <div class="row form-group"  >
            <div class="input-group mb-3" style="margin-left: 20px;">
                <div class="input-group-prepend">
                    <br>
                    <label class="input-group-text" id="basic-addon1">Author name : <b style="color:red;"><?php echo Auth::user()->getFullName()?></b></label>
                </div>
            </div>
        </div>
        <div>
            <input name="author_id" class="author_id" type="hidden" value="<?php echo Auth::user()->id?>"/>
        </div>
    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary" onclick="createPost(this.parentElement.parentElement.parentElement)">Create</button>
</div>

<script type="text/javascript">
    function initCreatePostForm(){
        var form = $('#create-post-form');
    }
    $(document).ready(function(){

        initCreatePostForm();
    });

    function createPost(form) {
        var form = $(form);

        var data={
            'category_id' :$('#category_id').val(),
            'name': form.find('.name').first().val(),
            'content' : CKEDITOR.instances['content'].getData(),
            'author_id' :  form.find('.author_id').first().val(),
        };

        $.ajax({
            url:"<?php echo Route::name('admin.post.create-post');?>",
            type: "POST",
            data: data,
            success: function (data){
                if(data.code == 200){
                    alert(data.message, "success");
                    setTimeout(function () {
                        location.reload();
                    },4000)
                }
            },
            error: function (e){
                //console.log(data);
                alert("Please try again", "error");
            }
        });

    }


</script>