
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

  <!--
  <div id="Header" class="main-header"></div>
 -->



  <div class="user-form-area">
    <div class="container-fluid p-0">
      <div class="row m-0">

        <div class="col-lg-5 p-0 img-col-6">
          <div class="over-lay d-flex align-items-center justify-content-center">
            <h3>إنشاء حساب</h3>
          </div>
          <div class="user-img" style="background-image: url({{asset('assets/img/register.jpg')}});">
            <img src=" {{asset('assets/img/register.jpg')}} " alt="User">
          </div>
        </div>

        <div class="col-lg-7 p-0" >
          <div class="user-content">
            <div class="d-table">
              <div class="d-table-cell">
                <div class="user-content-inner">
                  <div class="top">
                    <a href="{{route("index")}}">
                      <img src="{{asset('assets/img/logo.png')}}" alt="Logo">
                    </a>
                    <h2>إنشاء حساب</h2>
                  </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="اسم المستخدم">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="الايميل">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="كلمة المرور">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="تأكيد كلمة المرور">
                                </div>
                            </div>

                            <div class="col-lg-12 d-flex align-items-center justify-content-center">
                                <button type="submit" class="btn common-btn waves-effect waves-light">تسجيل</button>
                            </div>
                        </div>
                    </form>
                  <div class="bottom">
                    <p>قمت بالتسجيل مسبقا ؟ <a href="{{ route('login') }}">دخول </a></p>
                    <h4>أو</h4>
                    <ul>
                      <li>
                        <a href="#" target="_blank">
                          <i class="icofont-facebook"></i>
                          دخول بالفيسبوك
                        </a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <i class="icofont-google-plus"></i>
                          دخول بجوجل
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
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
  <!-- <div id="footer"></div> -->
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
      // dropify

      $('.dropify').dropify();
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
