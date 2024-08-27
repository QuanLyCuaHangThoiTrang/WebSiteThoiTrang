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
                        <a href="#"><img src="../assets/images/cart/cart-1.jpg" alt=""></a>
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
                        <a href="#"><img src="../assets/images/cart/cart-2.jpg" alt=""></a>
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
            <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đăng nhập - Đăng ký</font></font></h2>
            <ul>
                <li><a href="{{ url('/') }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trang chủ</font></font></a></li>
                <li><i class="ti-angle-right"></i></li>
                <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đăng nhập - Đăng ký</font></font></li>
            </ul>
        </div>
    </div>
    <div class="breadcrumb-img-1">
        <img src="../assets/images/banner/breadcrumb-1.png" alt="">
    </div>
    <div class="breadcrumb-img-2">
        <img src="../assets/images/banner/breadcrumb-2.png" alt="">
    </div>
</div>
<div class="login-register-area pb-100 pt-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 offset-lg-2">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav" role="tablist">
                        <a class="" data-bs-toggle="tab" href="#lg1" aria-selected="false" role="tab" tabindex="-1">
                            <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">đăng nhập</font></font></h4>
                        </a>
                        <a data-bs-toggle="tab" href="#lg2" aria-selected="true" role="tab" class="active">
                            <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">đăng ký</font></font></h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane" role="tabpanel">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="#" method="post">
                                        <input type="text" name="user-name" placeholder="Tên người dùng">
                                        <input type="password" name="user-password" placeholder="Mật khẩu">
                                        <div class="login-toggle-btn">
                                            <input type="checkbox">
                                            <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhớ tôi nhé</font></font></label>
                                            <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quên mật khẩu?</font></font></a>
                                        </div>
                                        <div class="button-box btn-hover">
                                            <button type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đăng nhập</font></font></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="lg2" class="tab-pane active show" role="tabpanel">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="#" method="post">
                                        <input type="text" name="user-name" placeholder="Tên người dùng">
                                        <input type="password" name="user-password" placeholder="Mật khẩu">
                                        <input name="user-email" placeholder="E-mail" type="email">
                                        <div class="button-box btn-hover">
                                            <button type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đăng ký</font></font></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection