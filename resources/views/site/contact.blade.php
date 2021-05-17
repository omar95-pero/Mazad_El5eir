<!doctype html>
<html lang="ar">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  @include('layouts.site.css')
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
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
  <section class="contact-sec" >
    <div class="title-top mb-5 mt-5 d-flex align-items-center justify-content-start" style=" background-position: center ; background-image: url({{asset('assets/img/contact.jpg')}});">
{{--      <div class="contents d-flex align-items-center mr-4 justify-content-center">--}}
{{--        <a href="{{ route('index') }}"> <i class="fad fa-home pl-2"></i> الرئيسية </a>--}}
{{--        <span> \ </span>--}}
{{--        <h3 class="font-weight-bold"> تواصل معنا </h3>--}}

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

  <section class="contact-section mb-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="contact-info-address">
            <h3> {{__('contact')}} </h3>
            <div class="info-contact">
              <i class="flaticon-pin"></i>
              <h3>{{__('Address')}}</h3>
              <span>{{$data->address}}</span>
            </div>
            <div class="info-contact">
              <i class="flaticon-call"></i>
              <h3>{{__('mobile')}}</h3>
              <span><a href="tel:{{$data->phone_number}}">{{$data->phone_number}}</a></span>
            </div>
            <div class="info-contact">
              <i class="flaticon-email"></i>
              <h3>{{__('email')}}</h3>
              <span>
                <a href="{{$data->email}}">
                  <span class="__cf_email__"
                    data-cfemail="d9aaaca9a9b6abad99b1acabacb4b8f7bab6b4">[email&#160;protected]</span>
                </a>
              </span>
            </div>
          </div>
        </div>
        <div class="col-lg-8 left-contact-col">
          <div class="contact-area">
            <div class="contact-content">
              <h3>{{__('contact_us')}}</h3>
              <p> {{$data->contact_body}}.</p>
            </div>
            <div class="contact-form">
              <form method="POST" action="{{ route('save.contact') }}" id="contactForm">
                @csrf
                <div class="row">

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="name" id="name" class="form-control" required
                        data-error="Please enter your name" placeholder="{{__('name')}}">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="phone_number" id="phone_number" required
                        data-error="Please enter your number" class="form-control" placeholder="{{__('phone_num')}}">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                  </div>

                  <div class="row">
                      <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                              <input type="email" name="email" id="email" class="form-control" required
                                     data-error="Please enter your email" placeholder="{{__('email')}}">
                              <div class="help-block with-errors"></div>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                              <input type="text" name="" id="email" class="form-control" required
                                     data-error="Please enter your email" placeholder="{{__('title_message')}}">
                              <div class="help-block with-errors"></div>
                          </div>
                      </div>

                  <!-- <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="msg_website" id="msg_website" class="form-control" required
                        data-error="Please enter your website" placeholder="الموضوع">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div> -->
                  <div class="col-lg-12 col-md-12">
                    <div class="form-group">
{{--                      <textarea name="message" class="form-control" id="message" cols="30" rows="6" required--}}
{{--                        data-error="Write your message" placeholder="إكتب رسالتك"></textarea>--}}
                        <textarea class="form-control" id="summary-ckeditor" name="message" cols="30" rows="6" required placeholder="إكتب رسالتك"></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-lg-12 ">
                    @if(config('services.recaptcha.key'))
                      <div class="g-recaptcha w-100 d-flex justify-content-center"
                           data-sitekey="{{config('services.recaptcha.key')}}" aria-required="">
                      </div>
                    @else
                      <script>
                        alert('please confirm recapcha')
                      </script>
                    @endif
                    <div class="send-btn">

                      <button type="submit" class="default-btn">
                        {{__('send')}}
                        <i class="flaticon-right"></i>
                        <span></span>
                      </button>

                    </div>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </form>
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
   @include('layouts.site.js')

  <script>
      CKEDITOR.replace( 'summary-ckeditor');

  </script>
  @toastr_js
  @toastr_render
</body>

</html>
