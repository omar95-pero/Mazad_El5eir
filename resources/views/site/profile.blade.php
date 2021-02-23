<!doctype html>
<html lang="ar">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    @include('layouts.site.css')
</head>
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


  <div id="Header" class="main-header"></div>


  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////          //////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->

  <section class="profile position-relative pt-2 mt-5">


    <section class="banner-profile  " style=" background-image: url(img/profilebg.jpg);  ">

      <div class="user-div  pt-5 pb-4">
        <div class=" overlay"></div>
        <div class="container-fluid row">
          <div class="col-md-2 img-col">
            <!-- <input type="file" class="dropify" /> -->
            <img class="user z-depth-2 " src="img/user.jpg" alt="">
          </div>
          <div class="col-md-4 d-flex align-items-center">
            <div class="content">
              <h3 class="font-weight-bold text-white">السيد محمد أحمد</h3>
              <ul class="list-meta mt-3">
                <li class="profile-type">
                  <i class="fad fa-phone mx-1"></i> 0123456789
                </li>



              </ul>
            </div>

          </div>



        </div>
      </div>
    </section>
    <div class=" colors">
      <span></span>
      <span></span>
      <span></span>
    </div>






    <div class="container-fluid">



      <div class="row my-4">
        <div class="col-lg-9">
          <ul class="nav nav-tabs nav-justified md-tabs " id="myTabJust" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab"
                aria-controls="home-just" aria-selected="true"><i class="fad fa-user-edit"></i> تعديل البروفايل</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab"
                aria-controls="profile-just" aria-selected="false"><i class="fad fa-star"></i> المفضلة</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#gallery-just" role="tab"
                aria-controls="profile-just" aria-selected="false"><i class="fad fa-gavel"></i> مزاداتي
              </a>
            </li>

          </ul>
          <div class="tab-content  card pt-5" id="myTabContentJust">
            <div class="tab-pane fade show active" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">
              <div class="row  my-2">

                <div class="col-sm-6 mb-3 font-weight-bold">
                  <p> الإسم : السيد محمد أحمد </p>
                </div>


                <div class="col-sm-6 mb-3 font-weight-bold">
                  <p> العنوان : شبرا الخيمة - القاهرة</p>
                </div>


                <div class="col-sm-6 mb-3 font-weight-bold">
                  <p> رقم التليفون : 01012345678</p>
                </div>

                <div class="col-sm-6 mb-3 font-weight-bold">
                  <p> البريد الإلكتروني : mostafa@m.com</p>
                </div>




                <!--
                <div class="col-sm-6 mb-3 font-weight-bold">
                  <p> الجنسية : مصري</p>
                </div> -->


                <div class="w-100 mt-3 d-flex align-items-center justify-content-center">
                  <button class="btn edit-profile" data-toggle="modal" data-target="#exampleModalCenter"> تعديل البيانات
                  </button>
                </div>



                <!-- Modal -->
                <div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
                  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">


                    <div class="modal-content">
                      <div class="modal-header d-flex justify-content-center">
                        <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle">تعديل البروفايل</h5>

                      </div>
                      <div class="modal-body">
                        <form action="">
                          <div class="row">
                            <div class="col-6 mb-3 d-flex">
                              <input type="text" class="form-control" placeholder="الإسم">
                            </div>

                            <div class="col-6 mb-3 d-flex">
                              <input type="text" class="form-control" placeholder="العنوان ">
                            </div>

                            <div class="col-6 mb-3 d-flex">
                              <input type="number" class="form-control" placeholder="رقم التليفون">
                            </div>


                            <div class="col-6 mb-3 d-flex">
                              <input type="email" class="form-control" placeholder="البريد الإلكتروني">
                            </div>

                          </div>
                        </form>

                      </div>
                      <div class="modal-footer text-center d-flex justify-content-center">
                        <button type="submit" class="btn edit-profile" data-dismiss="modal">حفظ التغييرات</button>
                        <button type="button" class="btn edit-profile" data-dismiss="modal"> إلغاء </button>

                      </div>
                    </div>
                  </div>
                </div>




              </div>
            </div>



            <div class="tab-pane fade" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
              <div class="container  ">




              </div>

            </div>


            <div class="tab-pane fade" id="gallery-just" role="tabpanel" aria-labelledby="profile-tab-just">



              <section class="donations-area pt-5 pb-4">


                <div class="row">
                  <div class="col-sm-6 col-lg-6">
                    <div class="donation-item">
                      <div class="img">
                        <img src="img/donation1.jpg" alt="Donation">
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
                            <li> أخر سعر : <strong> 5,500 $ </strong> </li>
                            <li> سعر مزادي : <strong> 4000 $ <i class="fad fa-arrow-down px-2"></i></strong> </li>
                          </ul>
                          <!-- <h4> <span> 60 شخص </span> قاموا بالمزايدة </h4> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-6">
                    <div class="donation-item">
                      <div class="img">
                        <img src="img/donation2.jpg" alt="Donation">
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
                            <li> أخر سعر : <strong> 5,500 $ </strong> </li>
                            <li> سعر مزادي : <strong> 4000 $ <i class="fad fa-arrow-down px-2"></i></strong> </li>
                          </ul>
                          <!-- <h4> <span> 60 شخص </span> قاموا بالمزايدة </h4> -->
                        </div>
                      </div>
                    </div>
                  </div>

                </div>




              </section>






            </div>

          </div>
        </div>

        <div class="col-lg-3 my-2">
          <div class="info p-3">
            <h4 class="pb-2">الاحصائيات</h4>
            <!-- <div class="row my-2">
              <div class="col-6">
                التقييمات
              </div>
              <div class="col-6">
                <div class="stars">
                  <i class="fas fa-star "></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </div>

            </div> -->

            <div class="row my-2">
              <div class="col-10">
                <p>
                  المزادات المفضلة :
                </p>
              </div>

              <div class="col-2">
                <p>
                  15
                </p>
              </div>
            </div>

            <div class="row my-2">
              <div class="col-10">
                <p>
                  عدد المزايدات :
                </p>
              </div>

              <div class="col-2">
                <p>
                  4
                </p>
              </div>
            </div>



          </div>
        </div>
      </div>








    </div>


    <a href="AuctionAdd.blade.php" class="AuctionAdd"><i class="far fa-plus"></i></a>




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
</body>

</html>
