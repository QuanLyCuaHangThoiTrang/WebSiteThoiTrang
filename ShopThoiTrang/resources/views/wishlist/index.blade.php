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
            <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Danh sách mong muốn</font></font></h2>
            <ul>
                <li><a href="{{ url('/') }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trang chủ</font></font></a></li>
                <li><i class="ti-angle-right"></i></li>
                <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Danh sách mong muốn</font></font></li>
            </ul>
        </div>
    </div>
    <div class="breadcrumb-img-1">
        <img src="assets/images/banner/breadcrumb-1.png" alt="">
    </div>
    <div class="breadcrumb-img-2">
        <img src="assets/images/banner/breadcrumb-2.png" alt="">
    </div>
</div>
<div class="wishlist-area pb-100 pt-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="wishlist-table-content">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="width-remove"></th>
                                        <th class="width-thumbnail"></th>
                                        <th class="width-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sản phẩm</font></font></th>
                                        <th class="width-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đơn giá</font></font></th>
                                        <th class="width-stock-status"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tình trạng kho</font></font></th>
                                        <th class="width-wishlist-cart"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-remove"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></a></td>
                                        <td class="product-thumbnail">
                                            <a href="product-details.html"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                                        </td>
                                        <td class="product-name">
                                            <h5><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế xích đu thời trang</font></font></a></h5>
                                        </td>
                                        <td class="product-wishlist-price"><span class="amount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">120,00 đô la</font></font></span></td>
                                        <td class="stock-status">
                                            <span><i class="las la-check"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Còn hàng</font></font></span>
                                        </td>
                                        <td class="wishlist-cart btn-hover"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></a></td>
                                    </tr>
                                    <tr>
                                        <td class="product-remove"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></a></td>
                                        <td class="product-thumbnail">
                                            <a href="product-details.html"><img src="assets/images/cart/cart-2.jpg" alt=""></a>
                                        </td>
                                        <td class="product-name">
                                            <h5><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế thư giãn hiện đại</font></font></a></h5>
                                        </td>
                                        <td class="product-wishlist-price"><span class="amount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">120,00 đô la</font></font></span></td>
                                        <td class="stock-status">
                                            <span><i class="las la-check"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Còn hàng</font></font></span>
                                        </td>
                                        <td class="wishlist-cart btn-hover"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></a></td>
                                    </tr>
                                    <tr>
                                        <td class="product-remove"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></a></td>
                                        <td class="product-thumbnail">
                                            <a href="product-details.html"><img src="assets/images/cart/cart-3.jpg" alt=""></a>
                                        </td>
                                        <td class="product-name">
                                            <h5><a href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế xoay hiện đại</font></font></a></h5>
                                        </td>
                                        <td class="product-wishlist-price"><span class="amount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">120,00 đô la</font></font></span></td>
                                        <td class="stock-status">
                                            <span><i class="las la-check"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Còn hàng</font></font></span>
                                        </td>
                                        <td class="wishlist-cart btn-hover"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection