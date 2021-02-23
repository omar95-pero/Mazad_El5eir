<!doctype html>
<html lang="ar">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>مزاد الخير</title>
  <!-- icon -->
  <link rel="icon" type="image/x-icon" href="#">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-rtl.css') }}">
  <!-- MDBootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/css/mdb.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
  <!-- Font Awesome Stars-->
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-stars.css') }}">
  <!-- odometer -->
  <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
  <!-- flatIcon -->
  <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
  <!-- dropify -->
  <link rel="stylesheet" href="{{ asset('assets/css/dropify.min.css') }}">
  <!-- swiper -->
  <link rel="stylesheet" href="{{ asset('assets/css/swiper.css') }}">
  <!-- select2 -->
  <link rel="stylesheet" href="{{ asset('assets/css/select2.css') }}">
  <!-- animate -->
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
  <!-- img gallery -->
  <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
  <!-- Custom style  -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <!-- fonts  -->
  <link href="https://fonts.تصفحogleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
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

@include('layouts.site.Header')
  <div id="Header" class="main-header"></div>


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


  <section class="donations-area margin-top">

    <div class="title-top mb-5 d-flex align-items-center justify-content-start">
     <div class="contents d-flex align-items-center mr-4 justify-content-center">
        <a href="{{ route('index') }}"> <i class="fad fa-home pl-2"></i> الرئيسية </a>
      <span> \ </span>
      <h3 class="font-weight-bold"> جميع المزادات  </h3>

     </div>

    </div>
    <div class="container">

      <div class="row">
        @foreach ($auctions as $auction)
            
        <div class="col-sm-6 col-lg-4">
          <div class="donation-item">
            <div class="img">
              <img src="{{ get_file($auction->image) }}" alt="Donation">
             
                  
              <a class="common-btn" href="{{ route('auction.details',$auction->id) }}">تفاصيل المزاد</a>

            </div>
            <div class="inner">
              <div class="top">
                <a class="tags" href="#"> {{ $auction->charity->name }}</a>
                <h3>
                  <a href="#">{{ $auction->item_detailes }}</a>
                </h3>
                <p>{{ $auction ->item_name }}   </p>
              </div>
              <div class="bottom">
                <div class="skill">
                  <div class="skill-bar skill1 wow fadeInRightBig">
                    <span class="skill-count1">85%</span>
                  </div>
                </div>
                <ul>
                  <li> {{ $auction->start_price }} </li>
                  <li>الهدف : $ 7,000.00</li>
                </ul>
                <h4> <span> 60 شخص </span> قاموا بالمزايدة </h4>
              </div>
            </div>
          </div>
        </div>
        @endforeach

        {{-- <div class="col-sm-6 col-lg-4">
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
              <img src="{{ asset('assets/img/donation5.jpg') }}" alt="Donation">
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
              <img src="{{ asset('assets/img/donation5.jpg') }}" alt="Donation">
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
              <img src="{{ asset('assets/img/donation5.jpg') }}" alt="Donation">
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
        </div> --}}
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
  <!--////////////////////////  footer  //////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <div id="footer">
    @include('layouts.site.Footer')
  </div>
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--/////////////////////////////JavaScript/////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/mdb.min.js') }}"></script>
  <script src="{{ asset('assets/js/smooth-scroll.min.js') }}"></script>
  <script src="{{ asset('assets/js/swiper.js') }}"></script>
  <script src="{{ asset('assets/js/aos.js') }}"></script>
  <script src="{{ asset('assets/js/dropify.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
  <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('assets/js/select2.js') }}"></script>
  <script src="{{ asset('assets/js/fontawesome-pro.js') }}"></script>
  <script src="{{ asset('assets/js/stars.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script>
    $('#Header').load("Header.blade.php");
    $('#footer').load("Footer.blade.php");
  </script>
  <script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      slidesPerView: 'auto',
      // spaceBetween: 10,
      speed: 1500,
      loop: true,
      freeMode: true,
      loopedSlides: 5, //looped slides should be the same
      watchSlidesVisibility: true,
      watchSlidesProgress: true,

    });
    var galleryTop = new Swiper('.gallery-top', {
      loop: true,
      effect: 'fade',
      keyboard: {
        enabled: true,
      },
      speed: 1500,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      loopedSlides: 5, //looped slides should be the same
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: galleryThumbs,
      },
      pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
      },
    });
  </script>

  <script>
    var swiper = new Swiper('.cars', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      slidesPerView: 'auto',
      spaceBetween: 10,
      speed: 1000,
      loop: true,
      autoplay: {
        delay: 1500,
        disableOnInteraction: false,
      },
    });
  </script>

</body>

</html>
