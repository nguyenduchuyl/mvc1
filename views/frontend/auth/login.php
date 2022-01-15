<?php include 'views/frontend/layout/master.php' ?>

<?php startblock('title') ?>
Product
<?php endblock() ?>
<?php startblock('css') ?>
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
        <style type="text/css">
         .help-block{
             color: #ff0000;
            font-size: 14px;
            font-weight: 500;
         }
        </style>
<?php endblock() ?>
<?php startblock('content') ?>
<div class="single-product-area" >
    <div class="zigzag-bottom"></div>
    <div class="container">

        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form">
                        <!--login form-->
                        <h2 style="margin-left: 100px;">LOGIN</h2>

                        <form action="<?php echo Route::name('auth.login') ?>" method="POST" id="login-form">
                            <div class="row form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">UserName</span>
                                    </div>
                                    <input type="text" class="form-control username" name="username" value="">
                                </div>
                                <span class="help-block login-username-validate" />
                            </div>
                            <div class="row form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">PassWord</span>
                                    </div>
                                    <input type="password" class="form-control password" name="password" value="">

                                </div>
                                <span class="help-block login-password-validate" />
                            </div>
                            <div class="row form-group">
                                <button class="btn btn-success btn-block" type="submit">
                                    LOGIN
                                </button>
                            </div>
                        </form>
                    </div>
                    <!--/login form-->

                </div>
                <div class="col-sm-1" style="margin-left:-80px;">
                    <h2 class="or" style="margin-left: 100px;">Or</h2>
                </div>

                <div class="col-sm-4" ; style="margin-left:150px;">
                    <div class="signup-form">
                        <!--sign up form-->
                        <h2 style="margin-left: 50px;">Create new an account</h2>
                        <!--                        --><?php
                        //                            if(isset($insertUsers)){
                        //                                echo $insertUsers;
                        //                            }
                        //                        ?>

                        <form action="<?php echo Route::name('auth.register') ?>"  method="POST" id="register-form">
                            <div class="row form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">UserName</span>
                                    </div>
                                    <input type="text" class="form-control username" name="username" value="">
                                </div>
                                <span class="help-block username-validate" />
                            </div>
                            <div class="row form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">PassWord</span>
                                    </div>
                                    <input type="password" class="form-control password" name="password" value="">

                                </div>
                                <span class="help-block password-validate" />
                            </div>


                            <div class="row form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Retype PassWord</span>
                                    </div>
                                    <input type="password" class="form-control re-password" name="re_password" value="">

                                </div>
                                <span class="help-block re-password-validate" />
                            </div>

                            <div class="row form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Birth Day</span>
                                    </div>
                                    <input type="text" class="form-control date-of-birth" name="date_of_birth" value="">

                                </div>
                                <span class="help-block date-of-birth-validate" />
                            </div>
                            <div class="row form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Full name</span>
                                    </div>
                                    <input type="text" class="form-control fullname" name="full_name" value="">

                                </div>
                                <span class="help-block fullname-validate" />
                            </div>
                            <div class="row form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Email</span>
                                    </div>
                                    <input type="text" class="form-control email" name="mail" value="">

                                </div>
                                <span class="help-block email-validate" />
                            </div>
                            <div class="row form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Phone</span>
                                    </div>
                                    <input type="text" class="form-control phone" name="phone_number" value="">

                                </div>
                                <span class="help-block phone-validate" />
                            </div>
                            <div class="row form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Address</span>
                                    </div>
                                    <input type="text" class="form-control address" name="address" value="">

                                </div>
                                <span class="help-block address-validate" />
                            </div>
                            <div class="row form-group">
                                <button class="btn btn-success btn-block" type="submit">
                                    REGISTER
                                </button>
                            </div>


                        </form>
                    </div>
                    <!--/sign up form-->
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php endblock() ?>

<?php startblock('script') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"
        integrity="sha512-Vp2UimVVK8kNOjXqqj/B0Fyo96SDPj9OCSm1vmYSrLYF3mwIOBXh/yRZDVKo8NemQn1GUjjK0vFJuCSCkYai/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php include 'views/frontend/auth/script.php' ?>
<script>
    $(document).ready(function () {
        validateRegisterForm();
        validateLoginForm();
    });
</script>
<?php endblock() ?>
