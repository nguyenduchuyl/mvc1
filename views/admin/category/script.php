<script>
    function showFormEditCate(categoryId){
        showLoading();
        $.ajax({
            url: "<?php echo Route::name('admin.category.show-form-edit');?>",
            type: "POST",
            data: {
                category_id:categoryId
            },
            success: function (data) {
                hideLoading();
                if(data.message == undefined){
                    $('#edit-category').find('.modal-content').html(data);
                }else{
                    alert(data.message, "error");
                }
            },
            error: function (e) {
                hideLoading();
                alert("Please try again", "error");
            }
        });

    }
    function deleteCategory(categoryId){
        showLoading();
        var runFunction = function(){
            $.ajax({
                url: "<?php echo Route::name('admin.category.delete-user');?>",
                type: "POST",
                data: {
                    category_id: categoryId
                },
                success: function (data) {
                    hideLoading();
                    if(data.code == 200){
                        alert(data.message, "success");
                        $('#category-row-'+categoryIdId).remove();
                    }else{
                        alert(data.message, "error");
                    }
                },
                error: function (e) {
                    hideLoading();
                    alert("Please try again", "error");
                }
            });
        };

        confirm("Are you sure delete this account ?", runFunction);
    }





</script>