<!DOCTYPE html>
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
        </div>
      </div>
      <nav class="navigation">
        <div class="ps-container"><a class="ps-logo" href="/"><img src="{{$setting->logo}}" alt=""></a>
          <div class="menu-toggle"><span></span></div>
          <ul class="menu" style="display: block;">
            <li class="><a href="/">Beranda</a>
            </li>
            <li><a href="about.html">About</a></li>
            <li class="current-menu-item""><a href="{{route('product')}}">product</a>
            </li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="ps-hero bg--cover" data-background="images/hero/product.jpg">
      <div class="ps-hero__content">
        <h1> Product Details</h1>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Product Details</li>
          </ol>
        </div>
      </div>
    </div>
    <main class="ps-main">
      <div class="ps-container">
        <div class="ps-product--detail">
          <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 ">
              <div class="ps-product__thumbnail"><span class="ps-badge"><img src="/storage/photos/1/badge-red.png" alt=""><i>New</i></span><span class="ps-badge ps-badge--sale"><img src="images/icons/badge-brown.png" alt=""><i>50%</i></span>
                <div class="ps-product__image">
                  <div class="item"><a href="{{$product_detail->photo}}"><img src="{{$product_detail->photo}}" alt=""></a></div>
                </div>
                <div class="ps-product__preview">
                  <div class="ps-product__variants">
                    <div class="item"><img src="{{$product_detail->photo}}" alt=""></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 ">
              <div class="ps-product__info">
                <h1 class="text-uppercase">{{$product_detail->title}}</h1>
                <h3 class="ps-product__price"><span>Rp.</span>{{$product_detail->price}}</h3>
                <div class="ps-product__desc">
                  <h5>Quick Overview</h5>
                  <p>{!! $product_detail->description !!}</p>
                </div>
                <div class="ps-product__status">
                  <h5>Stock: <span> {{$product_detail->stock}}</span></h5>
                </div>
                <div class="ps-product__shopping">
                  <form class="ps-form--shopping" name="myFormName" action="do_action" method="post">
                    <div class="form-group--number">
                      <button class="minus"><span>-</span></button>
                      <input class="form-control" id="no1" type="number" value="1">
                      <input class="form-control" id="slug" style="display: none" type="text" value="{{$product_detail->slug}}">
                      <button class="plus"><span>+</span></button>
                    </div>
                    <div class="ps-product__actions"></div>
                  </form>
                </div>
                <div id="total"></div>
                <a onmouseenter="reSum()" class="ps-btn ps-btn--yellow" id="ordercuy" href="{{$product_detail->slug}}/">Order Now</a>
                <div class="ps-product__sharing">
                  <p class="text-right">Share this:<a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Relate product-->
    <div class="ps-related-product">
      <div class="ps-container">
        <div class="ps-section__header text-center">
          <h3 class="ps-section__title">Related Products</h3>
          <p>Maybe you like</p><span><img src="images/icons/floral.png" alt=""></span>
        </div>
        <div class="ps-section__content">
          <div class="row">
            @foreach ($products as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
              <div class="ps-product">
                <div class="ps-product__thumbnail"><img src="{{$product->photo}}" alt=""><a class="ps-product__overlay" href="{{route('product-detail',$product->slug)}}"></a>
                  <ul class="ps-product__actions">
                    <li><a href="{{route('product-detail',$product->slug)}}" data-tooltip="Lihat Detail"><i class="ba-magnifying-glass"></i></a></li>
                    <li><a href="#" data-tooltip="Pesan Sekarang"><i class="ba-shopping"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a>
                  <p><a href="{{route('product-detail',$product->slug)}}">Bakery</a> - <a href="{{route('product-detail',$product->slug)}}">Sweet</a> - <a href="product-list.html">Bio</a></p>
                  <p class="ps-product__price">Rp.{{$product->price}}</p>
                </div>
              </div>
            </div>
            @endforeach 

          </div>
          <div class="ps-section__footer text-center"><a class="ps-btn" href="{{url('product')}}">Load more</a></div>
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
<script>
   
var slug = document.getElementById("slug").value;

function reSum() {
            var link = document.getElementById("ordercuy");
            var qty = String(document.getElementById("no1").value)

            var newew = slug +"/"+ qty


            link.setAttribute('href',newew );

            return false;
            var num1 = document.getElementById("no1").value;
            document.getElementById("total").innerHtml = num1;
            console.log( document.getElementById("no1").value)
        }
</script>

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