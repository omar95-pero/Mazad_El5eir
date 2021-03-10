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
@toastr_css
<body>


<div>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>
  <!-- ================ spinner ================= -->
  {{-- <div class="spinner">
    <div class="loader">
      <div class="rect1"></div>
      <div class="rect2"></div>
      <div class="rect3"></div>
      <div class="rect4"></div>
      <div class="rect5"></div>
    </div>
  </div> --}}
  <!-- ================ spinner ================= -->



  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////   nav-bar     //////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->

<div id="Header" class="main-header">
    @include('layouts.site.Header')
</div>




  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////          //////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->


  <section class="donations-area addauction-page margin-top">

    <div class="title-top mb-5 d-flex align-items-center justify-content-start">
{{--      <div class="contents d-flex align-items-center mr-4 justify-content-center">--}}
{{--        <a href="{{ route('index') }}"> <i class="fad fa-home pl-2"></i> الرئيسية </a>--}}
{{--        <span> \ </span>--}}
{{--        <h3 class="font-weight-bold"> إضافة مزاد </h3>--}}

{{--      </div>--}}

    </div>
    <div class="container">

      <form action="{{ route('create.auction') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="col-md-6  mb-3">
          <h5 class="font-weight-bold py-4">الصور </h5>
          <div class="d-flex justify-content-between">
            <input type="file" name="image"  class="dropify"  />
            {{-- <input type="file" class="dropify" />
            <input type="file" class="dropify" />
            <input type="file" class="dropify" /> --}}
          </div>
        </div>

        <div class="col-md-6  mb-3 d-flex align-items-end">
          <div class="inputs w-100">
            <div class="inpu-i  ">
              <input class="form-control position-relative pr-4" name="item_name" type="text" placeholder="اسم المنتج" required>
              <i class="far fa-cart-plus position-relative" style="    top: -30px;
              right: 7px; color:#107b50;"></i>
            </div>
            <div class="inpu-i  ">
              <input class="form-control position-relative pr-4" name="address" type="text" placeholder="العنوان" required>
              <i class="far fa-map-marker-alt position-relative" style="    top: -30px;
              right: 7px; color:#107b50;"></i>
            </div>

            <div class="inpu-i  ">
              <input class="form-control position-relative pr-4" name="start_price"  type="number" placeholder="سعر البدأ" required>
              <i class="fad fa-dollar-sign position-relative" style="    top: -30px;
              right: 10px; color:#107b50;"></i>
            </div>
            <div class="inpu-i  ">
                  <input class="form-control position-relative pr-4" name="bid_limit"  type="number" placeholder="حد المزايدة" required>
                  <i class="fad fa-dollar-sign position-relative" style="    top: -30px;
              right: 10px; color:#107b50;"></i>
              </div>

              <div class="inpu-i  ">
              <input class="form-control position-relative pr-4" name="start_at" type="datetime-local" placeholder="توقيت البدأ" required>
              <i class="fad fa-calender position-relative" style="    top: -30px;
              right: 10px; color:#107b50;"></i>
            </div>
            <div class="inpu-i  ">
              <input class="form-control position-relative pr-4" name="end_at" type="datetime-local" placeholder="توقيت الانتهاء" required>
              <i class="fad fa-calender position-relative" style="    top: -30px;
              right: 10px; color:#107b50;"></i>
            </div>
          </div>
        </div>

        <div class="col-md-6  mb-3 d-flex align-items-end">
          <div class="inputs w-100">
            <div class="inpu-i   ">

              <textarea rows="4" class="form-control position-relative  pr-4" name="item_detailes" type="text"
                placeholder="تفاصيل المنتج"></textarea>
              <i class="fad fa-info " style="    bottom: 102px;
            right: 10px;     color: #107b50;"></i>
            </div>
          </div>
        </div>

        <div class="col-md-6  mb-3 d-flex align-items-top">
          <div class="inputs w-100">
            <!-- <div class="inpu-i  ">
              <input class="form-control position-relative pr-4" type="text" placeholder="العنوان">
              <i class="far fa-map-marker-alt position-relative" style="    top: -30px;
              right: 7px; color:#107b50;"></i>
            </div> -->
            <select class="browser-default custom-select" name="charity_id">
              <option option value=" " disabled selected> الهيئة المراد التبرع لها :</option>
              @foreach ($charities as $charity)
              <option value="{{ $charity->id }}" {{$charity->name == $charity->id  ? 'selected' : ''}}>{{ $charity->name }}</option>
              @endforeach
            </select>

            <div class="col-12  mt-4 d-flex align-items-center justify-content-center">
              <button type="submit" class="btn sure-btn "> تأكيد </button>
            </div>
          </div>
        </div>




      </div>
      </form>


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
  <div id="footer"></div>
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--/////////////////////////////JavaScript/////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
@include('layouts.site.js')

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

<script>
    // dropify

    $('.dropify').dropify();
</script>

</body>
@jquery
@toastr_js
@toastr_render

</html>
