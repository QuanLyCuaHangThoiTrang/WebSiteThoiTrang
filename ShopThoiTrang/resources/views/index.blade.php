
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
                        <a href="#"><img src="assets/images/cart/cart-2.jpg" alt=""></a>
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
                <a class="theme-color" href="{{ url('/cart') }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">xem giỏ hàng</font></font></a>
            </div>
            <div class="checkout-btn btn-hover">
                <a class="theme-color" href="{{ url('/checkout') }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">kiểm tra</font></font></a>
            </div>
        </div>
    </div>
</div>
<div class="slider-area">
    <div class="slider-active swiper-container swiper-container-fade swiper-container-initialized swiper-container-horizontal">
        <div class="swiper-wrapper" id="swiper-wrapper-a81f0e2eb6d79d83" aria-live="polite" style="transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="1 / 4" style="width: 1519px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                <div class="intro-section slider-height-1 slider-content-center bg-img single-animation-wrap slider-bg-color-1" style="background-image:url(assets/images/slider/slider-bg-1.jpg)">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="slider-content-1 slider-animated-1">
                                    <h3 class="animated"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mới đến</font></font></h3>
                                    <h1 class="animated"><font style="vertical-align: inherit;"></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bộ sưu tập </font><font style="vertical-align: inherit;">mùa hè</font></font></h1>
                                    <div class="slider-btn btn-hover">
                                        <a href="product-details.html" class="btn animated"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                            Mua ngay</font></font><i class=" ti-arrow-right "></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="hero-slider-img-1 slider-animated-1">
                                    <img class="animated animated-slider-img-1" src="assets/images/slider/slider-img-1-2.png" alt="">
                                    <div class="product-offer animated">
                                        <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30%</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tắt</font></font></span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="2 / 4" style="width: 1519px; opacity: 1; transform: translate3d(-1519px, 0px, 0px); transition-duration: 0ms;">
                <div class="intro-section slider-height-1 slider-content-center bg-img single-animation-wrap slider-bg-color-1" style="background-image:url(assets/images/slider/slider-bg-1.jpg)">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="slider-content-1 slider-animated-1">
                                    <h3 class="animated"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mới đến</font></font></h3>
                                    <h1 class="animated"><font style="vertical-align: inherit;"></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bộ sưu tập </font><font style="vertical-align: inherit;">mùa hè</font></font></h1>
                                    <div class="slider-btn btn-hover">
                                        <a href="product-details.html" class="btn animated"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                            Mua ngay</font></font><i class=" ti-arrow-right "></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="hero-slider-img-1 slider-animated-1">
                                    <img class="animated animated-slider-img-1" src="assets/images/slider/slider-img-1.png" alt="">
                                    <div class="product-offer animated">
                                        <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30%</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tắt</font></font></span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" role="group" aria-label="3 / 4" style="width: 1519px; opacity: 0; transform: translate3d(-3038px, 0px, 0px); transition-duration: 0ms;">
                <div class="intro-section slider-height-1 slider-content-center bg-img single-animation-wrap slider-bg-color-1" style="background-image:url(assets/images/slider/slider-bg-1.jpg)">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="slider-content-1 slider-animated-1">
                                    <h3 class="animated"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mới đến</font></font></h3>
                                    <h1 class="animated"><font style="vertical-align: inherit;"></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bộ sưu tập </font><font style="vertical-align: inherit;">mùa hè</font></font></h1>
                                    <div class="slider-btn btn-hover">
                                        <a href="product-details.html" class="btn animated"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                            Mua ngay</font></font><i class=" ti-arrow-right "></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="hero-slider-img-1 slider-animated-1">
                                    <img class="animated animated-slider-img-1" src="assets/images/slider/slider-img-1-2.png" alt="">
                                    <div class="product-offer animated">
                                        <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30%</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tắt</font></font></span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-slider-prev main-slider-nav" tabindex="0" role="button" aria-label="Slide trước" aria-controls="swiper-wrapper-a81f0e2eb6d79d83"><i class="fa fa-angle-left"></i></div>
            <div class="home-slider-next main-slider-nav" tabindex="0" role="button" aria-label="Slide tiếp theo" aria-controls="swiper-wrapper-a81f0e2eb6d79d83"><i class="fa fa-angle-right"></i></div>
        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="6 / 4" style="width: 1519px; opacity: 0; transform: translate3d(-4557px, 0px, 0px); transition-duration: 0ms;">
                <div class="intro-section slider-height-1 slider-content-center bg-img single-animation-wrap slider-bg-color-1" style="background-image:url(assets/images/slider/slider-bg-1.jpg)">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="slider-content-1 slider-animated-1">
                                    <h3 class="animated"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mới đến</font></font></h3>
                                    <h1 class="animated"><font style="vertical-align: inherit;"></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bộ sưu tập </font><font style="vertical-align: inherit;">mùa hè</font></font></h1>
                                    <div class="slider-btn btn-hover">
                                        <a href="product-details.html" class="btn animated"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                            Mua ngay</font></font><i class=" ti-arrow-right "></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="hero-slider-img-1 slider-animated-1">
                                    <img class="animated animated-slider-img-1" src="assets/images/slider/slider-img-1.png" alt="">
                                    <div class="product-offer animated">
                                        <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30%</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tắt</font></font></span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div></div>
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
</div>
<div class="banner-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="banner-wrap mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <a href="product-details.html"><img src="assets/images/banner/banner-1.png" alt=""></a>
                    <div class="banner-content-1">
                        <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mới đến</font></font></h5>
                        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế văn phòng</font></font></h3>
                        <div class="banner-btn">
                            <a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mua ngay</font></font></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="banner-wrap mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                    <a href="product-details.html"><img src="assets/images/banner/banner-2.png" alt=""></a>
                    <div class="banner-content-1">
                        <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mới đến</font></font></h5>
                        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế treo</font></font></h3>
                        <div class="banner-btn">
                            <a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mua ngay</font></font></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="banner-wrap mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
                    <a href="product-details.html"><img src="assets/images/banner/banner-3.png" alt=""></a>
                    <div class="banner-content-1">
                        <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mới đến</font></font></h5>
                        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế gấp</font></font></h3>
                        <div class="banner-btn">
                            <a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mua ngay</font></font></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-area pb-95">
    <div class="container">
        <div class="section-border section-border-margin-1 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="section-title-timer-wrap bg-white">
                <div class="section-title-1">
                    <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giao dịch trong ngày</font></font></h2>
                </div>
                <div id="timer-1-active" class="timer-style-1 syotimer">
                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kết thúc trong:</font></font></span>
                    <div data-countdown="2023/8/30"></div>
                <div class="syotimer__head"></div><div class="syotimer__body"><p style="font-size: 1.2em;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đếm ngược đã kết thúc!</font></font></p></div><div class="syotimer__footer"></div></div>
            </div>
        </div>
        <div class="product-slider-active-1 swiper-container swiper-container-initialized swiper-container-horizontal">
            <div class="swiper-wrapper" id="swiper-wrapper-358a3a11c232856b" aria-live="polite" style="transform: translate3d(-1200px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="1 / 13" style="width: 270px; margin-right: 30px;">
                    <div class="product-wrap aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="assets/images/product/product-2.png" alt="">
                            </a>
                            <div class="product-action-wrap">
                                <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="pe-7s-look"></i>
                                </button>
                            </div>
                            <div class="product-action-2-wrap">
                                <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bộ ghế sofa hiện đại mới</font></font></a></h3>
                            <div class="product-price">
                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50,25 đô la</font></font></span>
                            </div>
                        </div>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="2 / 13" style="width: 270px; margin-right: 30px;">
                    <div class="product-wrap aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="assets/images/product/product-3.png" alt="">
                            </a>
                            <div class="product-badge badge-top badge-right badge-pink">
                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-10%</font></font></span>
                            </div>
                            <div class="product-action-wrap">
                                <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="pe-7s-look"></i>
                                </button>
                            </div>
                            <div class="product-action-2-wrap">
                                <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế hiện đại dễ dàng</font></font></a></h3>
                            <div class="product-price">
                                <span class="old-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">45,00 đô </font></font></span>
                                <span class="new-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">la 40,00 đô la</font></font></span>
                            </div>
                        </div>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="3 / 13" style="width: 270px; margin-right: 30px;">
                    <div class="product-wrap aos-init aos-animate" data-aos="fade-up" data-aos-delay="800">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="assets/images/product/product-4.png" alt="">
                            </a>
                            <div class="product-action-wrap">
                                <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="pe-7s-look"></i>
                                </button>
                            </div>
                            <div class="product-action-2-wrap">
                                <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế xích đu thời trang</font></font></a></h3>
                            <div class="product-price">
                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30,25 đô la</font></font></span>
                            </div>
                        </div>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="4" role="group" aria-label="4 / 13" style="width: 270px; margin-right: 30px;">
                    <div class="product-wrap aos-init aos-animate" data-aos="fade-up" data-aos-delay="1000">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="assets/images/product/product-2.png" alt="">
                            </a>
                            <div class="product-badge badge-top badge-right badge-pink">
                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-10%</font></font></span>
                            </div>
                            <div class="product-action-wrap">
                                <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="pe-7s-look"></i>
                                </button>
                            </div>
                            <div class="product-action-2-wrap">
                                <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bộ ghế sofa hiện đại mới</font></font></a></h3>
                            <div class="product-price">
                                <span class="old-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">80,50 đô </font></font></span>
                                <span class="new-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">la 75,25 đô la</font></font></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="5 / 13" style="width: 270px; margin-right: 30px;">
                    <div class="product-wrap aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="assets/images/product/product-1.png" alt="">
                            </a>
                            <div class="product-badge badge-top badge-right badge-pink">
                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-10%</font></font></span>
                            </div>
                            <div class="product-action-wrap">
                                <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="pe-7s-look"></i>
                                </button>
                            </div>
                            <div class="product-action-2-wrap">
                                <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bộ ghế sofa hiện đại mới</font></font></a></h3>
                            <div class="product-price">
                                <span class="old-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25,89 đô </font></font></span>
                                <span class="new-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">la 20,25 đô la</font></font></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" role="group" aria-label="6 / 13" style="width: 270px; margin-right: 30px;">
                    <div class="product-wrap aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="assets/images/product/product-2.png" alt="">
                            </a>
                            <div class="product-action-wrap">
                                <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="pe-7s-look"></i>
                                </button>
                            </div>
                            <div class="product-action-2-wrap">
                                <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bộ ghế sofa hiện đại mới</font></font></a></h3>
                            <div class="product-price">
                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50,25 đô la</font></font></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="7 / 13" style="width: 270px; margin-right: 30px;">
                    <div class="product-wrap aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="assets/images/product/product-3.png" alt="">
                            </a>
                            <div class="product-badge badge-top badge-right badge-pink">
                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-10%</font></font></span>
                            </div>
                            <div class="product-action-wrap">
                                <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="pe-7s-look"></i>
                                </button>
                            </div>
                            <div class="product-action-2-wrap">
                                <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế hiện đại dễ dàng</font></font></a></h3>
                            <div class="product-price">
                                <span class="old-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">45,00 đô </font></font></span>
                                <span class="new-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">la 40,00 đô la</font></font></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="8 / 13" style="width: 270px; margin-right: 30px;">
                    <div class="product-wrap aos-init aos-animate" data-aos="fade-up" data-aos-delay="800">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="assets/images/product/product-4.png" alt="">
                            </a>
                            <div class="product-action-wrap">
                                <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="pe-7s-look"></i>
                                </button>
                            </div>
                            <div class="product-action-2-wrap">
                                <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế xích đu thời trang</font></font></a></h3>
                            <div class="product-price">
                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30,25 đô la</font></font></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="4" role="group" aria-label="9 / 13" style="width: 270px; margin-right: 30px;">
                    <div class="product-wrap aos-init aos-animate" data-aos="fade-up" data-aos-delay="1000">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="assets/images/product/product-2.png" alt="">
                            </a>
                            <div class="product-badge badge-top badge-right badge-pink">
                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-10%</font></font></span>
                            </div>
                            <div class="product-action-wrap">
                                <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="pe-7s-look"></i>
                                </button>
                            </div>
                            <div class="product-action-2-wrap">
                                <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bộ ghế sofa hiện đại mới</font></font></a></h3>
                            <div class="product-price">
                                <span class="old-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">80,50 đô </font></font></span>
                                <span class="new-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">la 75,25 đô la</font></font></span>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="10 / 13" style="width: 270px; margin-right: 30px;">
                    <div class="product-wrap aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="assets/images/product/product-1.png" alt="">
                            </a>
                            <div class="product-badge badge-top badge-right badge-pink">
                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-10%</font></font></span>
                            </div>
                            <div class="product-action-wrap">
                                <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="pe-7s-look"></i>
                                </button>
                            </div>
                            <div class="product-action-2-wrap">
                                <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bộ ghế sofa hiện đại mới</font></font></a></h3>
                            <div class="product-price">
                                <span class="old-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25,89 đô </font></font></span>
                                <span class="new-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">la 20,25 đô la</font></font></span>
                            </div>
                        </div>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="11 / 13" style="width: 270px; margin-right: 30px;">
                    <div class="product-wrap aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="assets/images/product/product-2.png" alt="">
                            </a>
                            <div class="product-action-wrap">
                                <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="pe-7s-look"></i>
                                </button>
                            </div>
                            <div class="product-action-2-wrap">
                                <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bộ ghế sofa hiện đại mới</font></font></a></h3>
                            <div class="product-price">
                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50,25 đô la</font></font></span>
                            </div>
                        </div>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="12/13" style="width: 270px; margin-right: 30px;">
                    <div class="product-wrap aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="assets/images/product/product-3.png" alt="">
                            </a>
                            <div class="product-badge badge-top badge-right badge-pink">
                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-10%</font></font></span>
                            </div>
                            <div class="product-action-wrap">
                                <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="pe-7s-look"></i>
                                </button>
                            </div>
                            <div class="product-action-2-wrap">
                                <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế hiện đại dễ dàng</font></font></a></h3>
                            <div class="product-price">
                                <span class="old-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">45,00 đô </font></font></span>
                                <span class="new-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">la 40,00 đô la</font></font></span>
                            </div>
                        </div>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="13/13" style="width: 270px; margin-right: 30px;">
                    <div class="product-wrap aos-init aos-animate" data-aos="fade-up" data-aos-delay="800">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="assets/images/product/product-4.png" alt="">
                            </a>
                            <div class="product-action-wrap">
                                <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="pe-7s-look"></i>
                                </button>
                            </div>
                            <div class="product-action-2-wrap">
                                <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế xích đu thời trang</font></font></a></h3>
                            <div class="product-price">
                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30,25 đô la</font></font></span>
                            </div>
                        </div>
                    </div>
                </div></div>
            <div class="product-prev-1 product-nav-1 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" tabindex="0" role="button" aria-label="Slide trước" aria-controls="swiper-wrapper-358a3a11c232856b"><i class="fa fa-angle-left"></i></div>
            <div class="product-next-1 product-nav-1 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" tabindex="0" role="button" aria-label="Slide tiếp theo" aria-controls="swiper-wrapper-358a3a11c232856b"><i class="fa fa-angle-right"></i></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </div>
</div>
<div class="banner-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7">
                <div class="banner-wrap mb-30 aos-init" data-aos="fade-up" data-aos-delay="200">
                    <a href="product-details.html"><img src="assets/images/banner/banner-4.png" alt=""></a>
                    <div class="banner-content-2">
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giảm giá 30%</font></font></span>
                        <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nội thất mới</font></font></h2>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tôi rất tiếc phải nói rằng việc trở thành một người quảng cáo ổn định là rất quan trọng nhưng tôi làm vậy</font></font></p>
                        <div class="btn-style-2 btn-hover">
                            <a href="product-details.html" class="btn"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                Mua ngay
                            </font></font></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5">
                <div class="banner-wrap mb-30 aos-init" data-aos="fade-up" data-aos-delay="400">
                    <a href="product-details.html"><img src="assets/images/banner/banner-5.png" alt=""></a>
                    <div class="banner-content-3">
                        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lên đến 30% cho </font></font><img src="assets/images/icon-img/sale.png" alt=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mỗi mặt hàng</font></font></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="service-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                <div class="service-wrap aos-init" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-img">
                        <img src="assets/images/icon-img/car.png" alt="">
                    </div>
                    <div class="service-content">
                        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Miễn phí vận chuyển</font></font></h3>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Miễn phí vận chuyển cho tất cả các đơn hàng</font></font></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                <div class="service-wrap aos-init" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-img">
                        <img src="assets/images/icon-img/time.png" alt="">
                    </div>
                    <div class="service-content">
                        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hỗ trợ 24/7</font></font></h3>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hỗ trợ 24 giờ một ngày</font></font></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                <div class="service-wrap aos-init" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-img">
                        <img src="assets/images/icon-img/dollar.png" alt="">
                    </div>
                    <div class="service-content">
                        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trả lại tiền</font></font></h3>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đảm bảo trở lại theo</font></font></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                <div class="service-wrap aos-init" data-aos="fade-up" data-aos-delay="800">
                    <div class="service-img">
                        <img src="assets/images/icon-img/discount.png" alt="">
                    </div>
                    <div class="service-content">
                        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đặt hàng giảm giá</font></font></h3>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Một đơn hàng trên $150</font></font></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="home-single-product-img aos-init" data-aos="fade-up" data-aos-delay="200">
                    <a href="product-details.html"><img src="assets/images/product/single-product.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="home-single-product-content">
                    <h2 data-aos="fade-up" data-aos-delay="200" class="aos-init"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế hiện đại</font></font></h2>
                    <h3 data-aos="fade-up" data-aos-delay="400" class="aos-init"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20,25 đô la</font></font></h3>
                    <p data-aos="fade-up" data-aos-delay="600" class="aos-init"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bản thân cơn đau là rất quan trọng và việc tăng cân sẽ kéo theo; Để đi đến chi tiết nhỏ nhất, không ai nên thực hiện bất kỳ loại công việc nào trừ khi anh ta thu được lợi ích nào đó từ nó. Nghi ngờ hoặc không đau đớn khi bị khiển trách trong niềm vui</font></font></p>
                    <div class="product-color aos-init" data-aos="fade-up" data-aos-delay="800">
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Màu sắc :</font></font></span>
                        <ul>
                            <li><a title="Hồng" class="pink" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">hồng</font></font></a></li>
                            <li><a title="Màu vàng" class="yellow" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">màu vàng</font></font></a></li>
                            <li><a title="Màu tím" class="purple" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">màu tím</font></font></a></li>
                        </ul>
                    </div>
                    <div class="product-details-action-wrap aos-init" data-aos="fade-up" data-aos-delay="1000">
                        <div class="product-quality"><div class="dec qtybutton"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></div>
                            <input class="cart-plus-minus-box input-text qty text" name="qtybutton" value="1">
                        <div class="inc qtybutton"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></div></div>
                        <div class="single-product-cart btn-hover">
                            <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></a>
                        </div>
                        <div class="single-product-wishlist">
                            <a title="Danh sách mong muốn" href="wishlist.html"><i class="pe-7s-like"></i></a>
                        </div>
                        <div class="single-product-compare">
                            <a title="So sánh" href="#"><i class="pe-7s-shuffle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="banner-area pb-95 aos-init" data-aos="fade-up" data-aos-delay="200">
    <div class="container">
        <div class="bg-img bg-padding-1" style="background-image:url(assets/images/bg/bg-1.png)">
            <div class="banner-content-4">
                <h2><font style="vertical-align: inherit;"></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bộ ghế </font><font style="vertical-align: inherit;">ăn mới</font></font></h2>
                <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giảm giá lên đến 30%</font></font></h3>
                <div class="btn-style-2 btn-hover">
                    <a href="product-details.html" class="btn"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        Mua ngay
                    </font></font></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-area pb-60">
    <div class="container">
        <div class="section-title-tab-wrap mb-75">
            <div class="section-title-2 aos-init" data-aos="fade-up" data-aos-delay="200">
                <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sản phẩm Hot</font></font></h2>
            </div>
            <div class="tab-style-1 nav aos-init" data-aos="fade-up" data-aos-delay="400" role="tablist">
                <a class="active" href="#pro-1" data-bs-toggle="tab" aria-selected="true" role="tab"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hàng mới về</font></font></a>
                <a href="#pro-2" data-bs-toggle="tab" class="" aria-selected="false" tabindex="-1" role="tab"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bán chạy nhất</font></font></a>
                <a href="#pro-3" data-bs-toggle="tab" class="" aria-selected="false" tabindex="-1" role="tab"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mặt hàng bán</font></font></a>
            </div>
        </div>
        <div class="tab-content jump">
            <div id="pro-1" class="tab-pane active" role="tabpanel">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-wrap mb-35 aos-init" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-5.png" alt="">
                                </a>
                                <div class="product-badge badge-top badge-right badge-pink">
                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-10%</font></font></span>
                                </div>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kết xuất nội thất hiện đại</font></font></a></h3>
                                <div class="product-price">
                                    <span class="old-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25,89 đô </font></font></span>
                                    <span class="new-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">la 20,25 đô la</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-wrap mb-35 aos-init" data-aos="fade-up" data-aos-delay="400">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-6.png" alt="">
                                </a>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế ăn thời trang</font></font></a></h3>
                                <div class="product-price">
                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50,25 đô la</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-wrap mb-35 aos-init" data-aos="fade-up" data-aos-delay="600">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-7.png" alt="">
                                </a>
                                <div class="product-badge badge-top badge-right badge-pink">
                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-10%</font></font></span>
                                </div>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế tròn tiêu chuẩn</font></font></a></h3>
                                <div class="product-price">
                                    <span class="old-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">45,00 đô </font></font></span>
                                    <span class="new-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">la 40,00 đô la</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-wrap mb-35 aos-init" data-aos="fade-up" data-aos-delay="800">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-4.png" alt="">
                                </a>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế xích đu thời trang</font></font></a></h3>
                                <div class="product-price">
                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30,25 đô la</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-wrap mb-35 aos-init" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-8.png" alt="">
                                </a>
                                <div class="product-badge badge-top badge-right badge-pink">
                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-10%</font></font></span>
                                </div>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế xoay hiện đại</font></font></a></h3>
                                <div class="product-price">
                                    <span class="old-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25,89 đô </font></font></span>
                                    <span class="new-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">la 20,25 đô la</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-wrap mb-35 aos-init" data-aos="fade-up" data-aos-delay="400">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-2.png" alt="">
                                </a>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bộ ghế sofa hiện đại mới</font></font></a></h3>
                                <div class="product-price">
                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50,25 đô la</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-wrap mb-35 aos-init" data-aos="fade-up" data-aos-delay="600">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-3.png" alt="">
                                </a>
                                <div class="product-badge badge-top badge-right badge-pink">
                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-10%</font></font></span>
                                </div>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế hiện đại dễ dàng</font></font></a></h3>
                                <div class="product-price">
                                    <span class="old-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">45,00 đô </font></font></span>
                                    <span class="new-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">la 40,00 đô la</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-wrap mb-35 aos-init" data-aos="fade-up" data-aos-delay="800">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-9.png" alt="">
                                </a>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế thư giãn hiện đại</font></font></a></h3>
                                <div class="product-price">
                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30,25 đô la</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pro-2" class="tab-pane" role="tabpanel">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-wrap mb-35">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-9.png" alt="">
                                </a>
                                <div class="product-badge badge-top badge-right badge-pink">
                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-10%</font></font></span>
                                </div>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế thư giãn hiện đại</font></font></a></h3>
                                <div class="product-price">
                                    <span class="old-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25,89 đô </font></font></span>
                                    <span class="new-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">la 20,25 đô la</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-wrap mb-35">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-8.png" alt="">
                                </a>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế xoay hiện đại</font></font></a></h3>
                                <div class="product-price">
                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50,25 đô la</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-wrap mb-35">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-6.png" alt="">
                                </a>
                                <div class="product-badge badge-top badge-right badge-pink">
                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-10%</font></font></span>
                                </div>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế ăn thời trang</font></font></a></h3>
                                <div class="product-price">
                                    <span class="old-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">45,00 đô </font></font></span>
                                    <span class="new-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">la 40,00 đô la</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-wrap mb-35">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-7.png" alt="">
                                </a>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế tròn tiêu chuẩn</font></font></a></h3>
                                <div class="product-price">
                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30,25 đô la</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-wrap mb-35">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-5.png" alt="">
                                </a>
                                <div class="product-badge badge-top badge-right badge-pink">
                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-10%</font></font></span>
                                </div>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kết xuất nội thất hiện đại</font></font></a></h3>
                                <div class="product-price">
                                    <span class="old-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25,89 đô </font></font></span>
                                    <span class="new-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">la 20,25 đô la</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-wrap mb-35">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-4.png" alt="">
                                </a>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế xích đu thời trang</font></font></a></h3>
                                <div class="product-price">
                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50,25 đô la</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-wrap mb-35">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-2.png" alt="">
                                </a>
                                <div class="product-badge badge-top badge-right badge-pink">
                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-10%</font></font></span>
                                </div>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bộ ghế sofa hiện đại mới</font></font></a></h3>
                                <div class="product-price">
                                    <span class="old-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">45,00 đô </font></font></span>
                                    <span class="new-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">la 40,00 đô la</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-wrap mb-35">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-1.png" alt="">
                                </a>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bộ ghế sofa hiện đại mới</font></font></a></h3>
                                <div class="product-price">
                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30,25 đô la</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pro-3" class="tab-pane" role="tabpanel">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-wrap mb-35">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-4.png" alt="">
                                </a>
                                <div class="product-badge badge-top badge-right badge-pink">
                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-10%</font></font></span>
                                </div>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế xích đu thời trang</font></font></a></h3>
                                <div class="product-price">
                                    <span class="old-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25,89 đô </font></font></span>
                                    <span class="new-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">la 20,25 đô la</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-wrap mb-35">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-3.png" alt="">
                                </a>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế hiện đại dễ dàng</font></font></a></h3>
                                <div class="product-price">
                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50,25 đô la</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-wrap mb-35">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-5.png" alt="">
                                </a>
                                <div class="product-badge badge-top badge-right badge-pink">
                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-10%</font></font></span>
                                </div>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kết xuất nội thất hiện đại</font></font></a></h3>
                                <div class="product-price">
                                    <span class="old-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">45,00 đô </font></font></span>
                                    <span class="new-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">la 40,00 đô la</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-wrap mb-35">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-2.png" alt="">
                                </a>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bộ ghế sofa hiện đại mới</font></font></a></h3>
                                <div class="product-price">
                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30,25 đô la</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-wrap mb-35">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-1.png" alt="">
                                </a>
                                <div class="product-badge badge-top badge-right badge-pink">
                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-10%</font></font></span>
                                </div>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bộ ghế sofa hiện đại mới</font></font></a></h3>
                                <div class="product-price">
                                    <span class="old-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25,89 đô </font></font></span>
                                    <span class="new-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">la 20,25 đô la</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-wrap mb-35">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-8.png" alt="">
                                </a>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế xoay hiện đại</font></font></a></h3>
                                <div class="product-price">
                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50,25 đô la</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-wrap mb-35">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-7.png" alt="">
                                </a>
                                <div class="product-badge badge-top badge-right badge-pink">
                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-10%</font></font></span>
                                </div>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế tròn tiêu chuẩn</font></font></a></h3>
                                <div class="product-price">
                                    <span class="old-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">45,00 đô </font></font></span>
                                    <span class="new-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">la 40,00 đô la</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-wrap mb-35">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-6.png" alt="">
                                </a>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Danh sách mong muốn"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1" title="Xem nhanh" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Thêm vào giỏ hàng"><i class="pe-7s-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế ăn thời trang</font></font></a></h3>
                                <div class="product-price">
                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30,25 đô la</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="brand-logo-area pb-95">
    <div class="container">
        <div class="brand-logo-active swiper-container swiper-container-initialized swiper-container-horizontal">
            <div class="swiper-wrapper" id="swiper-wrapper-4622e10548b4f98f4" aria-live="polite" style="transform: translate3d(-1168px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="1 / 16" style="width: 213.6px; margin-right: 20px;">
                    <div class="single-brand-logo aos-init" data-aos="fade-up" data-aos-delay="400">
                        <a href="#"><img src="assets/images/brand-logo/brand-logo-2.png" alt=""></a>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="2 / 16" style="width: 213.6px; margin-right: 20px;">
                    <div class="single-brand-logo aos-init" data-aos="fade-up" data-aos-delay="600">
                        <a href="#"><img src="assets/images/brand-logo/brand-logo-3.png" alt=""></a>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="3 / 16" style="width: 213.6px; margin-right: 20px;">
                    <div class="single-brand-logo aos-init" data-aos="fade-up" data-aos-delay="800">
                        <a href="#"><img src="assets/images/brand-logo/brand-logo-4.png" alt=""></a>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="4 / 16" style="width: 213.6px; margin-right: 20px;">
                    <div class="single-brand-logo aos-init" data-aos="fade-up" data-aos-delay="1000">
                        <a href="#"><img src="assets/images/brand-logo/brand-logo-5.png" alt=""></a>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="5" role="group" aria-label="5 / 16" style="width: 213.6px; margin-right: 20px;">
                    <div class="single-brand-logo aos-init" data-aos="fade-up" data-aos-delay="1200">
                        <a href="#"><img src="assets/images/brand-logo/brand-logo-1.png" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="6 / 16" style="width: 213.6px; margin-right: 20px;">
                    <div class="single-brand-logo aos-init" data-aos="fade-up" data-aos-delay="200">
                        <a href="#"><img src="assets/images/brand-logo/brand-logo-1.png" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" role="group" aria-label="7 / 16" style="width: 213.6px; margin-right: 20px;">
                    <div class="single-brand-logo aos-init" data-aos="fade-up" data-aos-delay="400">
                        <a href="#"><img src="assets/images/brand-logo/brand-logo-2.png" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="8 / 16" style="width: 213.6px; margin-right: 20px;">
                    <div class="single-brand-logo aos-init" data-aos="fade-up" data-aos-delay="600">
                        <a href="#"><img src="assets/images/brand-logo/brand-logo-3.png" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="9 / 16" style="width: 213.6px; margin-right: 20px;">
                    <div class="single-brand-logo aos-init" data-aos="fade-up" data-aos-delay="800">
                        <a href="#"><img src="assets/images/brand-logo/brand-logo-4.png" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="4" role="group" aria-label="10 / 16" style="width: 213.6px; margin-right: 20px;">
                    <div class="single-brand-logo aos-init" data-aos="fade-up" data-aos-delay="1000">
                        <a href="#"><img src="assets/images/brand-logo/brand-logo-5.png" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="5" role="group" aria-label="11 / 16" style="width: 213.6px; margin-right: 20px;">
                    <div class="single-brand-logo aos-init" data-aos="fade-up" data-aos-delay="1200">
                        <a href="#"><img src="assets/images/brand-logo/brand-logo-1.png" alt=""></a>
                    </div>
                </div>
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="12/16" style="width: 213.6px; margin-right: 20px;">
                    <div class="single-brand-logo aos-init" data-aos="fade-up" data-aos-delay="200">
                        <a href="#"><img src="assets/images/brand-logo/brand-logo-1.png" alt=""></a>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="13/16" style="width: 213.6px; margin-right: 20px;">
                    <div class="single-brand-logo aos-init" data-aos="fade-up" data-aos-delay="400">
                        <a href="#"><img src="assets/images/brand-logo/brand-logo-2.png" alt=""></a>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="14/16" style="width: 213.6px; margin-right: 20px;">
                    <div class="single-brand-logo aos-init" data-aos="fade-up" data-aos-delay="600">
                        <a href="#"><img src="assets/images/brand-logo/brand-logo-3.png" alt=""></a>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="15/16" style="width: 213.6px; margin-right: 20px;">
                    <div class="single-brand-logo aos-init" data-aos="fade-up" data-aos-delay="800">
                        <a href="#"><img src="assets/images/brand-logo/brand-logo-4.png" alt=""></a>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="16/16" style="width: 213.6px; margin-right: 20px;">
                    <div class="single-brand-logo aos-init" data-aos="fade-up" data-aos-delay="1000">
                        <a href="#"><img src="assets/images/brand-logo/brand-logo-5.png" alt=""></a>
                    </div>
                </div></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </div>
</div>
<div class="blog-area pb-70">
    <div class="container">
        <div class="section-title-2 st-border-center text-center mb-75 aos-init" data-aos="fade-up" data-aos-delay="200">
            <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tin tức mới nhất</font></font></h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="blog-wrap mb-30 aos-init" data-aos="fade-up" data-aos-delay="200">
                    <div class="blog-img-date-wrap mb-25">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/images/blog/blog-1.png" alt=""></a>
                        </div>
                        <div class="blog-date">
                            <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">05</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Có thể</font></font></span></h5>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nội thất</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> ,</font></font></li>
                                <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bởi: </font></font><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Admin</font></font></a></li>
                            </ul>
                        </div>
                        <h3><a href="blog-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách hàng sẽ được theo dõi quá trình adipiscing của khách hàng</font></font></a></h3>
                        <div class="blog-btn">
                            <a href="blog-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đọc thêm</font></font></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-wrap mb-30 aos-init" data-aos="fade-up" data-aos-delay="400">
                    <div class="blog-img-date-wrap mb-25">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/images/blog/blog-2.png" alt=""></a>
                        </div>
                        <div class="blog-date">
                            <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Có thể</font></font></span></h5>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nội thất</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> ,</font></font></li>
                                <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bởi: </font></font><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Admin</font></font></a></li>
                            </ul>
                        </div>
                        <h3><a href="blog-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Anh ấy muốn trở thành một tài sản thực sự cho trò chơi.</font></font></a></h3>
                        <div class="blog-btn">
                            <a href="blog-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đọc thêm</font></font></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-wrap mb-30 aos-init" data-aos="fade-up" data-aos-delay="600">
                    <div class="blog-img-date-wrap mb-25">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/images/blog/blog-3.png" alt=""></a>
                        </div>
                        <div class="blog-date">
                            <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">07</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Có thể</font></font></span></h5>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nội thất</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> ,</font></font></li>
                                <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bởi: </font></font><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Admin</font></font></a></li>
                            </ul>
                        </div>
                        <h3><a href="blog-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fusce euismod varius Tellus, cũng không phải molestie turpis.</font></font></a></h3>
                        <div class="blog-btn">
                            <a href="blog-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đọc thêm</font></font></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection