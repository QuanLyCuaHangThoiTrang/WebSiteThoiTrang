@extends('layouts.app')
@section('content')
<div class="sidebar-cart-active">
    <div class="sidebar-cart-all">
        <a class="cart-close" href="#"><i class="pe-7s-close"></i></a>
        <div class="cart-content">
            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giỏ hàng</font></font></h3>
            <ul>
                <li>
                    <div class="cart-img">
                        <a href="#"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                    </div>
                    <div class="cart-title">
                        <h4><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế xích đu thời trang</font></font></a></h4>
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 × $49,00	</font></font></span>
                    </div>
                    <div class="cart-delete">
                        <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></a>
                    </div>
                </li>
                <li>
                    <div class="cart-img">
                        <a href="#"><img src="/assets/images/cart/cart-2.jpg" alt=""></a>
                    </div>
                    <div class="cart-title">
                        <h4><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế hiện đại</font></font></a></h4>
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 × $49,00	</font></font></span>
                    </div>
                    <div class="cart-delete">
                        <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></a>
                    </div>
                </li>
            </ul>
            <div class="cart-total">
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tổng cộng:</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">170,00 đô la</font></font></span></h4>
            </div>
            <div class="cart-btn btn-hover">
                <a class="theme-color" href="cart.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">xem giỏ hàng</font></font></a>
            </div>
            <div class="checkout-btn btn-hover">
                <a class="theme-color" href="checkout.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">kiểm tra</font></font></a>
            </div>
        </div>
    </div>
</div>
<div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2 data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Liên hệ với chúng tôi</font></font></h2>
            <ul data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">
                <li><a href="{{ url('/') }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trang chủ</font></font></a></li>
                <li><i class="ti-angle-right"></i></li>
                <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Liên hệ với chúng tôi</font></font></li>
            </ul>
        </div>
    </div>
    <div class="breadcrumb-img-1">
        <img src="/assets/images/banner/breadcrumb-1.png" alt="">
    </div>
    <div class="breadcrumb-img-2">
        <img src="/assets/images/banner/breadcrumb-2.png" alt="">
    </div>
</div>
<div class="contact-us-area pt-100 pb-65">
    <div class="container">
        <div class="section-title-4 text-center mb-50 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Địa chỉ cửa hàng của chúng tôi! Vui lòng ghé thăm chúng tôi.</font></font></h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="contact-us-info-wrap mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-us-info-title">
                        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng BD</font></font></h3>
                    </div>
                    <div class="contact-us-info">
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">365 Đường Old BD, Uttra Shop Bd</font></font></p>
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gọi cho chúng tôi: +01-234567</font></font></span>
                    </div>
                    <div class="contact-us-info">
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giờ hỗ trợ: Thứ Hai – Thứ Sáu</font></font></p>
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9 giờ sáng đến 8 giờ tối</font></font></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="contact-us-info-wrap mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                    <div class="contact-us-info-title">
                        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng Hoa Kỳ</font></font></h3>
                    </div>
                    <div class="contact-us-info">
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">97, Old Avenue, Đường số 17, Hoa Kỳ 1213</font></font></p>
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gọi cho chúng tôi: +01-234567</font></font></span>
                    </div>
                    <div class="contact-us-info">
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giờ hỗ trợ: Thứ Hai – Thứ Sáu</font></font></p>
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9 giờ sáng đến 8 giờ tối</font></font></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="contact-us-info-wrap mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
                    <div class="contact-us-info-title">
                        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng Anh</font></font></h3>
                    </div>
                    <div class="contact-us-info">
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhà-33, Đường-22, Khu-Z, Vương quốc Anh 129</font></font></p>
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gọi cho chúng tôi: +01-234567</font></font></span>
                    </div>
                    <div class="contact-us-info">
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giờ hỗ trợ: Thứ Hai – Thứ Sáu</font></font></p>
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9 giờ sáng đến 8 giờ tối</font></font></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="map pt-120 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2sin!4v1463669021863"></iframe>
</div>
<div class="contact-form-area pt-90 pb-100">
    <div class="container">
        <div class="section-title-4 text-center mb-55 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hỏi chúng tôi bất cứ điều gì ở đây</font></font></h2>
        </div>
        <div class="contact-form-wrap aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <form class="contact-form-style" id="contact-form" action="https://htmldemo.net/urdan/urdan/assets/php/mail.php" method="post">
                <div class="row">
                    <div class="col-lg-4">
                        <input name="name" type="text" placeholder="Tên*">
                        <input name="email" type="email" placeholder="E-mail*">
                        <input name="subject" type="text" placeholder="Chủ thể*">
                        <input name="phone" type="text" placeholder="Điện thoại*">
                    </div>
                    <div class="col-lg-8">
                        <textarea name="message" placeholder="Tin nhắn"></textarea>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 contact-us-btn btn-hover">
                        <button class="submit" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gửi tin nhắn</font></font></button>
                    </div>
                </div>
            </form>
            <p class="form-messege"></p>
        </div>
    </div>
</div>
@endsection