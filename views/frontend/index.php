


<?php include 'views/frontend/layout/master.php' ?>

<?php startblock('title') ?>
    Home
<?php endblock() ?>
<?php startblock('css') ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
    <style>

    </style>
<?php endblock() ?>

<?php startblock('slider') ?>
    <?php include 'views/frontend/layout/slider.php';?>
<?php endblock() ?>



<?php startblock('content') ?>
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->

    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel row">
                            <div class="single-product col-2" style="width: 210px">
                                <div class="product-f-image">
                                    <img src="assets/frontend/img/product-1.jpg" alt="" style="width: 210px">
                                    <div class="product-hover">
                                        <a href="/cart" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="/detail" class="view-details-link"><i class="fa fa-link"></i>
                                            See details</a>
                                    </div>
                                </div>

                                <h2><a href="/detail">Samsung Galaxy s5- 2015</a></h2>

                                <div class="product-carousel-price">
                                    <ins>$700.00</ins>
                                    <del>$100.00</del>
                                </div>
                            </div>
                            <div class="single-product col-2" style="width: 210px">
                                <div class="product-f-image">
                                    <img src="assets/frontend/img/product-2.jpg" alt="" style="width: 210px">
                                    <div class="product-hover">
                                        <a href="/cart" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="/detail" class="view-details-link"><i class="fa fa-link"></i>
                                            See details</a>
                                    </div>
                                </div>

                                <h2>Nokia Lumia 1320</h2>
                                <div class="product-carousel-price">
                                    <ins>$899.00</ins>
                                    <del>$999.00</del>
                                </div>
                            </div>
                            <div class="single-product col-2" style="max-width: 210px">
                                <div class="product-f-image">
                                    <img src="assets/frontend/img/product-3.jpg" alt="" style="width: 210px">
                                    <div class="product-hover">
                                        <a href="/cart" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="/detail" class="view-details-link"><i class="fa fa-link"></i>
                                            See details</a>
                                    </div>
                                </div>

                                <h2>LG Leon 2015</h2>

                                <div class="product-carousel-price">
                                    <ins>$400.00</ins>
                                    <del>$425.00</del>
                                </div>
                            </div>
                            <div class="single-product col-2" style="max-width: 210px">
                                <div class="product-f-image">
                                    <img src="assets/frontend/img/product-4.jpg" alt="" style="width: 210px">
                                    <div class="product-hover">
                                        <a href="/cart" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="/detail" class="view-details-link"><i class="fa fa-link"></i>
                                            See details</a>
                                    </div>
                                </div>

                                <h2><a href="/detail">Sony microsoft</a></h2>

                                <div class="product-carousel-price">
                                    <ins>$200.00</ins>
                                    <del>$225.00</del>
                                </div>
                            </div>
                            <div class="single-product col-2" style="max-width: 210px">
                                <div class="product-f-image">
                                    <img src="assets/frontend/img/product-5.jpg" alt="" style="width: 210px">
                                    <div class="product-hover">
                                        <a href="/cart" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="/detail" class="view-details-link"><i class="fa fa-link"></i>
                                            See details</a>
                                    </div>
                                </div>

                                <h2>iPhone 6</h2>

                                <div class="product-carousel-price">
                                    <ins>$1200.00</ins>
                                    <del>$1355.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->

    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="assets/frontend/img/brand1.png" alt="">
                            <img src="assets/frontend/img/brand2.png" alt="">
                            <img src="assets/frontend/img/brand3.png" alt="">
                            <img src="assets/frontend/img/brand4.png" alt="">
                            <img src="assets/frontend/img/brand5.png" alt="">
                            <img src="assets/frontend/img/brand6.png" alt="">
                            <img src="assets/frontend/img/brand1.png" alt="">
                            <img src="assets/frontend/img/brand2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->

    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <a href="" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="/detail"><img src="assets/frontend/img/product-thumb-1.jpg" alt=""
                                                               class="product-thumb"></a>
                            <h2><a href="/detail">Sony Smart TV - 2015</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins>
                                <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="/detail"><img src="assets/frontend/img/product-thumb-2.jpg" alt=""
                                                               class="product-thumb"></a>
                            <h2><a href="/detail">Apple new mac book 2015</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins>
                                <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="/detail"><img src="assets/frontend/img/product-thumb-3.jpg" alt=""
                                                               class="product-thumb"></a>
                            <h2><a href="/detail">Apple new i phone 6</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins>
                                <del>$425.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Recently Viewed</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="/detail"><img src="assets/frontend/img/product-thumb-4.jpg" alt=""
                                                               class="product-thumb"></a>
                            <h2><a href="/detail">Sony playstation microsoft</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins>
                                <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="/detail"><img src="assets/frontend/img/product-thumb-1.jpg" alt=""
                                                               class="product-thumb"></a>
                            <h2><a href="/detail">Sony Smart Air Condtion</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins>
                                <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="/detail"><img src="assets/frontend/img/product-thumb-2.jpg" alt=""
                                                               class="product-thumb"></a>
                            <h2><a href="/detail">Samsung gallaxy note 4</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins>
                                <del>$425.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top New</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="/detail"><img src="assets/frontend/img/product-thumb-3.jpg" alt=""
                                                               class="product-thumb"></a>
                            <h2><a href="/detail">Apple new i phone 6</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins>
                                <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="/detail"><img src="assets/frontend/img/product-thumb-4.jpg" alt=""
                                                               class="product-thumb"></a>
                            <h2><a href="/detail">Samsung gallaxy note 4</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins>
                                <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="/detail"><img src="assets/frontend/img/product-thumb-1.jpg" alt=""
                                                               class="product-thumb"></a>
                            <h2><a href="/detail">Sony playstation microsoft</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins>
                                <del>$425.00</del>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
<?php endblock() ?>



<?php startblock('script') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js" integrity="sha512-Vp2UimVVK8kNOjXqqj/B0Fyo96SDPj9OCSm1vmYSrLYF3mwIOBXh/yRZDVKo8NemQn1GUjjK0vFJuCSCkYai/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

        function registerForm(formId){
            var form = $('#'+formId);

            // tổng hợp dữ liệu từ form
            var dataSend = {
                'username' : form.find('.username').first().val()
            };

            // gửi ajax
            $.ajax({
                url: "<?php echo Route::name('auth.register');?>",
                type: "POST",
                data: dataSend,
                success: function (data) {
                    var data = $.parseJSON(data);
                    console.log(data);
                    console.log(data.username);
                },
                error: function () {

                }
            });
        }

        function validateRegisterForm(){
            console.log('validating');
            $('#register-form').bootstrapValidator({
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    username: {
                        container: '.username-validate',
                        validators: {
                            notEmpty: {
                                message: 'Cần phải nhập tên tài khoản'
                            }
                        }
                    }
                }
            });
        }


        $(document).ready(function(){
            validateRegisterForm();
        });

    </script>
<?php endblock() ?>

