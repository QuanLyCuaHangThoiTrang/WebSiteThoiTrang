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
              <a href="#"><img src="/assets/images/cart/cart-1.jpg" alt=""></a>
            </div>
            <div class="cart-title">
              <h4><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghế xích đu thời trang</font></font></a></h4>
              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 × $49,00</font></font></span>
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
              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 × $49,00</font></font></span>
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
        <h2 data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giới thiệu về chúng tôi</font></font></h2>
        <ul data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">
          <li><a href="{{ url('/') }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trang chủ</font></font></a></li>
          <li><i class="ti-angle-right"></i></li>
          <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giới thiệu về chúng tôi</font></font></li>
        </ul>
      </div>
    </div>
    <div class="breadcrumb-img-1 aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
      <img src="/assets/images/banner/breadcrumb-1.png" alt="">
    </div>
    <div class="breadcrumb-img-2 aos-init aos-animate" data-aos="fade-left" data-aos-delay="200">
      <img src="/assets/images/banner/breadcrumb-2.png" alt="">
    </div>
  </div>
  <div class="about-us-area pt-100 pb-100">
    <div class="container">
      <div class="row align-items-center flex-row-reverse">
        <div class="col-lg-6">
          <div class="about-content text-center">
            <h2 data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nội thất</font></font></h2>
            <h1 data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đồ nội thất tốt nhất</font></font></h1>
            <p data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
              Việc chăm sóc bệnh nhân là rất quan trọng, bệnh nhân sẽ được theo dõi, nhưng lần này tôi phải đối mặt với rất nhiều công việc và nỗi đau. Vì điều tối thiểu là không ai nên thực hiện bất kỳ loại công việc nào ngoại trừ việc anh ta có thể được hưởng lợi từ nó theo một cách nào đó. Duis hoặc Irure đau đớn khi bị quở trách
            </font></font></p>
            <p class="mrg-inc aos-init aos-animate" data-aos="fade-up" data-aos-delay="500"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
              Trong vui sướng, anh ta muốn trở thành một sợi tóc, và trong đau khổ, anh ta chạy trốn, và không có sự sinh ra. Trừ khi họ bị dục vọng làm cho mù quáng, nếu không họ sẽ không thoát ra; họ có lỗi nếu từ bỏ nhiệm vụ của mình và làm mềm lòng mình, tức là lao động.
            </font></font></p>
            <div class="btn-style-3 btn-hover aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
              <a class="btn border-radius-none" href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mua ngay</font></font></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-img aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
            <img src="/assets/images/banner/about-us.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="banner-area pb-100">
    <div class="bg-img bg-padding-2" style="background-image: url(/assets/images/bg/bg-2.png)">
      <div class="container">
        <div class="banner-content-5 banner-content-5-static">
          <span data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giảm giá lên đến 40%</font></font></span>
          <h1 data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate"><font style="vertical-align: inherit;"></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bộ ghế sofa
           </font><font style="vertical-align: inherit;">
            nội thất mới</font></font></h1>
          <div class="btn-style-3 btn-hover aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
            <a class="btn border-radius-none" href="product-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mua ngay</font></font></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="testimonial-area pb-100">
    <div class="container">
      <div class="section-title-2 st-border-center text-center mb-75 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
        <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lời chứng thực</font></font></h2>
      </div>
      <div class="testimonial-active swiper-container swiper-container-initialized swiper-container-horizontal">
        <div class="swiper-wrapper" id="swiper-wrapper-d488d71fb9e14ba10" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(-800px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="1 / 10" style="width: 370px; margin-right: 30px;">
            <div class="single-testimonial aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
              <div class="testimonial-img">
                <img src="/assets/images/testimonial/client-2.png" alt="">
              </div>
              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Bản thân cơn đau rất quan trọng, nó sẽ theo sự lớn lên của bệnh nhân, nhưng nó sẽ xảy ra cùng lúc với quá trình chuyển dạ và đau đớn.
              </font></font></p>
              <div class="testimonial-info">
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andi Lane</font></font></h4>
                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhà thiết kế.</font></font></span>
              </div>
            </div>
          </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="2 / 10" style="width: 370px; margin-right: 30px;">
            <div class="single-testimonial aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
              <div class="testimonial-img">
                <img src="/assets/images/testimonial/client-1.png" alt="">
              </div>
              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Bản thân cơn đau rất quan trọng, nó sẽ theo sự lớn lên của bệnh nhân, nhưng nó sẽ xảy ra cùng lúc với quá trình chuyển dạ và đau đớn.
              </font></font></p>
              <div class="testimonial-info">
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ted Ellison</font></font></h4>
                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhà phát triển.</font></font></span>
              </div>
            </div>
          </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="3" role="group" aria-label="3 / 10" style="width: 370px; margin-right: 30px;">
            <div class="single-testimonial">
              <div class="testimonial-img">
                <img src="/assets/images/testimonial/client-2.png" alt="">
              </div>
              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Bản thân cơn đau rất quan trọng, nó sẽ theo sự lớn lên của bệnh nhân, nhưng nó sẽ xảy ra cùng lúc với quá trình chuyển dạ và đau đớn.
              </font></font></p>
              <div class="testimonial-info">
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alia Pitts</font></font></h4>
                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách hàng.</font></font></span>
              </div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="4 / 10" style="width: 370px; margin-right: 30px;">
            <div class="single-testimonial aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
              <div class="testimonial-img">
                <img src="/assets/images/testimonial/client-1.png" alt="">
              </div>
              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Bản thân cơn đau rất quan trọng, nó sẽ theo sự lớn lên của bệnh nhân, nhưng nó sẽ xảy ra cùng lúc với quá trình chuyển dạ và đau đớn.
              </font></font></p>
              <div class="testimonial-info">
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Amrita Sha</font></font></h4>
                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách hàng của chúng tôi.</font></font></span>
              </div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" role="group" aria-label="5 / 10" style="width: 370px; margin-right: 30px;">
            <div class="single-testimonial aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
              <div class="testimonial-img">
                <img src="/assets/images/testimonial/client-2.png" alt="">
              </div>
              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Bản thân cơn đau rất quan trọng, nó sẽ theo sự lớn lên của bệnh nhân, nhưng nó sẽ xảy ra cùng lúc với quá trình chuyển dạ và đau đớn.
              </font></font></p>
              <div class="testimonial-info">
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andi Lane</font></font></h4>
                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhà thiết kế.</font></font></span>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="6 / 10" style="width: 370px; margin-right: 30px;">
            <div class="single-testimonial aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
              <div class="testimonial-img">
                <img src="/assets/images/testimonial/client-1.png" alt="">
              </div>
              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Bản thân cơn đau rất quan trọng, nó sẽ theo sự lớn lên của bệnh nhân, nhưng nó sẽ xảy ra cùng lúc với quá trình chuyển dạ và đau đớn.
              </font></font></p>
              <div class="testimonial-info">
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ted Ellison</font></font></h4>
                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhà phát triển.</font></font></span>
              </div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="3" role="group" aria-label="7 / 10" style="width: 370px; margin-right: 30px;">
            <div class="single-testimonial">
              <div class="testimonial-img">
                <img src="/assets/images/testimonial/client-2.png" alt="">
              </div>
              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Bản thân cơn đau rất quan trọng, nó sẽ theo sự lớn lên của bệnh nhân, nhưng nó sẽ xảy ra cùng lúc với quá trình chuyển dạ và đau đớn.
              </font></font></p>
              <div class="testimonial-info">
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alia Pitts</font></font></h4>
                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách hàng.</font></font></span>
              </div>
            </div>
          </div>
        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="8 / 10" style="width: 370px; margin-right: 30px;">
            <div class="single-testimonial aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
              <div class="testimonial-img">
                <img src="/assets/images/testimonial/client-1.png" alt="">
              </div>
              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Bản thân cơn đau rất quan trọng, nó sẽ theo sự lớn lên của bệnh nhân, nhưng nó sẽ xảy ra cùng lúc với quá trình chuyển dạ và đau đớn.
              </font></font></p>
              <div class="testimonial-info">
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Amrita Sha</font></font></h4>
                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách hàng của chúng tôi.</font></font></span>
              </div>
            </div>
          </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="9 / 10" style="width: 370px; margin-right: 30px;">
            <div class="single-testimonial aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
              <div class="testimonial-img">
                <img src="/assets/images/testimonial/client-2.png" alt="">
              </div>
              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Bản thân cơn đau rất quan trọng, nó sẽ theo sự lớn lên của bệnh nhân, nhưng nó sẽ xảy ra cùng lúc với quá trình chuyển dạ và đau đớn.
              </font></font></p>
              <div class="testimonial-info">
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andi Lane</font></font></h4>
                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhà thiết kế.</font></font></span>
              </div>
            </div>
          </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="10 / 10" style="width: 370px; margin-right: 30px;">
            <div class="single-testimonial aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
              <div class="testimonial-img">
                <img src="/assets/images/testimonial/client-1.png" alt="">
              </div>
              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Bản thân cơn đau rất quan trọng, nó sẽ theo sự lớn lên của bệnh nhân, nhưng nó sẽ xảy ra cùng lúc với quá trình chuyển dạ và đau đớn.
              </font></font></p>
              <div class="testimonial-info">
                <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ted Ellison</font></font></h4>
                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhà phát triển.</font></font></span>
              </div>
            </div>
          </div></div>
      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </div>
  </div>
  <div class="funfact-area bg-img pt-100 pb-70" style="background-image: url(/assets/images/bg/bg-4.png)">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
          <div class="single-funfact text-center mb-30 aos-init" data-aos="fade-up" data-aos-delay="200">
            <div class="funfact-img">
              <img src="/assets/images/icon-img/client.png" alt="">
            </div>
            <h2 class="count"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">120</font></font></h2>
            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách hàng hài lòng</font></font></span>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
          <div class="single-funfact text-center mb-30 aos-init" data-aos="fade-up" data-aos-delay="400">
            <div class="funfact-img">
              <img src="/assets/images/icon-img/award.png" alt="">
            </div>
            <h2 class="count"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">90</font></font></h2>
            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giải thưởng giành được</font></font></span>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
          <div class="single-funfact text-center mb-30 aos-init" data-aos="fade-up" data-aos-delay="600">
            <div class="funfact-img">
              <img src="/assets/images/icon-img/item.png" alt="">
            </div>
            <h2 class="count"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">230</font></font></h2>
            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Các mặt hàng Totel</font></font></span>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
          <div class="single-funfact text-center mb-30 mrgn-none aos-init" data-aos="fade-up" data-aos-delay="800">
            <div class="funfact-img">
              <img src="/assets/images/icon-img/cup.png" alt="">
            </div>
            <h2 class="count"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">350</font></font></h2>
            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tách cà phê</font></font></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="team-area pt-100 pb-70">
    <div class="container">
      <div class="section-title-2 st-border-center text-center mb-75 aos-init" data-aos="fade-up" data-aos-delay="200">
        <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhân viên của chúng tôi</font></font></h2>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
          <div class="single-team-wrap text-center mb-30 aos-init" data-aos="fade-up" data-aos-delay="200">
            <img src="/assets/images/team/team-1.png" alt="">
            <div class="team-info-position">
              <div class="team-info">
                <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kari Rasmus</font></font></h3>
                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhân viên bán hàng</font></font></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
          <div class="single-team-wrap text-center mb-30 aos-init" data-aos="fade-up" data-aos-delay="400">
            <img src="/assets/images/team/team-2.png" alt="">
            <div class="team-info-position">
              <div class="team-info">
                <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kari Rasmus</font></font></h3>
                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhân viên bán hàng</font></font></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
          <div class="single-team-wrap text-center mb-30 aos-init" data-aos="fade-up" data-aos-delay="600">
            <img src="/assets/images/team/team-3.png" alt="">
            <div class="team-info-position">
              <div class="team-info">
                <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kari Rasmus</font></font></h3>
                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhân viên bán hàng</font></font></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="subscribe-area pb-100">
    <div class="container">
      <div class="section-title-3 text-center mb-55 aos-init" data-aos="fade-up" data-aos-delay="200">
        <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hãy tham gia cùng chúng tôi!</font></font></h2>
        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
          Việc chăm sóc bệnh nhân là rất quan trọng nhưng sự phát triển của bệnh nhân sẽ được theo dõi giống như quá trình chuyển dạ.
        </font></font></p>
      </div>
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div id="mc_embed_signup" class="subscribe-form aos-init" data-aos="fade-up" data-aos-delay="400">
            <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
              <div id="mc_embed_signup_scroll" class="mc-form">
                <input class="email" type="email" required="" placeholder="Địa chỉ email…" name="EMAIL" value="">
                <div class="mc-news" aria-hidden="true">
                  <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                </div>
                <div class="clear">
                  <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Đăng ký ngay"></font></font>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection