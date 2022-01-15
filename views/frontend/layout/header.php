







<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
<!--                <div class="user-menu">-->
<!--                    <ul>-->
<!---->
<!--                        <li><a href="/cart"><i class="fa fa-user"></i> My Cart</a></li>-->
<!--                        <li><a href="/checkout"><i class="fa fa-user"></i> Checkout</a></li>-->
<!--                        <li><a href="/show-login"><i class="fa fa-user"></i> Login</a></li>-->
<!---->
<!--                    </ul>-->
<!--                </div>-->
            </div>

            <div class="col-md-4">
                <div class="header-right">
                    <div class="col-6">
                        <label class="label-user-fullname">
                            <?php
                            if(Auth::checkAuth()){
                                ?>
                                <a href="<?php echo Route::name('edit-profile')?>">
                                    <?php
                                    echo Auth::user()->getFullName();
                                    ?>
                                </a>

                                <?php
                            }else{
                                ?>
                                <a href="<?php echo Route::name('auth.show-login')?>">
                                    Đăng nhập
                                </a>
                                <?php
                            }
                            ?>
                        </label>
                    </div>
                    <div class="col-6">
                        <?php
                        if(Auth::checkAuth()){
                            ?>
                            <a href="<?php echo Route::name('logout')?>">
                                Đăng xuất
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End header area -->
<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1><a href="./"><img src="/assets/frontend/img/logo.png"></a></h1>
                    <!--                    <img src="" alt="">-->
                </div>
            </div>

            <div class="col-sm-6">
                <div class="shopping-item">
                    <a href="/cart">Cart - <span class="cart-amunt">$100</span> <i class="fa fa-shopping-cart"></i>
                        <span class="product-count">5</span></a>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End site branding area -->

<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/index">Home</a></li>
                    <li><a href="/shop">Shop page</a></li>
                    <li><a href="/detail">Detail product</a></li>
                    <li><a href="/cart">Cart</a></li>
                    <li><a href="/checkout">Checkout</a></li>

                </ul>
            </div>
        </div>
    </div>
</div> <!-- End mainmenu area -->
