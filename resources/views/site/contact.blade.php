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
  @include('layouts.site.css')
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
      <div class="contents d-flex align-items-center mr-4 justify-content-center">
        <a href="{{ route('index') }}"> <i class="fad fa-home pl-2"></i> الرئيسية </a>
        <span> \ </span>
        <h3 class="font-weight-bold"> تواصل معنا </h3>

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

  <section class="contact-section mb-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="contact-info-address">
            <h3> تواصل سريع </h3>
            <div class="info-contact">
              <i class="flaticon-pin"></i>
              <h3>العنوان</h3>
              <span>205  شارع التحرير , ميامي<br> الإسكندرية , مصر</span>
            </div>
            <div class="info-contact">
              <i class="flaticon-call"></i>
              <h3>هاتف</h3>
              <span><a href="tel:+123-456-789">0123456789</a></span>
            </div>
            <div class="info-contact">
              <i class="flaticon-email"></i>
              <h3> البريد الإلكتروني</h3>
              <span>
                <a href="/cdn-cgi/l/email-protection#a3cbc6cfcfcce3d3cfc2cec18dc0ccce">
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
              <h3>تواصل معنا</h3>
              <p>نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.</p>
            </div>
            <div class="contact-form">
              <form method="POST" action="{{ route('save.contact') }}" id="contactForm">
                @csrf
                <div class="row">
                      
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="name" id="name" class="form-control" required
                        data-error="Please enter your name" placeholder="الإسم">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="phone_number" id="phone_number" required
                        data-error="Please enter your number" class="form-control" placeholder="رقم الهاتف">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                 
                  </div>
                      
                  <div class="row">
                     <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                      <input type="email" name="email" id="email" class="form-control" required
                        data-error="Please enter your email" placeholder="البريد اللإلكتروني">
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
                      <textarea name="message" class="form-control" id="message" cols="30" rows="6" required
                        data-error="Write your message" placeholder="إكتب رسالتك"></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="send-btn">
                      <button type="submit" class="default-btn">
                        إرسال
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
  <div id="footer"></div>
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
