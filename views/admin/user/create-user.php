<style type="text/css">
    .avatar{
        object-fit: cover;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        display: block;
        margin: auto;
    }

    .avatar:hover{
        cursor: pointer;
    }
</style>
<div class="modal-header">
    <h4 class="modal-title" id="exampleModalLabel" align="center">
        <b style="color: #0d6efd">Create user</b>
    </h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form action="<?php echo Route::name('auth.register') ?>" method="POST"  id="create-user-form" enctype="multipart/form-data">
        <div class="row form-group" align="center">
            <img src="http://mvc1.test/public/avatar/NOIMAGE.jpg" class="avatar"/>
            <input type="file" name="avatar"  class="input-avatar" style="display: none;" />
        </div>
        <div class="row form-group" align="center">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"  id="basic-addon1"><h5 style ="margin-left:-300px;" >User name :</h5></span>
                    <input style="margin-top: -40px; margin-left: 80px;"type="text" class="form-control username" name="username" >
                </div>
            </div>
            <span class="help-block username-validate" />
        </div>
        <div class="row form-group" align="center">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"  id="basic-addon1"><h5 style ="margin-left:-300px;" >Password :</h5></span>
                    <input style="margin-top: -40px; margin-left: 80px;"type="password" class="form-control password" name="password" >
                </div>
            </div>
            <span class="help-block password-validate" />
        </div>
        <div class="row form-group" align="center">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"  id="basic-addon1"><h5 style ="margin-left:-300px;" >Full name :</h5></span>
                    <input style="margin-top: -40px; margin-left: 80px;"type="text" class="form-control fullname" name="fullname" >
                </div>
            </div>
            <span class="help-block fullname-validate" />
        </div>
        <div class="row form-group" align="center">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"  id="basic-addon1"><h5 style ="margin-left:-300px;" >Birthday :</h5></span>
                    <input style="margin-top: -40px; margin-left: 80px;"type="text" class="form-control date-of-birth" name="date_of_birth" >
                </div>
            </div>
            <span class="help-block date_of_birth-validate" />
        </div>
        <div class="row form-group" align="center">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"  id="basic-addon1"><h5 style ="margin-left:-300px;" >Email :</h5></span>
                    <input style="margin-top: -40px; margin-left: 80px;"type="text" class="form-control email" name="email" >
                </div>
            </div>
        </div>
        <div class="row form-group" align="center">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"  id="basic-addon1"><h5 style ="margin-left:-300px;" >Phone :</h5></span>
                    <input style="margin-top: -40px; margin-left: 80px;"type="text" class="form-control phone" name="phone" >
                </div>
            </div>
            <span class="help-block email-validate" />
        </div>
        <div class="row form-group" align="center">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"  id="basic-addon1"><h5 style ="margin-left:-300px;" >Address :</h5></span>
                    <input style="margin-top: -40px; margin-left: 80px;"type="text" class="form-control address" name="address" >
                </div>
            </div>
            <span class="help-block address-validate" />
        </div>
    </form
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary" onclick="createUser(this.parentElement.parentElement.parentElement)">Create</button>
</div>
<script type="text/javascript">
    function initEditUserForm(){

        var form = $('#create-user-form');

        initDatepicker(form.find('.date-of-birth').first());

        var imageAvatar = form.find('.avatar').first();
        var imageInput  = form.find('.input-avatar').first();

        initImageFile(imageAvatar, imageInput);

    }
    function createUser(form) {
        var form = $(form);

        var data={
            'username': form.find('.username').first().val(),
            'password': form.find('.password').first().val(),
            'email' : form.find('.email').first().val(),
            'fullname': form.find('.fullname').first().val(),
            'date_of_birth': form.find('.date-of-birth').first().val(),
            'avatar': form.find('.avatar').first().attr('src'),
            'phone_number' : form.find('.phone').first().val(),
            'address' : form.find('.address').first().val(),

        };
        $.ajax({
            url:"<?php echo Route::name('admin.user.create-user');?>",
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

    $(document).ready(function(){

        initEditUserForm();

    });
</script>