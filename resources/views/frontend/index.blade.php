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
            <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD<i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#"> USD</a></li>
                <li><a href="#"> SGD</a></li>
                <li><a href="#">JPN</a></li>
              </ul>
            </div>
            <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language<i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#">English</a></li>
                <li><a href="#">Japanese</a></li>
              </ul>
            </div>
            <ul class="ps-list--social">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <nav class="navigation">
        <div class="ps-container"><a class="ps-logo" href="homepage-3.html"><img src="{{$setting->logo}}" alt=""></a>
          <div class="menu-toggle"><span></span></div>
          <ul class="menu" style="display: block;">
            <li class="current-menu-item"><a href="/">Beranda</a>
            </li>
            <li><a href="about.html">About</a></li>
            <li class=""><a href="{{route('product')}}">product</a>
            </li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="ps-hero bg--cover" data-background="" style="background: url(" images="" hero="">
      <div class="ps-hero__content">
        <h1> Dbeja Cookies</h1>
      </div>
    </div>
    <!-- Home banner-->
    <div class="pb-80" id="slider">
      <div class="ps-carousel--animate ps-carousel--1st">
        @foreach ($banners as $banner)
            
        <div class="item">
          <div class="ps-product--banner"><span class="ps-badge ps-badge--sale"><img src="{{asset('frontend/images/icons/badge-brown.png')}}" alt=""><i>{{$banner->title}}</i></span><img src="{{$banner->photo}}" alt="">
            <div class="ps-product__footer"><a class="ps-btn" href="order-form.html">Order Now</a></div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <!-- award-->
    <div class="ps-awards">
      <div class="ps-container">
        <div class="ps-section__header">
          <h3 class="ps-section__title">Delicieux</h3>
          <p>WELCOME TO THE STORE</p><span><img src="images/icons/floral.png" alt=""></span>
        </div>
        <div class="ps-section__content">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
              <div class="ps-block--award"><img src="images/icons/award-1.png" alt="">
                <h4> BAKERY OF THE YEAR <span>2011 -2012</span></h4>
                <p>Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie. Jujubes chocolate cake sesame snaps</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
              <div class="ps-block--award"><img src="images/icons/award-2.png" alt="">
                <h4> CUPCAKES SHOP OF THE YEAR <span>2012 - 2015</span></h4>
                <p>Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie. Jujubes chocolate cake sesame snaps</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
              <div class="ps-block--award"><img src="images/icons/award-2.png" alt="">
                <h4> BAKERY OF THE MONTH <span>2017 - 2018</span></h4>
                <p>Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie. Jujubes chocolate cake sesame snaps</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-block--signature">
        <div class="ps-block__thumbnail"><img src="images/signature.png" alt=""></div>
        <div class="ps-block__content">
          <p>“It seems that every country that can get its hands on butter has its opinion of what butter cream frosting should be. Some are made with eggs and butter.”</p><small>Sunshine -  CEO Bakery</small><img src="images/signature-2.png" alt="">
        </div>
      </div>
    </div>
    
    <!-- Testimonials-->
    <div class="ps-testimonials bg--parallax" data-background="images/bg/testimonials.jpg">
      <div class="ps-container">
        <div class="ps-carousel--testimonial owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="off" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
          <div class="ps-block--tesimonial">
            <div class="ps-block__user"><img src="images/user/1.jpg" alt=""></div>
            <div class="ps-block__content">
              <select class="ps-rating">
                <option value="1">1</option>
                <option value="1">2</option>
                <option value="1">3</option>
                <option value="1">4</option>
                <option value="2">5</option>
              </select>
              <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant.”</p>
            </div>
            <div class="ps-block__footer">
              <p><strong>Logan May</strong>  - CEO & Founder Invision</p>
            </div>
          </div>
          <div class="ps-block--tesimonial">
            <div class="ps-block__user"><img src="images/user/2.jpg" alt=""></div>
            <div class="ps-block__content">
              <select class="ps-rating">
                <option value="1">1</option>
                <option value="1">2</option>
                <option value="1">3</option>
                <option value="1">4</option>
                <option value="2">5</option>
              </select>
              <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant.”</p>
            </div>
            <div class="ps-block__footer">
              <p><strong>Logan May</strong>  - CEO & Founder Invision</p>
            </div>
          </div>
          <div class="ps-block--tesimonial">
            <div class="ps-block__user"><img src="images/user/3.jpg" alt=""></div>
            <div class="ps-block__content">
              <select class="ps-rating">
                <option value="1">1</option>
                <option value="1">2</option>
                <option value="1">3</option>
                <option value="1">4</option>
                <option value="2">5</option>
              </select>
              <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant.”</p>
            </div>
            <div class="ps-block__footer">
              <p><strong>Logan May</strong>  - CEO & Founder Invision</p>
            </div>
          </div>
          <div class="ps-block--tesimonial">
            <div class="ps-block__user"><img src="images/user/4.jpg" alt=""></div>
            <div class="ps-block__content">
              <select class="ps-rating">
                <option value="1">1</option>
                <option value="1">2</option>
                <option value="1">3</option>
                <option value="1">4</option>
                <option value="2">5</option>
              </select>
              <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant.”</p>
            </div>
            <div class="ps-block__footer">
              <p><strong>Logan May</strong>  - CEO & Founder Invision</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- home-blog-->
    <div class="ps-home-blog">
      <div class="ps-container">
        <div class="ps-section__header">
          <h3 class="ps-section__title">Our history</h3>
          <p>Live with passion</p><span><img src="images/icons/floral.png" alt=""></span>
        </div>
        <div class="ps-section__content">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
              <div class="ps-post">
                <div class="ps-post__thumbnail"><img src="images/posts/home-1.jpg" alt=""><a class="ps-post__overlay" href="blog-detail.html"></a></div>
                <div class="ps-post__content"><span class="ps-post__posted">March 31, 2018</span><a class="ps-post__title" href="#">BUTTERY TOAST</a><span class="ps-post__byline">By<a href="#"> Alena Studio</a></span>
                  <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further…</p><a class="ps-post__morelink" href="blog-detail.html">Read more</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
              <div class="ps-post">
                <div class="ps-post__thumbnail"><img src="images/posts/home-2.jpg" alt=""><a class="ps-post__overlay" href="blog-detail.html"></a></div>
                <div class="ps-post__content"><span class="ps-post__posted">March 31, 2018</span><a class="ps-post__title" href="#">Pumpkin buns with salted</a><span class="ps-post__byline">By<a href="#"> Alena Studio</a></span>
                  <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further…</p><a class="ps-post__morelink" href="blog-detail.html">Read more</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
              <div class="ps-post">
                <div class="ps-post__thumbnail"><img src="images/posts/home-3.jpg" alt=""><a class="ps-post__overlay" href="blog-detail.html"></a></div>
                <div class="ps-post__content"><span class="ps-post__posted">March 31, 2018</span><a class="ps-post__title" href="#">Tartine style bread</a><span class="ps-post__byline">By<a href="#"> Alena Studio</a></span>
                  <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further…</p><a class="ps-post__morelink" href="blog-detail.html">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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