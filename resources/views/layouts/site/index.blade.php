<!doctype html>
<html lang="ar">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    @include('layouts.site.css')
</head>

<body>

  <!-- ================ spinner ================= -->
  <div class="spinner">
    <div class="loader">
      <div class="rect1"></div>
      <div class="rect2"></div>
      <div class="rect3"></div>
      <div class="rect4"></div>
      <div class="rect5"></div>
    </div>
  </div>
  <!-- ================ spinner ================= -->



  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////   nav-bar     //////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
@if (auth()->user())
    

 @include('layouts.site.Header')

@endif


  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////          //////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->

  @yield('content')


  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////          //////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->

  <!-- <section class="top-auction pt-5">
    <div class="head d-flex align-items-center justify-content-center">
      <div class="contents">
        <h3> أبرز المزادات </h3>
        <p class="text-center py-3">أكثر المزادات تفاعلا   </p>
      </div>
    </div>

  </section> -->



  <!--============= Upcoming Auction Section Starts Here =============-->
  <section class="upcoming-auction padding-bottom padding-top">


    <div class="container">
      <div class="auction-wrapper-7  m--15">
        <div class="auction-item-7 time">
          <div class="auction-inner row">
            <a href="#0" class="upcoming-badge-2" title="Upcoming Auction">
              <i class="fad fa-gavel"></i>
            </a>
            <div class="auction-thumb bg_img" style="background-image: url(img/TopSales/car.jpg); background-size: cover;" data-background="img/TopSales/car.jpg" >
              <img class="d-lg-none" src="{{ asset('') }}"img/TopSales/upcoming-9.png" alt="upcoming">
              <a href="#0" class="rating"><i class="far fa-star"></i></a>
            </div>
            <div class="auction-content">
              <div class="title-area">
                <h6 class="title">
                  <a href="./product-details.html">سيارة أثرية موديل 1930</a>
                </h6>
                <!-- <div class="list-area">
                  <span class="list-item">
                    <span class="list-id">Listing ID</span>14033488
                  </span>
                  <span class="list-item">
                    <span class="list-id">Item #</span>0900-027867
                  </span>
                </div> -->
                <!-- <div class="item-feature">
                  <span>2 Beds</span>
                  <span>2 Baths</span>
                  <span>1,215 Sq. Ft.</span>
                </div> -->

                <p>سيارة من فولكس فاجن موديل 1930 كانت ملك الملك أحمد

                </p>
              </div>
              <div class="bid-area">
                <div class="bid-inner row">
                  <div class="bid-amount">
                    <div class="icon">
                      <i class="fad fa-gavel"></i>
                    </div>
                    <div class="amount-content">
                      <div class="current">سعر البدأ</div>
                      <div class="amount">$876.00</div>
                    </div>
                  </div>
                  <div class="bid-amount">
                    <div class="icon">
                      <i class="fas fa-sack-dollar"></i>
                    </div>
                    <div class="amount-content">
                      <div class="current">السعر الحالي</div>
                      <div class="amount">$5,00.00</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bid-count-area">
                <span class="item">
                  <span class="left">عدد المزايدين</span>97 شخص
                </span>
                <!-- <span class="item">
                  <span class="left">Last Bid </span>7 mins ago
                </span> -->
              </div>
            </div>
            <div class="auction-bidding">
              <span class="bid-title"> باق من الزمن</span>
              <p id="count-down" class="mt-2  "></p>

              <div class="bid-incr">
                <span class="title">أخر زيادة</span>
                <h4>$400</h4>
              </div>
              <a href="aucation-details.blade.php" class="custom-button">تفاصيل المزاد</a>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>
  <!--============= Upcoming Auction Section Ends Here =============-->

  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////          //////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->

  <section class="donations-area pt-5 pb-4">
    <div class="container">
      <div class="section-title">
        <span class="sub-title">مزادات خيرية</span>
        <h2 class="py-3">كن سببا في جعل شخصا يبتسم</h2>
        <p>مزادات خيرية لصالح الخير , ساهم بأشيائك القيمة في الخير</p>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-4">
          <div class="donation-item">
            <div class="img">
              <img src="{{ asset('assets/img/donation1.jpg') }}" alt="Donation">
              <a class="common-btn" href="aucation-details.blade.php">تفاصيل المزاد</a>
            </div>
            <div class="inner">
              <div class="top">
                <a class="tags" href="#"># مؤسسة مجدي يعقوب</a>
                <h3>
                  <a href="#">مزاد لصالح أطفال الصعيد</a>
                </h3>
                <p>مزاد على ساعة رولكس قديمة موديل 1960
                  بالفاتورة
                </p>
              </div>
              <div class="bottom">
                <div class="skill">
                  <div class="skill-bar skill1 wow fadeInRightBig">
                    <span class="skill-count1">85%</span>
                  </div>
                </div>
                <ul>
                  <li> أقل مبلغ : $ 5,500 </li>
                  <li>الهدف : $ 7,000.00</li>
                </ul>
                <h4> <span> 60 شخص </span> قاموا بالمزايدة </h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="donation-item">
            <div class="img">
              <img src="{{ asset('assets/img/donation2.jpg') }}" alt="Donation">
              <a class="common-btn" href="aucation-details.blade.php">تفاصيل المزاد</a>
            </div>
            <div class="inner">
              <div class="top">
                <a class="tags" href="#"># مؤسسة مجدي يعقوب</a>
                <h3>
                  <a href="#">مزاد لصالح أطفال الصعيد</a>
                </h3>
                <p>مزاد على ساعة رولكس قديمة موديل 1960
                  بالفاتورة
                </p>
              </div>
              <div class="bottom">
                <div class="skill">
                  <div class="skill-bar skill2 wow fadeInRightBig">
                    <span class="skill-count2">95%</span>
                  </div>
                </div>
                <ul>
                  <li> أقل مبلغ : $ 5,500 </li>
                  <li>الهدف : $ 7,000.00</li>
                </ul>
                <h4> <span> 60 شخص </span> قاموا بالمزايدة </h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="donation-item">
            <div class="img">
              <img src="{{ asset('assets/img/donation3.jpg') }}" alt="Donation">
              <a class="common-btn" href="aucation-details.blade.php">تفاصيل المزاد</a>
            </div>
            <div class="inner">
              <div class="top">
                <a class="tags" href="#"># مؤسسة مجدي يعقوب</a>
                <h3>
                  <a href="#">مزاد لصالح أطفال الصعيد</a>
                </h3>
                <p>مزاد على ساعة رولكس قديمة موديل 1960
                  بالفاتورة
                </p>
              </div>
              <div class="bottom">
                <div class="skill">
                  <div class="skill-bar skill3 wow fadeInRightBig">
                    <span class="skill-count3">90%</span>
                  </div>
                </div>
                <ul>
                  <li> أقل مبلغ : $ 5,500 </li>
                  <li>الهدف : $ 7,000.00</li>
                </ul>
                <h4> <span> 60 شخص </span> قاموا بالمزايدة </h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="donation-item">
            <div class="img">
              <img src="{{ asset('assets/img/donation4.jpg') }}" alt="Donation">
              <a class="common-btn" href="aucation-details.blade.php">تفاصيل المزاد</a>
            </div>
            <div class="inner">
              <div class="top">
                <a class="tags" href="#"># مؤسسة مجدي يعقوب</a>
                <h3>
                  <a href="#">مزاد لصالح أطفال الصعيد</a>
                </h3>
                <p>مزاد على ساعة رولكس قديمة موديل 1960
                  بالفاتورة
                </p>
              </div>
              <div class="bottom">
                <div class="skill">
                  <div class="skill-bar skill4 wow fadeInRightBig">
                    <span class="skill-count4">80%</span>
                  </div>
                </div>
                <ul>
                  <li> أقل مبلغ : $ 5,500 </li>
                  <li>الهدف : $ 7,000.00</li>
                </ul>
                <h4> <span> 60 شخص </span> قاموا بالمزايدة </h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="donation-item">
            <div class="img">
              <img src="{{ asset('assets/img/donation4.jpg') }}" alt="Donation">
              <a class="common-btn" href="aucation-details.blade.php">تفاصيل المزاد</a>
            </div>
            <div class="inner">
              <div class="top">
                <a class="tags" href="#"># مؤسسة مجدي يعقوب</a>
                <h3>
                  <a href="#">مزاد لصالح أطفال الصعيد</a>
                </h3>
                <p>مزاد على ساعة رولكس قديمة موديل 1960
                  بالفاتورة
                </p>
              </div>
              <div class="bottom">
                <div class="skill">
                  <div class="skill-bar skill5 wow fadeInRightBig">
                    <span class="skill-count5">75%</span>
                  </div>
                </div>
                <ul>
                  <li> أقل مبلغ : $ 5,500 </li>
                  <li>الهدف : $ 7,000.00</li>
                </ul>
                <h4> <span> 60 شخص </span> قاموا بالمزايدة </h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="donation-item">
            <div class="img">
              <img src="{{ asset('assets/img/donation6.jpg') }}" alt="Donation">
              <a class="common-btn" href="aucation-details.blade.php">تفاصيل المزاد</a>
            </div>
            <div class="inner">
              <div class="top">
                <a class="tags" href="#"># مؤسسة مجدي يعقوب</a>
                <h3>
                  <a href="#">مزاد لصالح أطفال الصعيد</a>
                </h3>
                <p>مزاد على ساعة رولكس قديمة موديل 1960
                  بالفاتورة
                </p>
              </div>
              <div class="bottom">
                <div class="skill">
                  <div class="skill-bar skill6 wow fadeInRightBig">
                    <span class="skill-count6">70%</span>
                  </div>
                </div>
                <ul>
                  <li> أقل مبلغ : $ 5,500 </li>
                  <li>الهدف : $ 7,000.00</li>
                </ul>
                <h4> <span> 60 شخص </span> قاموا بالمزايدة </h4>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="w-100 py-3 d-flex align-items-center justify-content-center">
        <a href="mazadat-page.html" class="see-all"> كل المزادات </a>
      </div>

    </div>
  </section>


  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////          //////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->

  <!-- Start Counter Area -->
  <section class="counter-area py-5" style="direction: ltr;">

    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6" data-aos="zoom-in" data-aos-duration="1100">
          <div class="single-counter">
            <h2>
              <span class="odometer" data-count="420">00</span>
            </h2>

            <p>جمعية خيرية</p>

            <div class="counter-shape">
              <!-- <img src="{{ asset('') }}"img/counter-shape.png" alt="Image"> -->
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6" data-aos="zoom-in" data-aos-duration="1100">
          <div class="single-counter">
            <h2>
              <span class="odometer" data-count="1000">00</span>
              <span class="target">+</span>
            </h2>

            <p>أشياء ثمينة</p>

            <div class="counter-shape">
              <!-- <img src="{{ asset('') }}"img/counter-shape.png" alt="Image"> -->
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6" data-aos="zoom-in" data-aos-duration="1100">
          <div class="single-counter">
            <h2>
              <span class="odometer" data-count="654">00</span>
            </h2>

            <p>مزايد </p>

            <div class="counter-shape">
              <!-- <img src="{{ asset('') }}"img/counter-shape.png" alt="Image"> -->
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6" data-aos="zoom-in" data-aos-duration="1100">
          <div class="single-counter">
            <h2>
              <span class="odometer" data-count="22">00</span>
              <!-- <span class="target">%</span> -->
            </h2>

            <p>مزاد </p>

            <div class="counter-shape">
              <!-- <img src="{{ asset('') }}"img/counter-shape.png" alt="Image"> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Counter Area -->



  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////          //////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->






  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////          //////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <section class="events-sec">
    <div class="event-area pt-5 pb-4">
      <div class="container">
        <div class="section-title">
          <span class="sub-title">مزاد الخير </span>
          <h2>أخر الأخبار</h2>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="event-item">
              <img src="{{ asset('assets/img/watch.jpg') }}" alt="Event">
              <div class="inner">
                <h4>04 <span>مارس</span></h4>
                <h3>
                  <a href="aucation-details.blade.php">مزاد على ساعة رولكس </a>
                </h3>
                <ul>
                  <li>
                    <i class="fal fa-stopwatch"></i>
                    <span>2.00pm - 5.00pm</span>
                  </li>
                  <!-- <li>
                    <i class="fal fa-map-marker-check"></i>
                    <span>Australia</span>
                  </li> -->
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="event-item">
              <img src="{{ asset('assets/img/ring.jpg') }}" alt="Event">
              <div class="inner">
                <h4>05 <span>مارس</span></h4>
                <h3>
                  <a href="aucation-details.blade.php">مزاد على ساعة رولكس </a>
                </h3>
                <ul>
                  <li>
                    <i class="fal fa-stopwatch"></i>
                    <span>1.00pm - 2.00pm</span>
                  </li>
                  <!-- <li>
                    <i class="fal fa-map-marker-check"></i>
                    <span>Canada</span>
                  </li> -->
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="event-item-right">
              <h4>06 <span>مارس</span></h4>
              <h3>
                <a href="aucation-details.blade.php">مزاد على سيف الملك سمير  </a>
              </h3>
              <ul>
                <li>
                  <i class="fal fa-stopwatch"></i>
                  <span>10.00am - 11.00am</span>
                </li>
                <!-- <li>
                  <i class="fal fa-map-marker-check"></i>
                  <span>UK</span>
                </li> -->
              </ul>
            </div>
            <div class="event-item-right">
              <h4>07 <span>مارس</span></h4>
              <h3>
                <a href="aucation-details.blade.php">مزاد على خاتم أثري  </a>
              </h3>
              <ul>
                <li>
                  <i class="fal fa-stopwatch"></i>
                  <span> 05 / 12   -   05 / 3</span>
                </li>
                <!-- <li>
                  <i class="fal fa-map-marker-check"></i>
                  <span>مصر</span>
                </li> -->
              </ul>
            </div>
            <div class="event-item-right">
              <h4>08 <span>مارس</span></h4>
              <h3>
                <a href="aucation-details.blade.php">مزاد على سيارة فولفو 1950</a>
              </h3>
              <ul>
                <li>
                  <i class="fal fa-stopwatch"></i>
                  <span> 05 / 12   -   05 / 3</span>
                </li>
                <!-- <li>
                  <i class="fal fa-map-marker-check"></i>
                  <span>مصر</span>
                </li> -->
              </ul>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="event-item">
              <img src="{{ asset('assets/img/car.jpg') }}" alt="Event">
              <div class="inner">
                <h4>10 <span>مارس</span></h4>
                <h3>
                  <a href="aucation-details.blade.php">مزاد على سيف الملك سمير  </a>
                </h3>
                <ul>
                  <li>
                    <i class="fal fa-stopwatch"></i>
                    <span>05 / 12 &nbsp; - &nbsp 05 / 3</span>
                  </li>
                  <!-- <li>
                    <i class="fal fa-map-marker-check"></i>
                    <span>Egypt</span>
                  </li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////          //////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->


  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////          //////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->


  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////          //////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <section class="CarsSlider">
    <div class="container">
      <div class=" Title ">
        <h2>الجمعيات</h2>
      </div>
      <div class="swiper-container cars">
        <div class="swiper-wrapper">
          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/1.png') }}"></a>
          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/2.png') }}"></a>
          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/3.png') }}"></a>
          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/4.png') }}"></a>
          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/5.png') }}"></a>
          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/1.png') }}"></a>
          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/2.png') }}"></a>
          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/3.png') }}"></a>
          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/4.png') }}"></a>
          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/5.png') }}"></a>
          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/1.png') }}"></a>
          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/2.png') }}"></a>
          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/3.png') }}"></a>
          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/4.png') }}"></a>
          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/5.png') }}"></a>
          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/1.png') }}"></a>
          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/1.png') }}"></a>

          <!-- <a href="#!" class="swiper-slide "><img src="img/cars/dodge-icon.jpg"></a> -->
        </div>
        <!-- Add Arrows -->
        <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> -->
      </div>
    </div>
  </section>

  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////  footer  //////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  @include('layouts.site.Footer')
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--/////////////////////////////JavaScript/////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
@include('layouts.site.js')

</body>

</html>
