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
                        <a href="#">
                            <img src="{{ asset('assets/images/cart/cart-1.jpg') }}" alt="">
                        </a>
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
                        <a href="#"><img src="{{ asset('assets/images/cart/cart-2.jpg') }}" alt=""></a>
                    </div>
                    <div class="cart-title">
                        <h4><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$chiTietSanPham->SanPham->TenSP }}</font></font></a></h4>
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
            <h2 data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chi tiết sản phẩm</font></font></h2>
            <ul data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">
                <li><a href="{{ url('/') }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trang chủ</font></font></a></li>
                <li><i class="ti-angle-right"></i></li>
                <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chi tiết sản phẩm</font></font></li>
            </ul>
        </div>
    </div>
    <div class="breadcrumb-img-1 aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
        <img src="{{ asset('assets/images/banner/breadcrumb-1.png') }}" alt="">
    </div>
    <div class="breadcrumb-img-2 aos-init aos-animate" data-aos="fade-left" data-aos-delay="200">
        <img src="{{ asset('assets/images/banner/breadcrumb-2.png') }} alt="">
    </div>
</div>
<div class="product-details-area pb-100 pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-details-img-wrap product-details-vertical-wrap aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-details-small-img-wrap">
                        <div class="swiper-container product-details-small-img-slider-1 pd-small-img-style swiper-container-initialized swiper-container-vertical swiper-container-thumbs">
                            <div class="swiper-wrapper" id="swiper-wrapper-10761037113103278b" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                <div class="swiper-slide swiper-slide-active swiper-slide-thumb-active" role="group" aria-label="1 / 5" style="height: 96px; margin-bottom: 12px;">
                                    <div class="product-details-small-img">
                                        <img src="{{ asset('assets/images/product-details/pro-details-small-img-1.png') }}" alt="Hình thu nhỏ sản phẩm">
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 5" style="height: 96px; margin-bottom: 12px;">
                                    <div class="product-details-small-img">
                                        <img src="{{ asset('assets/images/product-details/pro-details-small-img-2.png') }}" alt="Hình thu nhỏ sản phẩm">
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="3 / 5" style="height: 96px; margin-bottom: 12px;">
                                    <div class="product-details-small-img">
                                        <img src="{{ asset('assets/images/product-details/pro-details-small-img-3.png') }}" alt="Hình thu nhỏ sản phẩm">
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="4 / 5" style="height: 96px; margin-bottom: 12px;">
                                    <div class="product-details-small-img">
                                        <img src="{{ asset('assets/images/product-details/pro-details-small-img-4.png') }}" alt="Hình thu nhỏ sản phẩm">
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="5 / 5" style="height: 96px; margin-bottom: 12px;">
                                    <div class="product-details-small-img">
                                        <img src="{{ asset('assets/images/product-details/pro-details-small-img-5.png') }}" alt="Hình thu nhỏ sản phẩm">
                                    </div>
                                </div>
                            </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        <div class="pd-prev pd-nav-style swiper-button-disabled" tabindex="-1" role="button" aria-label="Slide trước" aria-controls="swiper-wrapper-10761037113103278b" aria-disabled="true"> <i class="ti-angle-up"></i></div>
                        <div class="pd-next pd-nav-style" tabindex="0" role="button" aria-label="Slide tiếp theo" aria-controls="swiper-wrapper-10761037113103278b" aria-disabled="false"> <i class="ti-angle-down"></i></div>
                    </div>
                    <div class="swiper-container product-details-big-img-slider-1 pd-big-img-style swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper" id="swiper-wrapper-a25898b410e8edf3c" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 5" style="width: 470px;">
                                <div class="easyzoom-style">
                                    <div class="easyzoom easyzoom--overlay is-ready">
                                        <a href="{{ asset('assets/images/product-details/pro-details-zoom-img-1.png') }}">
                                            <img src="{{ asset('assets/images/product-details/pro-details-large-img-1.png') }}" alt="">
                                        </a>
                                    </div>
                                    <a class="easyzoom-pop-up img-popup" href="{{ asset('assets/images/product-details/pro-details-large-img-1.png') }}">
                                        <i class="pe-7s-search"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 5" style="width: 470px;">
                                <div class="easyzoom-style">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="{{ asset('assets/images/product-details/pro-details-large-img-2.png') }}">
                                            <img src="{{ asset('assets/images/product-details/pro-details-large-img-2.png') }}" alt="">
                                        </a>
                                    </div>
                                    <a class="easyzoom-pop-up img-popup" href="{{ asset('assets/images/product-details/pro-details-large-img-2.png') }}">
                                        <i class="pe-7s-search"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="3 / 5" style="width: 470px;">
                                <div class="easyzoom-style">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="{{ asset('assets/images/product-details/pro-details-zoom-img-3.png') }}">
                                            <img src="{{ asset('assets/images/product-details/pro-details-large-img-3.png') }}" alt="">
                                        </a>
                                    </div>
                                    <a class="easyzoom-pop-up img-popup" href="{{ asset('assets/images/product-details/pro-details-large-img-3.png') }}">
                                        <i class="pe-7s-search"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="4 / 5" style="width: 470px;">
                                <div class="easyzoom-style">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="{{ asset('assets/images/product-details/pro-details-zoom-img-4.png') }}">
                                            <img src="{{ asset('assets/images/product-details/pro-details-large-img-4.png') }}" alt="">
                                        </a>
                                    </div>
                                    <a class="easyzoom-pop-up img-popup" href="{{ asset('assets/images/product-details/pro-details-large-img-4.png') }}">
                                        <i class="pe-7s-search"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="5 / 5" style="width: 470px;">
                                <div class="easyzoom-style">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="{{ asset('assets/images/product-details/pro-details-zoom-img-5.png') }}">
                                            <img src="{{ asset('assets/images/product-details/pro-details-large-img-5.png') }}" alt="">
                                        </a>
                                    </div>
                                    <a class="easyzoom-pop-up img-popup" id="product-image" href="{{ asset('assets/images/product-details/pro-details-large-img-5.png') }}">
                                        <i class="pe-7s-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-details-content aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                    <h2 id="product-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $chiTietSanPham->SanPham->TenSP }} <span class="soluongton">({{ $SoLuongTonKho }})</span> </font></font></h2>
                    <div class="product-details-price">
                        <span class="old-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25,89 đô la</font></font></span>
                        <span class="new-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20,25 đô la</font></font></span>
                    </div>
                    <div class="product-details-review">
                        <div class="product-rating">
                            <i class=" ti-star"></i>
                            <i class=" ti-star"></i>
                            <i class=" ti-star"></i>
                            <i class=" ti-star"></i>
                            <i class=" ti-star"></i>
                        </div>
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">( 1 Đánh giá của khách hàng )</font></font></span>
                    </div>
                    <div class="product-color product-color-active product-details-color">
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Màu sắc :</font></font></span>
                        <ul>
                            @foreach ($MauSac as $mauSac)
                            <li>
                                <a 
                                    style="background-color: {{ $mauSac->TenMau }}" 
                                    title="{{ $mauSac->TenMau }}" 
                                    class="color-option" 
                                    data-ma-mau="{{ $mauSac->MaMau }}" 
                                    href="#">
                                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $mauSac->TenMau }}</font></font>
                                </a>
                               <p>({{ $mauSac->MaMau }})</p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="product-details-action-wrap">
                        <div class="product-quality"><div class="dec qtybutton"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></div>
                            <input class="cart-plus-minus-box input-text qty text" name="qtybutton" value="1">
                        <div class="inc qtybutton"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></div></div>
                        <div class="single-product-cart btn-hover">
                            <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></a>
                        </div>
                        
                    </div>
                    <div class="product-details-meta">
                        <ul>
                            <li><span class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mã sản phẩm:</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ch-256xl</font></font></li>  
                            <li><span class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Size:</font></font></span>
                                <ul class="tag">
                                    @foreach ($KichThuoc as $kt)
                                    <li><a href="#"><font style="vertical-align: inherit;margin-right:10px"><font style="vertical-align: inherit;">{{ $kt->TenSize }}</font></font></a></li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="social-icon-style-4">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="description-review-area pb-85">
    <div class="container">
        <div class="description-review-topbar nav aos-init" data-aos="fade-up" data-aos-delay="200" role="tablist">
            <a class="active" data-bs-toggle="tab" href="#des-details1" aria-selected="true" role="tab"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sự miêu tả</font></font></a>
            <a data-bs-toggle="tab" href="#des-details2" class="" aria-selected="false" tabindex="-1" role="tab"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thông tin</font></font></a>
            <a data-bs-toggle="tab" href="#des-details3" class="" aria-selected="false" tabindex="-1" role="tab"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đánh giá</font></font></a>
        </div>
        <div class="tab-content">
            <div id="des-details1" class="tab-pane active" role="tabpanel">
                <div class="product-description-content text-center">
                    <p data-aos="fade-up" data-aos-delay="200" class="aos-init"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Điều quan trọng là phải tự chăm sóc nỗi đau, sau đó là sự trưởng thành của bệnh nhân, nhưng đồng thời cũng sẽ có rất nhiều công việc và nỗi đau. Hãy để tôi đi vào chi tiết nhỏ nhất, không ai tham gia vào bất kỳ loại công việc nào trừ khi anh ta thu được lợi ích nào đó từ nó. Đừng tức giận với nỗi đau trong sự khiển trách trong niềm vui mà anh ấy muốn được thoát khỏi nỗi đau với hy vọng rằng không có sự sinh sản.</font></font></p>
                    <p data-aos="fade-up" data-aos-delay="400" class="aos-init"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trừ khi họ bị dục vọng làm cho mù quáng, nếu không họ sẽ không bước ra; họ có lỗi nếu từ bỏ nhiệm vụ của mình và làm mềm lòng, tức là lao động của họ. Nhưng để nguồn gốc của tất cả sai lầm này có thể là niềm vui của những người buộc tội và nỗi đau của những người khen ngợi nó, tôi sẽ kể lại toàn bộ sự việc và chính những điều mà anh ta đưa ra.</font></font></p>
                </div>
            </div>
            <div id="des-details2" class="tab-pane" role="tabpanel">
                <div class="specification-wrap table-responsive">
                    <table>
                        <tbody>
                            <tr>
                                <td class="width1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thương hiệu</font></font></td>
                                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Airi, Thương hiệu, Draven, Skudmart, Yena</font></font></td>
                            </tr>
                            <tr>
                                <td class="width1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Màu sắc</font></font></td>
                                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xanh, Xám, Hồng</font></font></td>
                            </tr>
                            <tr>
                                <td class="width1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kích cỡ</font></font></td>
                                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">L, M, S, XL, XXL</font></font></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="des-details3" class="tab-pane" role="tabpanel">
                <div class="review-wrapper">
                    <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 đánh giá cho Áo cổ lọ cài nút tay áo</font></font></h3>
                    <div class="single-review">
                        <div class="review-img">
                            <img src="{{ asset('assets/images/product-details/review-1.png') }}" alt="">
                        </div>
                        <div class="review-content">
                            <div class="review-rating">
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                                <a href="#"><i class="ti-star"></i></a>
                            </div>
                            <h5><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">HasTech</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - 29 tháng 4 năm 2022</font></font></h5>
                            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cho đến khi lớp được tác giả nhắm mục tiêu. Tuy cần cúi chào một chút nhưng lại cần một nhân viên giỏi. Đầu tiên và quan trọng nhất, bóng rổ chỉ cần thành viên lâm sàng. Một số người muốn có một chiếc bao đựng tự do và xấu xí trên xe của hồ sô-cô-la</font></font></p>
                        </div>
                    </div>
                </div>
                <div class="ratting-form-wrapper">
                    <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một đánh giá</font></font></h3>
                    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Địa chỉ email của bạn sẽ không được công bố. Các trường bắt buộc được đánh dấu </font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></p>
                    <div class="your-rating-wrap">
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đánh giá của bạn</font></font></span>
                        <div class="your-rating">
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                        </div>
                    </div>
                    <div class="ratting-form">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="rating-form-style mb-15">
                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên </font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="rating-form-style mb-15">
                                        <label>Email <span>*</span></label>
                                        <input type="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="rating-form-style mb-15">
                                        <label>Your review <span>*</span></label>
                                        <textarea name="Your Review"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="save-email-option">
                                        <p><input type="checkbox"> <label>Save my name, email, and website in this browser for the next time I comment.</label></p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-submit">
                                        <input type="submit" value="Submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="related-product-area pb-95">
    <div class="container">
        <div class="section-title-2 st-border-center text-center mb-75 aos-init" data-aos="fade-up" data-aos-delay="200">
            <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sản phẩm liên quan</font></font></h2>
        </div>
        <div class="related-product-active swiper-container swiper-container-initialized swiper-container-horizontal">
            <div class="swiper-wrapper" id="swiper-wrapper-9310f862f3cde10482" aria-live="polite" style="transform: translate3d(-1200px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="1 / 13" style="width: 270px; margin-right: 30px;">
                    <div class="product-wrap aos-init" data-aos="fade-up" data-aos-delay="400">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="{{ asset('assets/images/product/product-2.png') }}" alt="">
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
                    <div class="product-wrap aos-init" data-aos="fade-up" data-aos-delay="600">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="{{ asset('assets/images/product/product-3.png') }}" alt="">
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
                    <div class="product-wrap aos-init" data-aos="fade-up" data-aos-delay="800">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="{{ asset('assets/images/product/product-4.png') }}" alt="">
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
                    <div class="product-wrap">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="{{ asset('assets/images/product/product-2.png') }}" alt="">
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
                    <div class="product-wrap aos-init" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="{{ asset('assets/images/product/product-1.png') }}" alt="">
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
                    <div class="product-wrap aos-init" data-aos="fade-up" data-aos-delay="400">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="{{ asset('assets/images/product/product-2.png') }}" alt="">
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
                    <div class="product-wrap aos-init" data-aos="fade-up" data-aos-delay="600">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="{{ asset('assets/images/product/product-3.png') }}" alt="">
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
                    <div class="product-wrap aos-init" data-aos="fade-up" data-aos-delay="800">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="{{ asset('assets/images/product/product-4.png') }}" alt="">
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
                    <div class="product-wrap">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="{{ asset('assets/images/product/product-2.png') }}" alt="">
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
                    <div class="product-wrap aos-init" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="{{ asset('assets/images/product/product-1.png') }}" alt="">
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
                    <div class="product-wrap aos-init" data-aos="fade-up" data-aos-delay="400">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="{{ asset('assets/images/product/product-2.png') }}" alt="">
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
                    <div class="product-wrap aos-init" data-aos="fade-up" data-aos-delay="600">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="{{ asset('assets/images/product/product-3.png') }}" alt="">
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
                    <div class="product-wrap aos-init" data-aos="fade-up" data-aos-delay="800">
                        <div class="product-img img-zoom mb-25">
                            <a href="product-details.html">
                                <img src="{{ asset('assets/images/product/product-4.png') }}" alt="">
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
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </div>
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    // Định nghĩa hàm changeProductColor trước
    function changeProductColor(maMau) {
        var maSP = '{{ $chiTietSanPham->MaSP }}'; // Lấy mã sản phẩm từ backend
        var maMau = $('.color-option.active').data('ma-mau') || '{{ $chiTietSanPham->MaMau }}';
        var maSize = '{{ $chiTietSanPham->MaSize }}'; // Lấy mã kích thước từ thuộc tính data-ma-size
        var url = 'http://127.0.0.1:8000/test_endpointa/' + maSP + '/' + maSize + '/' + maMau;
       
        console.log("masp", maSP);
        console.log("mamau", maMau);
        console.log("maSize", maSize);
        console.log('Request URL:', url); // Kiểm tra URL trong console

        $.ajax({
            url: url,
            method: 'GET',
            success: function(data) {
                console.log('AJAX Response:', data); // Kiểm tra dữ liệu phản hồi trong console
                //$('#product-image').attr('src', data.imageUrl); 
                //$('#product-name').text("12333"); 
                $('.soluongton').text('(' + data.SoLuongTonKho + ')'); 
                if(data.SoLuongTonKho == 0)
                    {
                        $('.single-product-cart').hide();
                    }   
                    else
                    {
                        $('.single-product-cart').show();
                    }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('AJAX Error:', textStatus, errorThrown);
                alert('Không thể thay đổi màu sắc sản phẩm.');
            }
        });
    }
     

    $('.color-option').on('click', function(e) {
        e.preventDefault(); // Ngăn chặn hành động mặc định của liên kết

        var maMau = $(this).data('ma-mau'); // Lấy mã màu từ thuộc tính data-ma-mau
        console.log('Mã màu:', maMau); // Kiểm tra giá trị trong console

        var maSP = '{{ $chiTietSanPham->MaSP }}'; // Lấy mã sản phẩm từ backend

        // Thay đổi màu sắc của sản phẩm
        var baseUrl = 'http://127.0.0.1:8000/product_detail/';
        var sizeCode = '{{ $chiTietSanPham->MaSize }}';
        var newUrl = baseUrl + maSP + '/' + sizeCode + '/' + maMau;
        console.log('Request URL1:', newUrl);
        window.history.pushState(null, '', newUrl);

        // Gọi hàm cập nhật kích thước
        updateSizes(maMau, maSP);

        // Gọi hàm để thay đổi màu sắc của sản phẩm
        changeProductColor(maMau);

    });

    // Sự kiện khi click vào tùy chọn kích thước
    $(document).on('click', '.size-option', function(e) {
        e.preventDefault(); // Ngăn chặn hành động mặc định của liên kết

        var maSize = $(this).data('ma-size'); // Lấy mã kích thước từ thuộc tính data-ma-size
        console.log('Mã kích thước:', maSize); // Kiểm tra giá trị trong console

        var maSP = '{{ $chiTietSanPham->MaSP }}'; // Lấy mã sản phẩm từ backend
        var maMau = $('.color-option.active').data('ma-mau') || '{{ $chiTietSanPham->MaMau }}';

        // Cập nhật lớp active cho kích thước được chọn
        $('.size-option').removeClass('active');
        $(this).addClass('active');

        // Thay đổi URL
        var baseUrl = 'http://127.0.0.1:8000/product_detail/';
        var newUrl = baseUrl + maSP + '/' + maSize + '/' + maMau;
        console.log('New URL after size change:', newUrl);
        window.history.pushState(null, '', newUrl);
        $.ajax({
            url: 'http://127.0.0.1:8000/test_endpointa/' + maSP + '/' + maSize + '/' + maMau,
            method: 'GET',
            success: function(data) {
                console.log('AJAX Response:', data); // Kiểm tra dữ liệu phản hồi trong console

                // Cập nhật số lượng tồn kho dựa trên dữ liệu phản hồi
                if (data.SoLuongTonKho !== undefined) {
                    $('.soluongton').text('(' + data.SoLuongTonKho + ')'); 
                    if(data.SoLuongTonKho == 0)
                    {
                        $('.single-product-cart').hide();
                    }   
                    else
                    {
                        $('.single-product-cart').show();
                    }
                } else {
                    console.error('Dữ liệu phản hồi không chứa thuộc tính SoLuongTonKho.');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('AJAX Error:', textStatus, errorThrown);
                alert('Không thể lấy thông tin số lượng tồn kho.');
            }
        });
    });

    function updateSizes(maMau, maSP) {
        var url = 'http://127.0.0.1:8000/get-sizes-by-color/' + maMau + '/' + maSP;

        console.log('Request URL for sizes:', url); // Kiểm tra URL trong console

        $.ajax({
            url: url,
            method: 'GET',
            success: function(data) {
                console.log('Sizes Response:', data); // Kiểm tra dữ liệu phản hồi trong console

                var sizeList = $('.product-details-meta .tag');
                sizeList.empty(); // Xóa danh sách kích thước hiện tại

                // Duyệt qua từng kích thước và thêm vào danh sách
                $.each(data, function(index, size) {
                    sizeList.append('<li><a href="#" class="size-option" data-ma-size="' + size.MaSize + '"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;margin-right:10px">' + size.TenSize + '</font></font></a></li>');
                });

                // Lấy kích thước đầu tiên và cập nhật URL
                if (data.length > 0) {
                    var firstSize = data[0].MaSize;
                    console.log('First Size:', firstSize);
                    
                    var newUrl = 'http://127.0.0.1:8000/product_detail/' + maSP + '/' + firstSize + '/' + maMau;
                    window.history.pushState(null, '', newUrl);

                    // Thay đổi màu sắc và kích thước của sản phẩm
                    changeProductColor(maMau, firstSize);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('AJAX Error:', textStatus, errorThrown);
                alert('Không thể cập nhật kích thước sản phẩm.');
            }
        });
    }
});

</script>
