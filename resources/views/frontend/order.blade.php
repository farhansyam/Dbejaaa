
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
    <title>Dbeja - Order</title>
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

  <style>
    img {
    max-width: 72%;
}
  </style>
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
    <!-- header-->
     <!-- Header-->
    <header class="header header--3" data-sticky="false">
      <nav class="navigation">
        <div class="ps-container"><a class="ps-logo" href="/"><img src="{{$setting->logo}}" alt=""></a>
          <div class="menu-toggle"><span></span></div>
          <ul class="menu" style="display: block;">
            <li class=""><a href="/">BERANDA</a>
            </li>
            <li class="current-menu-item"><a href="{{route('product')}}">PRODUCT</a>
            <li><a href="about.html">CONTACT US</a></li>
            </li>
            <li><a href="contact.html">LOGIN</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="ps-hero bg--cover" data-background="images/hero/about.jpg">
      <div class="ps-hero__content">
        <h1>Checkout</h1>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Checkout</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="ps-checkout pt-40 pb-40">
      <div class="ps-container">
        <form class="ps-form--checkout" action="do_action" id="whatsapp">
          <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
              <div class="ps-checkout__billing">
                <h3>Billing Details</h3>
                
                    <div class="form-group form-group--inline">
                      <label>Nama<span>*</span>
                      </label>
                      <div class="form-group__content">
                        <input class="form-control nama" type="text">
                      </div>
                    </div>
                    <div class="form-group form-group--inline">
                      <label>No Wa<span>*</span>
                      </label>
                      <div class="form-group__content">
                         <input class="tujuan" type="hidden" id="noAdmin">
                         <input class="qty" type="hidden" id="qty" value="{{$qty}}">
                         <input class="product" type="hidden" id="" value="{{$product_detail->title}}">
                         <input class="total" type="hidden" id="" value="{{$total}}">
                        <input class="form-control nowhatsapp" type="text">
                      </div>
                    </div>
                    <div class="form-group form-group--inline">
                      <label>Alamat<span>*</span>
                      </label>
                      <div class="form-group__content">
                        <textarea class="form-control alamat"></textarea>
                      </div>
                    </div>
                    <div class="form-group form-group--inline"  style="display: none">
                      <label>Pengiriman<span>*</span>
                      </label>
                      <div class="form-group__content">
                        <select class="form-control provinsi-tujuan" name="province_destination">
                            <option value="0">-- pilih provinsi tujuan --</option>
                            {{-- @foreach ($provinces as $province => $value) --}}
                                {{-- <option value="{{ $province  }}">{{ $value }}</option> --}}
                            {{-- @endforeach --}}
                        </select>
                        <select class="form-control kota-tujuan" name="city_destination">
                            <option value="">-- pilih kota tujuan --</option>
                        </select>
                        <select class="form-control kurir" name="courier">
                            <option value="0">-- pilih kurir --</option>
                            <option value="jne">JNE</option>
                            <option value="pos">POS</option>
                            <option value="tiki">TIKI</option>
                        </select>
                    </div>
                    </div>
                <div class="form-group form-group--inline">
                  <label>Order Notes</label>
                  <div class="form-group__content">
                    <textarea class="form-control ordernote"  rows="7" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
              <div class="ps-checkout__order">
                <header>
                  <h3>Your Order</h3>
                </header>
                <div class="content">
                  <table class="table ps-checkout__products">
                    <thead>
                      <tr>
                        <th class="text-uppercase">Product</th>
                        <th class="text-uppercase">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{$product_detail->title}} (Rp .{{$product_detail->price}}) x {{$qty}}</td>
                        <td>Rp. {{$total}}</td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <br>
                        <td><img style="margin-top: 20px" src="{{$product_detail->photo}}"></td>
                      </tr>
                      <tr>
                        <br>
                        <td>
                    <a style="margin:37px" type="submit" class="ps-btn ps-btn--fullwidth ps-btn--yellow submit">ORDER KUE SEKARANG</a>

                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <footer>
                </footer>
              </div>
            </div>
          </div>
        </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script>

      //no wa admin
$("#noAdmin").val("082114701764");
$('.whatsapp-btn').click(function() {
  $('#whatsapp').toggleClass('toggle');
});
// Onclick Whatsapp Sent!
$('#whatsapp .submit').click(WhatsApp);
$("#whatsapp input, #whatsapp textarea").keypress(function() {
  if (event.which == 13) WhatsApp();
});
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

function WhatsApp() {
  var ph = '';
  if ($('#whatsapp .nama').val() == '') { // Cek Nama
    ph = $('#whatsapp .nama').attr('placeholder');
    alert('Silahkan tulis ' + ph);
    $('#whatsapp .nama').focus();
    return false;
  } else if ($('#whatsapp .nowhatsapp').val() == '') { // Cek Whatsapp
    ph = $('#whatsapp .nowhatsapp').attr('placeholder');
    alert('Silahkan tulis ' + ph);
    $('#whatsapp .nowhatsapp').focus();
    return false;
  } else if ($('#whatsapp .alamat').val() == '') { // Cek Alamat
    ph = $('#whatsapp .alamat').attr('placeholder');
    alert('Silahkan tulis ' + ph);
    $('#whatsapp .alamat').focus();
    return false;
  } else {
    // Check Device (Mobile/Desktop)
    var url_wa = 'https://web.whatsapp.com/send';
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
      url_wa = 'whatsapp://send/';
    }
    // Get Value
    var tujuan = $('#whatsapp .tujuan').val(),
      via_url = location.href,
      nama = $('#whatsapp .nama').val(),
      nowhatsapp = $('#whatsapp .nowhatsapp').val(),
      alamat = $('#whatsapp .alamat').val();
      ordernote = $('#whatsapp .ordernote').val();
      product = $('#whatsapp .product').val();
      qty = $('#whatsapp #qty').val();
      total = $('#whatsapp .total').val();
      $(this).attr('href', url_wa + '?phone=62 ' + tujuan + '&text=Nama: ' + nama + ' %0ANo. Whatsapp: ' + nowhatsapp + '%0AAlamat: ' + alamat + '%0AOrdernote: ' + ordernote + '%0AProcuct: ' + product + '%0AQty: ' + qty + '%0ATotal: ' + total +  ' %0A%0Avia ' + via_url);
      var w = 960,
      h = 540,
      left = Number((screen.width / 2) - (w / 2)),
      tops = Number((screen.height / 2) - (h / 2)),
      popupWindow = window.open(this.href, '', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=1, copyhistory=no, width=' + w + ', height=' + h + ', top=' + tops + ', left=' + left);
    popupWindow.focus();
    return false;
  }
}

    $(document).ready(function(){
        //active select2
        $(".provinsi-asal , .kota-asal, .provinsi-tujuan, .kota-tujuan").select2({
            theme:'bootstrap4',width:'style',
        });
        //ajax select kota asal
        $('select[name="province_origin"]').on('change', function () {
            let provindeId = $(this).val();
            if (provindeId) {
                jQuery.ajax({
                    url: '/cities/'+provindeId,
                    type: "GET",
                    dataType: "json",
                    success: function (response) {
                        $('select[name="city_origin"]').empty();
                        $('select[name="city_origin"]').append('<option value="">-- pilih kota asal --</option>');
                        $.each(response, function (key, value) {
                            $('select[name="city_origin"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    },
                });
            } else {
                $('select[name="city_origin"]').append('<option value="">-- pilih kota asal --</option>');
            }
        });
        //ajax select kota tujuan
        $('select[name="province_destination"]').on('change', function () {
            let provindeId = $(this).val();
            if (provindeId) {
                jQuery.ajax({
                    url: '/cities/'+provindeId,
                    type: "GET",
                    dataType: "json",
                    success: function (response) {
                        $('select[name="city_destination"]').empty();
                        $('select[name="city_destination"]').append('<option value="">-- pilih kota tujuan --</option>');
                        $.each(response, function (key, value) {
                            $('select[name="city_destination"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    },
                });
            } else {
                $('select[name="city_destination"]').append('<option value="">-- pilih kota tujuan --</option>');
            }
        });
        //ajax check ongkir
        let isProcessing = false;
        $('.btn-check').click(function (e) {
            e.preventDefault();

            let token            = $("meta[name='csrf-token']").attr("content");
            let city_origin      = $('select[name=city_origin]').val();
            let city_destination = $('select[name=city_destination]').val();
            let courier          = $('select[name=courier]').val();
            let weight           = $('#weight').val();

            if(isProcessing){
                return;
            }

            isProcessing = true;
            jQuery.ajax({
                url: "/ongkir",
                data: {
                    _token:              token,
                    city_origin:         city_origin,
                    city_destination:    city_destination,
                    courier:             courier,
                    weight:              weight,
                },
                dataType: "JSON",
                type: "POST",
                success: function (response) {
                    isProcessing = false;
                    if (response) {
                        $('#ongkir').empty();
                        $('.ongkir').addClass('d-block');
                        $.each(response[0]['costs'], function (key, value) {
                            $('#ongkir').append('<li class="list-group-item">'+response[0].code.toUpperCase()+' : <strong>'+value.service+'</strong> - Rp. '+value.cost[0].value+' ('+value.cost[0].etd+' hari)</li>')
                        });

                    }
                }
            });

        });

    });
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