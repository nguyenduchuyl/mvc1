
<style type="text/css">
    .avatar{
        object-fit: cover;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        display: block;
        margin: auto;
    }

    .avatar:hover{
        cursor: pointer;
    }
    #update {
        margin-left: 20px;
        margin-top: 20px;
    }

</style>
<div class="modal-header">
    <h4 class="modal-title" id="exampleModalLabel" align="center">
        <b style="color: #0d6efd">Edit user</b>
    </h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form action="<?php echo Route::name('update-profile');?>" method="POST"  id="edit-user-form" enctype="multipart/form-data">

        <div class="row form-group" align="center">
            <img src="<?php echo $user->getAvatar()?>" class="avatar"/>
            <input type="file" name="avatar"  class="input-avatar" style="display: none;" />
        </div>

        <div class="row form-group" align="center">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><h4>User name : <b style="color:#0d6efd;"><?php echo $user->username ?></b></h4></span>
                </div>
            </div>
        </div>
        <div id ="update">
            <div class="row form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Email</span>
                    </div>

                    <input style="margin-left: 100px;margin-top: -30px;width: 450px;"type="text" class="form-control email" name="email" value="<?php echo $user->email ?>">

                </div>
                <span class="help-block email-validate" />
            </div>



            <div class="row form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Full name</span>
                    </div>
                    <input style="margin-left: 100px;margin-top: -30px;width: 450px;" type="text" class="form-control fullname" name="fullname" value="<?php echo $user->getFullName() ?>">

                </div>
                <span class="help-block fullname-validate" />
            </div>

            <div class="row form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Birthday</span>
                    </div>
                    <input style="margin-left: 100px;margin-top: -30px;width: 450px;"type="text" class="form-control date-of-birth" name="date_of_birth" value="<?php echo dateFormat($user->date_of_birth) ?>">

                </div>
                <span class="help-block date-of-birth-validate" />
            </div>
            <div class="row form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Phone number</span>
                    </div>
                    <input style="margin-left: 100px;margin-top: -30px;width: 450px;" type="text" class="form-control phone" name="phone_number" value="<?php echo $user->phone_number ?>">

                </div>
                <span class="help-block phone-validate" />
            </div>
            <div class="row form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Address</span>
                    </div>
                    <input style="margin-left: 100px;margin-top: -30px;width: 450px;"type="text" class="form-control address" name="address" value="<?php echo $user->address ?>">

                </div>
                <span class="help-block address-validate" />
            </div>

        </div>
    </form>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary" onclick="updateUser(this.parentElement.parentElement.parentElement,<?php echo $user->id?>);">Save changes</button>
</div>

<script type="text/javascript">
    function initEditUserForm(){

        var form = $('#edit-user-form');
        initDatepicker(form.find('.date-of-birth').first());

        var imageAvatar = form.find('.avatar').first();
        var imageInput  = form.find('.input-avatar').first();
        initImageFile(imageAvatar, imageInput);

    }
    function updateUser(form,userId){
        var form = $(form);

        var data={
            'id':userId,
            'email' : form.find('.email').first().val(),
            'fullname': form.find('.fullname').first().val(),
            'date_of_birth': form.find('.date-of-birth').first().val(),
            'avatar': form.find('.avatar').first().attr('src'),
            'phone_number' : form.find('.phone').first().val(),
            'address' : form.find('.address').first().val()
        };
        //console.log(data);
        //gửi ajax
        $.ajax({
            url:"<?php echo Route::name('admin.user.edit-user');?>",
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
    initEditUserForm();
</script>