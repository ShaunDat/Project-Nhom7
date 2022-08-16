@extends('layouts.layoutmain')

@section('content')
<div id="container">


<nav>  

<nav>

    <ul id="mega-menu-3" class="mega-menu">
        <li class="first"><a href="#" class="current">Trang chủ</a></li>
        <li><a href="machangngay.html">Mặc Hàng Ngày</a>
            <ul>
                <li><a href="machangngay.html"> Outfit of The Season</a>
                    

                    

                    <ul>
                       <li><a href="phan-mem.html">Quần short Outdoor</a></li>
                        <li><a href="phan-mem.html">Quần ống Suông</a></li>
                        <li><a href="phan-mem.html">Quần Short Thể Thao</a></li>
                        <li><a href="ao-nam.html">Áo Lỡ Tay</a></li>
                        <li><a href="ao-nam.html">Áo Sơ Mi</a></li>
                        <li><a href="ao-nam.html">Áo Polo Công nghệ</a></li>
                    </ul>
                </li>

            </ul>
        </li>

    <li><a href="linh-kien.html">Phụ kiện</a>
        <ul>
            <li><a href="#">Đồng Hồ đeo tay</a></li>
            <li><a href="linh-kien-chuot.html">Mắt Kính</a></li>
            <li><a href="#">Vòng Đeo Tay</a></li>
            <li><a href="#">Nước Hoa Bỏ túi</a></li>
            <li><a href="#">Ví</a></li>
            <li><a href="#">Thắt Lưng</a></li>
        </ul>
    </li>
    <li><a href="quan-lot-nam.html">Quần lót Nam</a>
        <ul>
            <li>
            <ul>
                <li><a href="#">Quần Brief</a></li>
                <li><a href="#">Quần Trunk</a></li>
                <li><a href="#">Quần Boxer</a></li>
            </ul>

            </li>

            </ul>
    </li>

     <li><a href="ao-nam.html">áo Nam</a>
        <ul>
            <li>
            <ul>
                <li><a href="#">T shirt</a></li>
                <li><a href="#">Áo Lỡ Tay </a></li>
                <li><a href="#">áo Polo</a></li>
                <li><a href="#">áo In Hình  </a></li>
                <li><a href="#">áo khoác Thể Thao  </a></li>
            </ul>

            </li>

            </ul>
    </li>
     <li><a href="phan-mem.html">quần  Nam</a>
        <ul>
            <li>
            <ul>
                <li><a href="#">quần Dài</a></li>
                <li><a href="#">Quần Short </a></li>
                <li><a href="#">Quần jean</a></li>

            </ul>

            </li>

            </ul>
    </li>

  
    <li><a href="lienhe">Liện hệ</a></li>


  

    </ul>
</nav><!--end:grey-->


        
        @include ('sliders.slider')
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
   @include ('layouts.productlayout')
            <div class="side">
                <h4>Maps</h4>
                    <div>
                             <p><a href="ban-do.html" class="link"> <img src="images/map.jpg" alt=""></a></p>

                        </div>
            </div>
        </aside>
          
@endsection
