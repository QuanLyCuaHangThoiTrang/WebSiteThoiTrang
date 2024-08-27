<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shop thời trang</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="SayyamCode eCommerce Bootstrap 5 Template is a stunning eCommerce website template that is the best choice for any online store.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="#" />

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="sayyamcode eCommerce HTML Template" />
    <meta property="og:url" content="#" />
    <meta property="og:site_name" content="sayyamcode eCommerce HTML Template" />
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#" />
    <meta property="og:description" content="SayyamCode eCommerce Bootstrap 5 Template is a stunning eCommerce website template that is the best choice for any online store." />
    <!-- Add site Favicon -->
    <link rel="icon" href="{{ asset('assets/images/favicon/cropped-favicon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('assets/images/favicon/cropped-favicon-192x192.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon/cropped-favicon-180x180.png') }}" />
    <meta name="msapplication-TileImage" content="{{ asset('assets/images/favicon/cropped-favicon-270x270.png') }}" />


    <!-- All CSS is here
	============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/pe-icon-7-stroke.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/easyzoom.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slinky.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>
<body>
    <div class="main-wrapper main-wrapper-2">
        <!-- header -->
        @include('layouts.header')

        <!-- mini cart start -->
        @yield('content')
        
        <!-- Footer -->
        @include('layouts.footer')
        <!-- Product Modal start -->
        <div class="modal fade quickview-modal-style" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"><i class=" ti-close "></i></a>
                    </div>
                    <div class="modal-body">
                        <div class="row gx-0">
                            <div class="col-lg-5 col-md-5 col-12">
                                <div class="modal-img-wrap">
                                    <img src="../assets/images/product/quickview.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-12">
                                <div class="product-details-content quickview-content">
                                    <h2>New Modern Chair</h2>
                                    <div class="product-details-price">
                                        <span class="old-price">$25.89 </span>
                                        <span class="new-price">$20.25</span>
                                    </div>
                                    <div class="product-details-review">
                                        <div class="product-rating">
                                            <i class=" ti-star"></i>
                                            <i class=" ti-star"></i>
                                            <i class=" ti-star"></i>
                                            <i class=" ti-star"></i>
                                            <i class=" ti-star"></i>
                                        </div>
                                        <span>( 1 Customer Review )</span>
                                    </div>
                                    <div class="product-color product-color-active product-details-color">
                                        <span>Color :</span>
                                        <ul>
                                            <li><a title="Pink" class="pink" href="#">pink</a></li>
                                            <li><a title="Yellow" class="active yellow" href="#">yellow</a></li>
                                            <li><a title="Purple" class="purple" href="#">purple</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare tincidunt neque vel semper. Cras placerat enim sed nisl mattis eleifend.</p>
                                    <div class="product-details-action-wrap">
                                        <div class="product-quality">
                                            <input class="cart-plus-minus-box input-text qty text" name="qtybutton" value="1">
                                        </div>
                                        <div class="single-product-cart btn-hover">
                                            <a href="#">Add to cart</a>
                                        </div>
                                        <div class="single-product-wishlist">
                                            <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="single-product-compare">
                                            <a title="Compare" href="#"><i class="pe-7s-shuffle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Modal end -->
        <!-- Mobile Menu start -->
        <div class="off-canvas-active">
            <a class="off-canvas-close"><i class=" ti-close "></i></a>
            <div class="off-canvas-wrap">
                <div class="welcome-text off-canvas-margin-padding">
                    <p>Chào mừng bạn đến với shop thời trang! </p>
                </div>
                <div class="mobile-menu-wrap off-canvas-margin-padding-2">
                    <div id="mobile-menu" class="slinky-mobile-menu text-left">
                        <ul>
                            <li>
                                <a href="{{ url('/') }}">HOME</a>                            
                            </li>
                            <li>
                                <a href="{{ url('/shop') }}">SHOP</a>                              
                            </li>                       
                            <li>
                                <a href="{{ url('/about') }}">ABOUT US</a>
                            </li>
                            <li>
                                <a href="{{ url('/contact') }}">CONTACT US</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="language-currency-wrap language-currency-wrap-modify">
                    <div class="currency-wrap border-style">
                        <a class="currency-active" href="#">$ Dollar (US) <i class=" ti-angle-down "></i></a>
                        <div class="currency-dropdown">
                            <ul>
                                <li><a href="#">Taka (BDT) </a></li>
                                <li><a href="#">Riyal (SAR) </a></li>
                                <li><a href="#">Rupee (INR) </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="language-wrap">
                        <a class="language-active" href="#"><img src="../assets/images/icon-img/flag.png" alt=""> English <i class=" ti-angle-down "></i></a>
                        <div class="language-dropdown">
                            <ul>
                                <li><a href="#"><img src="../assets/images/icon-img/flag.png" alt="">English </a></li>
                                <li><a href="#"><img src="../assets/images/icon-img/spanish.png" alt="">Spanish</a></li>
                                <li><a href="#"><img src="../assets/images/icon-img/arabic.png" alt="">Arabic </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- All JS is here -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.11.7.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
<script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/aos.js') }}"></script>
<script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery-ui-touch-punch.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.counterup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/easyzoom.js') }}"></script>
<script src="{{ asset('assets/js/plugins/slinky.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/ajax-mail.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>