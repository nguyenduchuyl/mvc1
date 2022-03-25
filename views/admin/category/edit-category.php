<div class="modal-header">
<h4 class="modal-title" id="exampleModalLabel" align="center">
    <b style="color: #0d6efd">Edit Category</b>
</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
    <form action="<?php echo Route::name('update-profile');?>" method="POST"  id="edit-category-form" enctype="multipart/form-data">
        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Name category</span>
                </div>
                <input style="margin-left: 100px;margin-top: -30px;width: 450px;"type="text" class="form-control name" name="name" value="<?php echo $category->name ?>">

            </div>
            <span class="help-block category-validate" />
        </div>
        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Parent id</span>
                </div>
                <input style="margin-left: 100px;margin-top: -30px;width: 450px;"type="text" class="form-control parent_id" name="parent_id" value="<?php echo $category->parent_id ?>">

            </div>
            <span class="help-block parent_id-validate" />
        </div>
    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary" onclick="updateCategory(this.parentElement.parentElement.parentElement,<?php echo $category->id?>);">Save changes</button>
</div>

<script type="text/javascript">
    function initEditCategoryForm(){

        var form = $('#edit-category-form');
    }
    $(document).ready(function(){
        initEditCategoryForm();
    });
    function updateCategory(form,categoryId){
        var form = $(form);
        console.log(form);
        var data={
            'id':categoryId,
            'name' : form.find('.name').first().val(),
            'parent_id': form.find('.parent_id').first().val(),
        };
        //console.log(data);
        //gửi ajax
        $.ajax({
            url:"<?php echo Route::name('admin.category.edit-user');?>",
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