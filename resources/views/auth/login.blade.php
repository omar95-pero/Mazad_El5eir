<!doctype html>
<html lang="ar">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{__('mazad')}}</title>
    <!-- icon -->
    <link rel="icon" type="image/x-icon" href="#">
    <!-- Bootstrap -->
    @if(LaravelLocalization::getCurrentLocaleDirection() == 'rtl')
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-rtl.css') }}">
    @endif
    @if(LaravelLocalization::getCurrentLocaleDirection() == 'ltr')
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    @endif
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
    <link rel="stylesheet" href="">
    <!-- animate -->
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <!-- img gallery -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <!-- Custom style  -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @toastr_css
    <!-- fonts  -->
{{--    <link href="https://fonts.تصفحogleapis.com/css?family=Cairo&display=swap" rel="stylesheet">--}}
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


  <div class="user-form-area">
    <div class="container-fluid p-0">
      <div class="row m-0">

        <div class="col-lg-5 p-0 img-col-6">
          <div class="over-lay d-flex align-items-center justify-content-center">
            <h3>{{{__('login')}}}</h3>
          </div>
          <div class="user-img" style="background-image: url({{ URL:: asset('assets/img/login.jpg') }});">
            <img src="{{ asset('assets/img/login.jpg') }}" alt="User">
          </div>
        </div>

        <div class="col-lg-7 p-0">
          <div class="user-content" style="height: auto">
            <div class="d-table">
              <div class="d-table-cell">
                <div class="user-content-inner">
                  <div class="top">
                    <a href="{{route('index')}}">
                      <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                    </a>
                    <h2>{{__('login')}}</h2>
                  </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                   <div class="form-group row">
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('البريد الاليكتروني') }}</label>--}}

                            <div class="col-md-12">
                                <input id="email" placeholder="{{__('email')}}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('كلمة المرور') }}</label>--}}

                            <div class="col-md-12">
                                <input id="password" placeholder="{{__('password')}}" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 ">
                                <div class="form-check text-right">

                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('remember_me') }}
                                    </label>

                                </div>
                            </div>

                            <div class="col-md-6">
                                @if (Route::has('password.request'))
                                    <a class="btn-link" href="{{ route('EmailForm') }}">
                                        {{ __('do_you_forget_password') }}?
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 d-flex justify-content-center">
                                <button type="submit" class="btn common-btn">
                                    {{ __('login') }}
                                </button>


                            </div>
                        </div>
                    </form>
                  <div class="bottom">
                    <p>{{__('do_you_not_have_an_account')}} ؟ <a href="{{ route('register') }}">{{__('create_account')}}</a></p>
                    <h4>{{__('or')}}</h4>
                    <ul>
                      <li>
                        <a href="#" target="_blank">
                          <i class="fab fa-facebook-square ml-1"></i>
                         {{__('login_with_facebook')}}
                        </a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <i class="fab fa-google-plus ml-1"></i>
                          {{__('login_with_google')}}
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
  </div>



@include('layouts.site.js')
@toastr_js
@toastr_render
</body>

</html>
