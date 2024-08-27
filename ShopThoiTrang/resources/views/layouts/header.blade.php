<header class="header-area header-responsive-padding header-height-1">
    <div class="header-top d-none d-lg-block bg-gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-6">
                    <div class="welcome-text">
                        <p>Chào mừng bạn đén với cửa hàng thời trang HUIT! </p>
                    </div>
                </div>
                <div class="col-lg-6 col-6">
                    <div class="language-currency-wrap">
                        <div class="currency-wrap border-style">
                            <a class="currency-active" href="#">vnđ VietNam (VN) </a>                           
                        </div>
                        <div class="language-wrap">
                            <a class="language-active" href="#"><img src="../assets/images/icon-img/flag.png" alt=""> VietNamMe <i class=" ti-angle-down "></i></a>
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
    </div>
    <div class="header-bottom sticky-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block d-flex justify-content-center">
                    <div class="main-menu text-center">
                        <nav>
                            <ul>
                                <li><a href="{{ url('/') }}">TRANG CHỦ</a>                                  
                                </li>
                                <li><a href="{{ url('/shop') }}">CỬA HÀNG</a>                                  
                                </li>                                                             
                                <li><a href="{{ url('/about') }}">VỀ CHÚNG TÔI</a></li>
                                <li><a href="{{ url('/contact') }}">LIÊN HỆ</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="header-action-wrap">
                        <div class="header-action-style header-search-1">
                            <a class="search-toggle" href="#">
                                <i class="pe-7s-search s-open"></i>
                                <i class="pe-7s-close s-close"></i>
                            </a>
                            <div class="search-wrap-1">
                                <form action="#">
                                    <input placeholder="Search products…" type="text">
                                    <button class="button-search"><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="header-action-style">
                            <a title="Login Register" href="login-register.html"><i class="pe-7s-user"></i></a>
                        </div>
                        <div class="header-action-style">
                            <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                        </div>
                        <div class="header-action-style header-action-cart">
                            <a class="" href="{{ url('/cart') }}"><i class="pe-7s-shopbag"></i>
                                <span class="product-count bg-black">01</span>
                            </a>
                        </div>
                        <div class="header-action-style d-block d-lg-none">
                            <a class="mobile-menu-active-button" href="#"><i class="pe-7s-menu"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>