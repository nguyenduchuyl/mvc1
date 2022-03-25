<?php
if (Auth::checkAuth()) {
    ?>
    <div class="menu">
        <div class="col-md-3">
        <a href="<?php echo Route::name('admin.users') ?>">
            User management
        </a>
        </div>
        <div class="col-md-3">
        <a href="<?php echo Route::name('admin.category') ?>">
            Manage category(DT)
        </a>
         </div>
        <div class="col-md-3">
            <a href="<?php echo Route::name('admin.category_nestable') ?>">
                Manage category(NT)
            </a>
        </div>
        <div class="col-md-3">
        <a href="<?php echo Route::name('admin.posts') ?>">
             Manage post
        </a>
        </div>

    </div>

    <?php
}
?>

