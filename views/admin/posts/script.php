<script>

    function showFormPost(postId){
        showLoading();
        $.ajax({
            url: "<?php echo Route::name('admin.post.show-form-edit');?>",
            type: "POST",
            data: {
                post_id: postId
            },
            success: function (data) {
                hideLoading();
                if(data.message == undefined){
                    $('#edit-post').find('.modal-content').html(data);
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

    function deletePost(postId){
        showLoading();
        var runFunction = function(){
            $.ajax({
                url: "<?php echo Route::name('admin.posts.delete');?>",
                type: "POST",
                data: {
                    post_id: postId
                },
                success: function (data) {
                    hideLoading();
                    if(data.code == 200){
                        alert(data.message, "success");
                        $('#posts-row-'+postId).remove();
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