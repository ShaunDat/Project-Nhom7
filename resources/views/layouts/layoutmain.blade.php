<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Fashion For Only Men </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css" rel="stylesheet" media="screen"/> <!-- General style -->
<link rel="stylesheet" href="{{ asset('css/prettyPhoto.css') }}" type="text/css" rel="stylesheet" media="screen"/><!-- prettyPhoto -->
<link rel="stylesheet" href="{{ asset('/css/tipsy.css') }}" type="text/css" rel="stylesheet" media="screen"><!--tooltip-->
<link rel="stylesheet" href="{{ asset('/css/camera.css') }}" type="text/css" rel="stylesheet" media="screen"><!--camera-->
<link rel="stylesheet" href="{{ asset('/css/jcarousel.css ') }}" type="text/css" rel="stylesheet" media="screen"/> <!-- list_work -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Arvo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js') }}"> -->
<script type="text/javascript" src="{{ asset('js/jquery-1.8.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('http://code.google.com/apis/gears/gears_init.js')}}" >

</script>


<script type="text/javascript" src="{{ ('/js/css3-mediaqueries.js') }}"></script><!--mediaqueries-->
<script type="text/javascript" src="{{ ('/js/modernizr-1.7.min.js') }}"></script><!--modernizr-->
<script type="text/javascript" src="{{ ('/js/jquery.prettyPhoto.js') }}"></script><!-- prettyPhoto -->
<script type="text/javascript" src="{{ ('/js/jquery.tipsy.js') }}"></script><!--tooltip-->
<script type="text/javascript" src="{{ ('/js/jquery.easing.1.3.js') }}"></script> <!--camera slider-->
<script type="text/javascript" src="{{ ('/js/camera.min.js') }}"></script> <!--camera slider-->
<script type="text/javascript" src="{{ ('/js/jquery.jcarousel.min.js') }}"> </script> <!-- list_work -->
<script type="text/javascript" src="{{ ('/js/jquery-hover-effect.js') }}"></script><!--Image Hover Effect-->
<script type="text/javascript" src="{{ ('/js/jquery.hoverIntent.minified.js') }}"></script><!--menu-->
<script type="text/javascript" src="{{ ('/js/jquery.dcmegamenu.1.3.3.js') }}"></script><!--menu-->
<script type="text/javascript" src="{{ ('/js/jquery.tweet.js') }}"></script><!--twitter plugin-->
<script type="text/javascript" src="{{ ('/js/jquery.quovolver.js') }}"></script><!--blockquote-->
<script type="text/javascript" src="{{ ('/js/custom.js') }}"></script><!--custom-->
<!--MENU-->
<script type="text/javascript">
$(document).ready(function($){
    $('#mega-menu-3').dcMegaMenu({
        rowItems: '2',
        speed: 'fast',
        effect: 'fade'
    });
});
</script>
<script type="text/javascript" 
src="http://maps.googleapis.com/maps/api/js?sensor=false&language=vi') }}">
<script type="text/javascript">
var map;
function initialize() {
      var myLatlng = new google.maps.LatLng(10.843928,106.717672);
      var myOptions = {
    zoom: 16,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
}
map = new google.maps.Map(document.getElementById("div_id"), myOptions); 
  // Biến text chứa nội dung sẽ được hiển thị
var text;
text= "<b style='color:#00F' " + 
         "style='text-align:center'>Nhà của mình nè!<br />" + 
     "<img src='citihouse-logo.jpg'  /></b>";
   var infowindow = new google.maps.InfoWindow(
    { content: text,
        size: new google.maps.Size(100,50),
        position: myLatlng
    });
       infowindow.open(map);    
    var marker = new google.maps.Marker({
      position: myLatlng, 
      map: map,
      title:"Fashion shop cool Mate"
  });
}
</script>
</head>

<body>
    <div id="page_wrap">
        <header>
            <div id="top">
                <span>Fashion Mate  </span>
                <div>
                    <p>Languages:
                    <label>
                        <select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                            <option selected value="index.html">English </option>
                            <option value="index2.html">Vietnamese</option>
                            
                        </select>
                    </label>​
                    </p>
                    <p>Currency:
                    <label>
                        <select>
                            <option selected>US Dollar - USD </option>
                            <option>Vietnam Đồng- VND</option>
                        </select>
                    </label>​
                    </p>
                </div>
            </div><!--end:top-->
            <div id="top2">
                <ul class="myaccountmenu">
                    <li><a href="wishlist.html">Sản phẩm yêu thích</a></li>
                    <li><a href="cart.html">Giỏ hàng</a></li>
                    <li><a href="checkout.html">Thủ tục thanh toán</a></li>
                   <li class="login"><a href="#login-box" class="last login-window">Đăng nhập</a></li>
                </ul>
                 <div id="login-box" class="login-popup">
                <a href="#" class="close"><img src="images/process-stop.png" class="btn_close" title="Close Window" alt="Close" /></a>
                  <form method="post" class="signin" action="#">
                        <fieldset class="textbox">
                            @csrf
                            <div>
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                        @else
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                            </div>
                        </div>
                        
                        </fieldset>
                        
                  </form>
                </div>
               
                <div id="demo-header">
                    <a id="cart-link" href="cart.html" title="Cart">Giỏ hàng của tôi</a>
                    
                </div><!-- /demoheader -->  
            </div><!--end:top2-->
            <div id="top3">
                <a href="index.html"><img src="https://www.coolmate.me/images/logo-coolmate.svg" alt="fashion" width="150" height="400" >  </a>
                <form action="#" method="post" class="search_bar">
                    <fieldset>
                      <input type="text" name="search" class="search" value="Enter a keywords..." onBlur="if (this.value == ''){this.value = 'Enter a keywords...'; }" onFocus="if (this.value== 'Enter a keywords...') {this.value = ''; }" />
                      <input type="submit" name="submit" value="Search" class="submit" />
                    </fieldset>
                </form>
            </div><!--end:top3-->
        </header>
        <div id="container">
            @yield('content')
            <div class="content-wrap">
                <div id="featured">
                    <div class="camera_wrap camera_emboss " id="camera_wrap_1">
                    <div  data-src="images/featured/banner.jpg">
                        <div class="camera_caption moveFromLeft">
                            <h2>From Korean  </h2>
                            <p>Perfect Designation. </p>
                            <div class="button">
                                <a href="#">Thêm vào giỏ hàng</a>
                                <a href="#">Kiểm tra</a>
                            </div>
                        </div>
                    </div>
                    <div  data-src="images/featured/banner1.jpg">
                        <div class="camera_caption moveFromLeft">
                            <h2>Sports for men</h2>
                            <p>Higher Specs- Lower Price. </p>
                             <div class="button">
                                <a href="#">Thêm vào giỏ hàng</a>
                                <a href="#">Kiểm tra</a>
                            </div>
                        </div>
                    </div>
                    <div  data-src="images/featured/banner3.jpg">
                        <div class="camera_caption moveFromLeft">
                            <h2>Combo tiết kiệm</h2>
                            <p>Smooth- Deep Styles. </p>
                             <div class="button">
                              <a href="#">Thêm vào giỏ hàng</a>
                              <a href="#">Kiểm tra</a>
                            </div>
                        </div>
                    </div>
                    <div  data-src="images/featured/banner2.jpg">
                        <div class="camera_caption moveFromLeft">
                            <h2>Combo Công nghệ</h2>
                            <p>Sharing the Passion. </p>
                            <div class="button">
                              <a href="#">Thêm vào giỏ hàng</a>
                              <a href="#">Kiểm tra</a>
                            </div>
                        </div>
                    </div>
                    </div><!-- #camera_wrap_1 -->
                    <div style="clear:both; display:block; height:40px"></div>
                </div><!--end:featured-->
                <div id="intro">
                    <div class="one-fourth serv first">
                        <img src="images/service-1.png" alt="">
                        <h3><a href="#">Miễn phí vận chuyển</a></h3>
                        <span>Luôn có sẵn</span>
                    </div>
                    <div class="one-fourth serv">
                        <img src="images/service-2.png" alt="">
                        <h3><a href="#">30 ngày hoàn trả</a></h3>
                        <span>Dễ dàng thay đổi</span>
                    </div>
                    <div class="one-fourth serv">
                        <img src="images/service-3.png" alt="">
                        <h3><a href="#">Gọi chúng tôi </a></h3>
                        <span>038 414 6024</span>
                    </div>
                    <div class="one-fourth serv">
                        <img src="images/service-4.png" alt="">
                        <h3><a href="#">Bảo mật</a></h3>
                        <span>Thanh toán</span>
                    </div>
                </div>

                <div class="container-2">
                    <div style="clear:both; display:block; height:40px"></div>
                    <div class="content-wrap">
                        <h4>Về chúng tôi!</h4>
                         <p>Trong môi trường kinh tế và công nghệ phát triển không ngừng, thị trường bán lẻ sản phẩm quần áo cho nam ngày càng phát triển nhanh chóng về quy mô. Cùng với xu thế thị trường mở rộng không chỉ  với nhiều ưu điểm về giá<a href="#"> Đọc thêm...</a></p> 
                        
                    </div>
                    <div class="one-third">
                        <div class='tweet query'></div>
                    </div>
                    <div class="one-third">
                        <div class="fb-like-box" data-href="http://www.facebook.com/HTML5Awesome" data-width="280" data-show-faces="true" data-stream="false" data-border-color="#e5e5e5" data-header="false"></div>
                    </div>
                </div><!--end:container-2-->
                
            </div><!--end:content-wrap-->
            <footer>
                <div class="content-wrap">
                    <div class="one-fourth first">
                        <h4>Thông tin</h4>
                        <ul>
                            <li><a href="/about.html">Về chúng tôi</a></li>
                            <li><a href="#">Thông tin giao hàng</a></li>
                            <li><a href="#">Chính sách chất lượng</a></li>
                            <li><a href="#">Điều kiện</a></li>
                        </ul>
                    </div>
                    <div class="one-fourth">
                        <h4>Bản đồ trang web</h4>
                        <ul>
                            <li><a href="sitemap.html">Sơ đồ trang web</a></li>
                            
                        </ul>
                    </div>
                                      
                    <div class="one-fourth">
                        <h4>Tài Khoản</h4>
                        <ul>
                            <li><a href="#">Tài khoản của tôi</a></li>
                            <li><a href="#">Lịch sử</a></li>
                            <li><a href="#">Tin tức</a></li>
                        </ul>
                    </div>
                </div>
                <div class="content-wrap">
                    <div style="clear:both; display:block;" class="social-wrap"></div>
                    <ul class="social">
                        <li><a href="https://www.facebook.com/laptopbaominh" class="tip" title="Facebook"><img src="images/social-icon-facebook.png" alt="Facebook"></a></li>
                        
                    </ul>
                    <ul class="payment">
                        <li><a href="https://www.paypal.com/vn/home" class="tip" title="Paypal"><img src="images/payment-icon-paypal.png" alt="Paypal"></a></li>
                        <li><a href="https://www.mastercard.com.vn/vi-vn.html" class="tip" title="Master Card"><img src="images/payment-icon-mastercard.png" alt="Master Card"></a></li>
                        <li><a href="https://www.visa.com.vn/" class="tip" title="Visa"><img src="images/payment-icon-visa.png" alt="Visa"></a></li>
                    </ul>
                    <p style="clear:both; display:block;">&copy; 2022 <a href="index.html">Fashion Cool Mate</a>, Designed by: <a href="#">Trịnh Ngọc Sơn PBIT1702</a></p>
                </div>
            </footer>
        </div><!--end:container-->
    </div><!--end:page_wrap-->
   
<script type="text/javascript">
//------JCAROUSEL-------------
        function mycarousel_initCallback(carousel){
        // Disable autoscrolling if the user clicks the prev or next button.
        carousel.buttonNext.bind('click', function() {
            carousel.startAuto(0);
        });
        carousel.buttonPrev.bind('click', function() {
            carousel.startAuto(0);
        });
        // Pause autoscrolling if the user moves with the cursor over the clip.
        carousel.clip.hover(function() {
            carousel.stopAuto();
        }, function() {
            carousel.startAuto();
        });
    };
    jQuery(document).ready(function() {
        jQuery('#mycarousel, #mycarouselnew').jcarousel({
            auto: 0,
            wrap: 'last',
            initCallback: mycarousel_initCallback
        });
        
    }); 
</script>    

</body>
</html>
