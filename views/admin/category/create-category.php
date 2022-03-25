<div class="modal-header">
    <h4 class="modal-title" id="exampleModalLabel" align="center">
        <b style="color: #0d6efd">Create category</b>
    </h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form action="<?php echo Route::name('auth.register') ?>" method="POST"  id="create-category-form" enctype="multipart/form-data">
        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Name category</span>
                </div>
                <input style="margin-left: 100px;margin-top: -30px;width: 450px;"type="text" class="form-control name" name="name" value="">

            </div>
            <span class="help-block category-validate" />
        </div>
        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Parent id</span>
                </div>
                <input style="margin-left: 100px;margin-top: -30px;width: 450px;"type="text" class="form-control parent_id" name="parent_id" value="">

            </div>
            <span class="help-block parent_id-validate" />
        </div>
    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary" onclick="createCategory(this.parentElement.parentElement.parentElement)">Create</button>
</div>
<script type="text/javascript">
    function initEditUserForm(){
        var form = $('#create-category-form');
    }
    $(document).ready(function(){

        initEditUserForm();

    });
    function createCategory(form) {
        var form = $(form);

        var data={
            'name': form.find('.name').first().val(),
            'parent_id': form.find('.parent_id').first().val(),
        };
        $.ajax({
            url:"<?php echo Route::name('admin.category.create-category');?>",
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