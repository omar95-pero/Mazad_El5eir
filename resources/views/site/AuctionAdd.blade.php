<!doctype html>
<html lang="ar">

<head>
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
    <!-- fonts  -->
    @toastr_css
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">

    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
</head>
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
{{--   <div class="spinner">--}}
{{--    <div class="loader">--}}
{{--      <div class="rect1"></div>--}}
{{--      <div class="rect2"></div>--}}
{{--      <div class="rect3"></div>--}}
{{--      <div class="rect4"></div>--}}
{{--      <div class="rect5"></div>--}}
{{--    </div>--}}
{{--  </div>--}}
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


  <section class="donations-area en-style addauction-page margin-top">

{{--    <div class="title-top mb-5 d-flex align-items-center justify-content-start">--}}
{{--      <div class="contents d-flex align-items-center mr-4 justify-content-center">--}}
{{--        <a href="{{ route('index') }}"> <i class="fad fa-home pl-2"></i> الرئيسية </a>--}}
{{--        <span> \ </span>--}}
{{--        <h3 class="font-weight-bold"> إضافة مزاد </h3>--}}

{{--      </div>--}}

{{--    </div>--}}
    <div class="container">

      <form action="{{ route('create.auction') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">




        <div class="col-md-12 px-0 mb-5">
          <div class="inputs row py-3  w-100 " style="border: 1px solid #c5c5c5; box-shadow: 0px 1px 6px #00000050;">

              <div  class="col-md-12">
                  <h3 class="font-weight-bold pb-3">{{__('Add Auction')}}</h3>
              </div>

              <div class="col-md-7 mx-auto  mb-5">
                  <div class="d-flex justify-content-between">
                      <input type="file" name="image"  class="dropify" required />
                      @error('image')
                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                      <input type="file" name="imag" class="dropify" />
                      @error('imag')
                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                      <input type="file" name="img" class="dropify" />
                      @error('img')
                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                      <input type="file" name="imge" class="dropify"  />
                      @error('imge')
                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror


                  </div>
              </div>
            <div class="inpu-i  col-md-6">
              <input class="form-control position-relative pr-5" name="item_name" type="text" placeholder="{{__('Product Name')}}" required>
              <i class="far fa-cart-plus position-relative" ></i>
                @error('item_name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="inpu-i  col-md-6">
              <input class="form-control position-relative pr-5" name="address" type="text" placeholder="{{__('Address')}}" required>
              <i class="far fa-map-marker-alt position-relative" ></i>
                @error('address')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div class="inpu-i  col-md-3">
              <input class="form-control position-relative pr-5" name="start_price"  type="number" placeholder="{{__('start_price')}}" required>
              <i class="fad fa-dollar-sign position-relative" ></i>
                @error('start_price')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="inpu-i  col-md-3">
                  <input class="form-control position-relative pr-5" name="bid_limit"  type="number" placeholder="{{__('Bid Limit')}}" required>
                  <i class="fad fa-dollar-sign position-relative" ></i>
                @error('bid_limit')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
              </div>

              <div class="inpu-i  col-md-6">
                  <input placeholder="{{__('Expire Time')}}" class="form-control position-relative pr-2" name="end_at" type="text"  onfocus="(this.type='datetime-local')"
                         onblur="(this.type='text')" required>
                  <i class="fad fa-calender position-relative" ></i>
                  @error('end_at')
                  <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
            </div>
{{--            <div class="inpu-i col-md-6 ">--}}
{{--                <input placeholder="توقيت البدأ" class="form-control position-relative pr-2" name="start_at" type="text"  onfocus="(this.type='datetime-local')"--}}
{{--                       onblur="(this.type='text')"  required>--}}
{{--                <i class="fad fa-calender position-relative" ></i>--}}
{{--                @error('start_at')--}}
{{--                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                @enderror--}}

{{--            </div>--}}

              <div class="col-md-6">
                  <select required class="browser-default custom-select mb-4" name="charity_id" style="height: 50px" >
                      <option  value=" " disabled selected > {{__('The organization to be donated to')}} :</option>
                      @foreach ($charities as $charity)
                          <option value="{{ $charity->id }}" {{$charity->name == $charity->id  ? 'selected' : ''}}>{{ $charity->name }}</option>
                      @endforeach
                  </select>
                  @error('charity_id')
                  <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
              </div>



              <div class="col-md-6">
                  <select class="browser-default mb-4 custom-select" name="category_id" style="height: 50px">
                      <option option value=" " disabled selected> {{__('Category')}} :</option>
                      @foreach ($categories as $category)
                          <option value="{{ $category->id }}" {{$category->title == $category->id  ? 'selected' : ''}}>{{ $category->title }}</option>
                      @endforeach
                  </select>
                  @error('category_id')
                  <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
              </div>

              <div class="w-100 px-3">
                  <h4 class="font-weight-bold my-4">{{__('Delivery Details')}} </h4>
              </div>

              <div class="inpu-i  col-md-6 ">


                  <select class="browser-default mb-4 custom-select" name="govrnate_id" style="height: 50px">
                      <option  value=" " disabled selected> {{__('Governorate')}} :</option>
                      @foreach($govrnates as $gov)
                     <option value="{{ $gov->id }}" {{$gov->govrnate == $gov->id  ? 'selected' : ''}}>{{$gov->govrnate}}</option>
                      @endforeach
                  </select>
              </div>

              <div class="inpu-i  col-md-6 ">


                  <select class="browser-default mb-4 custom-select" name="type" style="height: 50px">
                      <option  value=" " disabled selected> {{__('Category')}} :</option>
                      <option value="{{ "الكترونيات"}}" {{"الكترونيات"? 'selected' : ''}}>الكترونيات</option>
                      <option value="{{ "ملابس"}}" {{"ملابس"? 'selected' : ''}}> ملابس </option>
                      <option  value="{{ "موبايلات"}}" {{"موبايلات"? 'selected' : ''}}> موبايلات </option>
                      <option  value="{{ "اخرى"}}" {{"اخرى"? 'selected' : ''}}> اخرى </option>

                  </select>

              </div>



              <div class="inpu-i  col-md-6 ">


                  <select class="browser-default mb-4 custom-select" name="is_breakable" style="height: 50px">
                      <option  value=" " disabled selected> {{__('Breakable')}} :</option>
                      <option value="{{ "yes"}}" {{" قابل للكسر"? 'selected' : ''}} > قابل للكسر</option>
                      <option value="{{ "no"}}" {{" غير قابل"? 'selected' : ''}}>غير قابل</option>

                  </select>

              </div>




              <div class="inpu-i  col-md-6 ">

                  <input placeholder="{{__('Weight')}} " name="weight" class="form-control position-relative pr-5"   type="number"
                         required>
                  <i class="fad fa-weight position-relative" ></i>



              </div>

              <div class="w-100 px-3">
                  <h4 class="font-weight-bold my-4"> {{__('Volume')}} </h4>
              </div>

              <div class="inpu-i  col-md-4 ">

                  <input placeholder="{{__('Length In cm')}} " name="length" class="form-control position-relative pr-5"   type="number"
                         required>
                  <i class="fad fa-box-open position-relative" ></i>

              </div>
              <div class="inpu-i  col-md-4 ">

                  <input placeholder="{{__('Width In cm')}}" name="width" class="form-control position-relative pr-5"   type="number"
                         required>
                  <i class="fad fa-box-open position-relative" ></i>

              </div>
              <div class="inpu-i  col-md-4 ">

                  <input placeholder="{{__('Height In cm')}} " name="height" class="form-control position-relative pr-5"   type="number"
                         required>
                  <i class="fad fa-box-open position-relative" ></i>
              </div>



              <div class="inpu-i  col-md-12 ">
{{--              <textarea rows="4" class="form-control position-relative  pr-4" name="item_detailes" type="text"--}}
{{--                        placeholder="تفاصيل المنتج"></textarea>--}}
                  <textarea  class="form-control" id="summary-ckeditor item_detailes"
                             name="item_detailes" cols="30" rows="6" required placeholder="تفاصيل المنتج" >  تفاصيل المنتج    </textarea>

{{--                  <i class="fad fa-info " style="    bottom: 102px;--}}
{{--            right: 10px;     color: #107b50;"></i>--}}
                  @error('item_detailes')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>
              <div class="w-100 d-flex justify-content-center">
                  <button type="submit" class="btn sure-btn "> {{__('Add')}} </button>
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
<script>
    CKEDITOR.replace( 'summary-ckeditor item_detailes' );
</script>
<script>
    CKEDITOR.replace( 'summary-ckeditor delivery_details' );
</script>
@toastr_js
@toastr_render
</body>

</html>
