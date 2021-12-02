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
    <link href="favicon.png" rel="icon">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Dbeja</title>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script%7CLora:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/plugins/bakery-icon/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/plugins/owl-carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/plugins/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/plugins/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/plugins/slick/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/plugins/lightGallery-master/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <style>
      .ps-product--banner > img {
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
      <div class="header__top">
        <div class="ps-container">
          <div class="left">
            <p>460 West 34th Street, 15th floor, New York  -  Hotline: 804-377-3580 - 804-399-3580</p>
          </div>
          <div class="right">
            <ul class="ps-list--social">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <nav class="navigation">
        <div class="ps-container"><a class="ps-logo" href="/"><img src="{{$setting->logo}}" alt=""></a>
          <div class="menu-toggle"><span></span></div>
          <ul class="menu" style="display: block;">
            <li class=""><a href="/">Beranda</a>
            </li>
            <li><a href="about.html">About</a></li>
            <li class="current-menu-item"><a href="{{route('product')}}">product</a>
            </li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="ps-hero bg--cover" data-background="{{url('/storage/photos/1/product.jpg')}}" hero="">
      <div class="ps-hero__content">
        <h1> Dbeja Cookies</h1>
      </div>
    </div>
    <main class="ps-shop">
      <div class="ps-shop__wrapper">
        <div class="ps-shop__banners">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
              <div class="ps-collection"><a class="ps-collection__overlay" href="#"></a><img src="images/collection/product-1.jpg" alt=""></div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
              <div class="ps-collection"><a class="ps-collection__overlay" href="#"></a><img src="images/collection/product-2.jpg" alt=""></div>
            </div>
          </div>
        </div>
        <div class="ps-shop__sort">
          <p>Show 1-12 of 35 result</p>
          <div class="btn-group bootstrap-select ps-select"><button type="button" class="btn dropdown-toggle bs-placeholder btn-default" data-toggle="dropdown" role="button" title="Default Sorting"><span class="filter-option pull-left">Default Sorting</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Option 1</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Option 2</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Option 3</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="ps-select" title="Default Sorting" tabindex="-98"><option class="bs-title-option" value="">Default Sorting</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select></div>
        </div>
        <div class="ps-row">
          @foreach ($product_lists as $product)
              
          
          <div class="ps-column">
            <div class="ps-product">
              <div class="ps-product__thumbnail"><img src="{{$product->photo}}" alt=""><a class="ps-product__overlay" href="product-detail.html"></a>
                <ul class="ps-product__actions">
                  <li><a href="{{url('/')}}{{$product->slug}}" data-tooltip="Lihat Detail"><i class="ba-magnifying-glass"></i></a></li>
                  <li><a href="#" data-tooltip="Beli"><i class="ba-shopping"></i></a></li>
                </ul>
              </div>
              <div class="ps-product__content"><a class="ps-product__title" href="product-detail.html">{{$product->title}}</a>
                <p><a href="product-list.html">Bakery</a> - <a href="product-list.html">Sweet</a> - <a href="product-list.html">Bio</a></p>
                <div class="br-wrapper br-theme-fontawesome-stars"> <select class="ps-rating" style="display: none;">
                </select><div class="br-widget"></div></div>
                <p class="ps-product__price">Rp.{{$product->price}}</p>
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
      <aside class="ps-sidebar">
        <aside class="widget widget_sidebar widget_category">
          <h3 class="widget-title">Categories</h3>
          <ul class="ps-list--checked">
            <li class="current"><a href="product-listing.html">Bready</a></li>
            <li><a href="product-listing.html">Donut(76)</a></li>
            <li><a href="product-listing.html">Pinpool(69)</a></li>
            <li><a href="product-listing.html">Deliciuex (36)</a></li>
            <li><a href="product-listing.html">Cake (108)</a></li>
            <li><a href="product-listing.html">Cupcake (47)</a></li>
            <li><a href="product-listing.html">More</a></li>
          </ul>
        </aside>
        <aside class="widget widget_filter widget_sidebar">
          <h3 class="widget-title">Filter Price</h3>
          <div class="ps-slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-default-min="0" data-default-max="500" data-max="1000" data-step="100" data-unit="$"><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 50%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 50%;"></span></div>
          <p class="ps-slider__meta">Price:<span class="ps-slider__value ps-slider__min">$0</span>-<span class="ps-slider__value ps-slider__max">$500</span></p><a class="ac-slider__filter ps-btn ps-btn--sm" href="#">Search</a>
        </aside>
        <aside class="widget widget_sidebar widget_category">
          <h3 class="widget-title">Brands</h3>
          <ul class="ps-list--checked">
            <li class="current"><a href="product-listing.html">Sugar (521)</a></li>
            <li><a href="product-listing.html">Food Stylist (76)</a></li>
            <li><a href="product-listing.html">Halo (69)</a></li>
            <li><a href="product-listing.html">ProjectNews (36)</a></li>
            <li><a href="product-listing.html">B&amp;G (108)</a></li>
            <li><a href="product-listing.html">Louis Vuiton (47)</a></li>
          </ul>
        </aside>
        <aside class="widget widget_sidebar widget_ads">
          <h3 class="widget-title">Ads banner</h3><a href="#"><img src="images/widget-ads.jpg" alt=""></a>
        </aside>
      </aside>
    </main>
    <footer class="ps-footer">
      <div class="ps-footer__content">
        <div class="ps-container">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
              <div class="ps-site-info"><a class="ps-logo" href="index.html"><img src="images/logo-dark.png" alt=""></a>
                <p>Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie.</p>
                <ul class="ps-list--social">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
              </div>
            </div>
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
                <p>PO Box 16122 Collins Street West,Victoria 8007 Australia</p>
                <P>(+84 ) 7534 9773, (+84 ) 874 548</P>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
              <div class="ps-footer__open">
                <h4>Time to Open</h4>
                <p>
                  Monday - Friday: <br>08:00 am - 08:30 pm <br>
                  Saturday - Sunday:<br>
                  10:00 am - 16:30 pm
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
            ©  Copyright by <strong>Bready Store</strong>. Design by<a href="#"> Alena Studio.</a></p>
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
    <script src="{{asset('frontend/plugins/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/jquery.countTo.js')}}"></script>
    <script src="{{asset('frontend/plugins/jquery.matchHeight-min.js')}}"></script>
    <script src="{{asset('frontend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/gmap3.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/lightGallery-master/dist/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/slick/slick/slick.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/slick-animation.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/jquery.slimscroll.min.js')}}"></script>
    <!-- Custom scripts-->
    <script src="{{asset('frontend/js/main.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsUcTjt43mTheN9ruCsQVgBE-wgN6_AfY&amp;region=GB"></script>
  </body>
</html>