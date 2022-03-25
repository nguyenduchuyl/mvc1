<div class="modal-header">
    <h4 class="modal-title" id="exampleModalLabel" align="center">
        <b style="color: #0d6efd">Edit post</b>
    </h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">

<div class="modal-body">

    <form action="" method="POST" enctype="multipart/form-data" id="edit-post-form">
<!--        <div >-->
<!--            <label class="input-group-text"  style="margin-left: 10px;" id="basic-addon1"> Type : </label>-->
<!--            <select name="category_id" id="category_id">-->
<!--                --><?php //foreach ($post_cate as $category){?>
<!---->
<!--                    <option value="--><?php //echo $category->id?><!--"> --><?php //echo $category->name?><!-- </option>-->
<!---->
<!--                --><?php //}?>
<!--            </select>-->
<!---->
<!--        </div>-->
        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text"  style="margin-top: 30px;margin-left: 22px;" create-post-formid="basic-addon1">Tittle : </label>
                </div>
                <input style="margin-left: 100px;margin-top: -20px;width: 450px;"type="text" class="form-control name" name="name" value="<?php echo $post->name?>">

            </div>
            <span class="help-block category-validate" />
        </div>

        <div>
            <label class="input-group-text"  style="margin-left: 10px;" id="basic-addon1">Content : </label>
            <textarea name="content" type="text" id="content" ><?php echo $post->content?></textarea>

        </div>


    </form>

</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="updatePost(this.parentElement.parentElement.parentElement,<?php echo $post->id?>);">Save changes</button>
</div>
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    function initEditCategoryForm(){

        var form = $('#edit-post-form');
    }
    CKEDITOR.replace( 'content' );
    $(document).ready(function(){
        initEditCategoryForm();
    });
    function updatePost(form,postId){
        var form = $(form);
        var data={
            'post_id':postId,

            'name': form.find('.name').first().val(),
            'content' : CKEDITOR.instances['content'].getData(),
        };
        //console.log(data);
        //gửi ajax
        $.ajax({
            url:"<?php echo Route::name('admin.post.edit-post');?>",
            type: "POST",
            data: data,
            success: function (data){
                if(data.code == 200){
                    setTimeout(function () {
                        location.reload();
                    },4000)
                    alert(data.message, "success");

                }else{
                    alert(data.message, "error");
                }
            },
            error: function (e){
                //console.log(data);
                alert("Please try again", "error");
            }
        });
    }
</script>