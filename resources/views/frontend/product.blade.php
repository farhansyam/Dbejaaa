<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="{{ asset('logoo.png') }}" rel="icon">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Dbeja</title>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script%7CLora:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/bakery-icon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/owl-carousel/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/jquery-ui/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/slick/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/lightGallery-master/dist/css/lightgallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <style>
        .ps-product--banner>img {
            width: 90%;
        }

    </style>
</head>

<body>
    <div class="ps-search">
        <div class="ps-search__content"><a class="ps-search__close" href="#"><span></span></a>
            <form class="ps-form--search-2" action="do_action" method="post">
                <h3>Enter your keyword</h3>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="">
                    <button class="ps-btn active ps-btn--fullwidth">Search</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Header-->
    <header class="header header--3" data-sticky="false">

        <nav class="navigation">
            <div class="ps-container"><a class="ps-logo" href="/"><img src="{{ asset('logoo.png') }}" alt=""></a>
                <div class="menu-toggle"><span></span></div>
                <ul class="menu" style="display: block;">
                    <li class=""><a href="/">Beranda</a>
                    </li>
                    <li class="current-menu-item"><a href="{{ route('product') }}">product</a>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div style="min-height:0 !important;" class="ps-hero bg--cover" data-background="{{ url('/storage/photos/1/product.jpg') }}" hero="">
        <div class="ps-hero__content">
            <div class="ps-section__header">
                <h3 class="ps-section__title">Dbeja Cookies</h3>
                <p>Menyediakan aneka camilan kue kering di Banyuwangi</p>
            </div>
        </div>
    </div>
    <main style="padding-top:0 !important;" class="ps-shop">
        <div class="ps-shop__wrapper">

            <div class="ps-shop__sort">
                <!--<p>Show 1-12 of 35 result</p>-->

            </div>


            <div style="margin-left:10px" class="ps-row">
                @foreach ($product_lists as $product)


                    <div class="ps-column">
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><img src="{{ $product->photo }}" alt="" width="100%" height="300px"><a class="ps-product__overlay" href="{{ route('product-detail', $product->slug) }}"></a>
                                <ul class="ps-product__actions">
                                    <li><a href="{{ route('product-detail', $product->slug) }}" data-tooltip="Lihat Detail"><i class="ba-magnifying-glass"></i></a></li>
                                    <li><a href="#" data-tooltip="Beli"><i class="ba-shopping"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-detail.html">{{ $product->title }}</a>


                                <p class="ps-product__price">Rp.{{ $product->price }}</p>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>


            <div class="ps-pagination">
                <ul class="pagination">
                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>

    </main>
    <footer class="ps-footer">
            <div class="ps-footer__content">
                <div class="ps-container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
                            <div class="ps-site-info"><a class="ps-logo" href="index.html"><img src="images/logo-dark.png" alt=""></a>
                                <p>Tart bear claw cake tiramisu chocolate bar gummies drag??e lemon drops brownie.</p>
                                <ul class="ps-list--social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
                            <form class="ps-form--subscribe-offer" action="do_action" method="post">
                                <h4>Get news & offer</h4>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Your Email...">
                                    <button>Subscribe</button>
                                </div>
                                <p>* Don't worry, we never spam</p>
                            </form>
                            <div class="ps-footer__contact">
                                <h4>Contact with me</h4>
                                <p>Dusun Krajan Rt 04 Rw 04 Yosomulyo Gambiran <br >Banyuwangi ??? Jawa Timur <br> Indonesia 68486</p>
                                <P>0813-3852-0906, 0877-4578-5769</P>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
                            <div class="ps-footer__open">
                                <h4>Time to Open</h4>
                                <p>
                                    Everyday: <br>08:00 am - 04:00 pm <br>
                                </p>
                            </div>
                            <ul class="ps-list--payment">
                                <li><a href="#"><img src="images/payment-method/visa.png" alt=""></a></li>
                                <li><a href="#"><img src="images/payment-method/master-card.png" alt=""></a></li>
                                <li><a href="#"><img src="images/payment-method/paypal.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps-footer__copyright">
                <div class="container">
                    <p>
                        ?? Copyright by <strong>Bready Store</strong>. Design by<a href="#"> Alena Studio.</a></p>
                </div>
            </div>
        </footer>
    <div id="back2top"><i class="fa fa-angle-up"></i></div>
    <div class="ps-loading">
        <div class="rectangle-bounce">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
    <!-- Plugins-->
    <script src="{{ asset('frontend/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/jquery-bar-rating/dist/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/jquery.countTo.js') }}"></script>
    <script src="{{ asset('frontend/plugins/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/gmap3.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/lightGallery-master/dist/js/lightgallery-all.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/slick/slick/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/slick-animation.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/jquery.slimscroll.min.js') }}"></script>
    <!-- Custom scripts-->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsUcTjt43mTheN9ruCsQVgBE-wgN6_AfY&amp;region=GB"></script>
</body>

</html>
