<?php include 'views/frontend/layout/master.php' ?>

<?php startblock('title') ?>
Edit Profile
<?php endblock() ?>

<?php startblock('css') ?>
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
        margin-left: 300px;
        margin-top: 20px;
    }

</style>
<?php endblock() ?>


<?php startblock('content') ?>
<div class="single-product-area" >
    <div class="zigzag-bottom"></div>
    <div class="container">


<div class="col-6">
</div>
<div class="col-6">
    <form action="<?php echo Route::name('update-profile');?>" method="POST"  id="edit-user-form" enctype="multipart/form-data">

        <div class="row form-group" align="center">
            <img src="<?php echo $user->getAvatar()?>" class="avatar"/>
            <input type="file" name="avatar"  class="input-avatar" style="display: none;" />
        </div>

        <div class="row form-group" align="center">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">User name : <b style="color:red;"><?php echo $user->username ?></b></span>
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
        <div class="row form-group">
            <div class="col-3">
                <button class="btn btn-info btn-block" style="width: 260px;height: 40px" type="submit">
                    UPDATE
                </button>
            </div>
            <div class="col-3">
                <button class="btn btn-info btn-block" style="width: 260px;height: 40px;margin-top: -40px;margin-left: 290px" type="button" onclick="updateUser(this.parentElement.parentElement.parentElement);">
                    UPDATE BY AJAX
                </button>
            </div>
        </div>
        </div>
    </form>
</div>

</div>
</div>

<?php endblock() ?>

<?php startblock('script') ?>
<script type="text/javascript">
    function initEditUserForm(){

        var form = $('#edit-user-form');
        initDatepicker(form.find('.date-of-birth').first());

        var imageAvatar = form.find('.avatar').first();
        var imageInput  = form.find('.input-avatar').first();

        initImageFile(imageAvatar, imageInput);

    }

    function updateUser(form){

        var form = $(form);

        console.log(form);
        var data = {
            'email' : form.find('.email').first().val(),
            'fullname': form.find('.fullname').first().val(),
            'date_of_birth': form.find('.date-of-birth').first().val(),
            'avatar': form.find('.avatar').first().attr('src'),
            'phone_number' : form.find('.phone').first().val(),
            'address' : form.find('.address').first().val()
        };

        console.log(data);

        // gửi ajax
        $.ajax({
            url: "<?php echo Route::name('update-profile');?>",
            type: "POST",
            data: data,
            success: function (data) {
                console.log(data);
            },
            error: function () {

            }
        });

    }

    $(document).ready(function(){

        initEditUserForm();

    });
</script>
<?php endblock() ?>






