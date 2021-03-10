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

  <div id="Header" class="main-header ">
  @include('layouts.site.Header')
  </div>

  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////          //////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <section class="contact-sec">
    <div class="title-top mb-5 mt-5 d-flex align-items-center justify-content-start">
{{--      <div class="contents d-flex align-items-center mr-4 justify-content-center">--}}
{{--        <a href="index.blade.php"> <i class="fad fa-home pl-2"></i> الرئيسية </a>--}}
{{--        <span> \ </span>--}}
{{--        <h3 class="font-weight-bold"> من نحن </h3>--}}

{{--      </div>--}}

    </div>


  </section>

  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////          //////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->

  <div class="terms mt-5">

    <div class="container">

      <div class="row pb-5">

        <div class="col-md-8 mt-3">
          <h3 class="font-weight-bold title text-center pb-4">
            عن مزادات الخير
          </h3>
          <p class="pb-2 mt-3 fourth-color">
            نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم
            ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي
            أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل
            انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني.
          </p>

        </div>


        <div class="col-md-4">
          <div class="col-3-contents p-2">
              <img src="{{asset('assets/img/about.jpeg')}}" style="width: 100%">
{{--            <h4 class="right-title py-2">روابط مختصرة</h4>--}}

{{--            <div class="textwidget">--}}
{{--              <ul class="sidepages pt-3">--}}
{{--                <li><a href="{{ route('index') }}">الرئيسية</a></li>--}}
{{--                <li><a href="{{ route('auctions.detailes') }}">المزادات</a></li>--}}
{{--                  <li class="nav-item"><a class="nav-link " href="{{ route('site.Contact') }}">تواصل معنا </a></li>--}}
{{--                @guest--}}
{{--                <li><a href="{{ route('login') }}">تسجيل الدخول</a></li>--}}
{{--                @endguest--}}
{{--              </ul>--}}
{{--            </div>--}}
          </div>
        </div>



      </div>
    </div>
  </div>


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
