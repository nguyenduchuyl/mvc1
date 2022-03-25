

<div class="row header"  >
    <div class="col-md-8">
        <?php include('views/frontend/menu.php'); ?>

    </div>

    <div class="col-md-4">
        <div class="row right-header">

            <div class="col-md-6">
                <label >
                    <?php
                    if(Auth::checkAuth()){
                        ?>
                        <img src="<?php echo Auth::user()->getAvatar();?>" class="avatar">
                        <a class="label-user-full-name" href="<?php echo Route::name('edit-profile')?>">
                            <?php
                            echo Auth::user()->getFullName();
                            ?>
                        </a>

                        <?php
                    }else{
                        ?>
                        <a  href="<?php echo Route::name('auth.show-login')?>">
                            Login
                        </a>
                        <?php
                    }
                    ?>
                </label>
            </div>
            <div class="col-md-6">
                <?php
                if(Auth::checkAuth()){
                    ?>
                    <a  href="<?php echo Route::name('logout')?>">
                        Logout
                    </a>
                    <?php
                }
                ?>
            </div>

        </div>
    </div>
</div>




