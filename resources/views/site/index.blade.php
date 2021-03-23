@extends('layouts.site.index')

@section('content')
    <section class=" main ">

        <!-- Swiper -->
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
                @foreach($news as $new)
                <div class="swiper-slide" style="background-image:url({{$new->image}})">
                    <div class="galleryContent">
                        <!-- <h6> مصر - الإسكندرية </h6> -->
                        <h1> {{$new->title}} </h1>
                        <p>{{$new->slug}}

                        </p>
                        <a href="{{route('auctions')}}">
                        <button class=" btn"> تصفح </button>
                        </a>
                    </div>
                </div>

                @endforeach
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
        <div class="swiper-container gallery-thumbs">
            <div class="swiper-wrapper">
        @foreach($news as $new2)
                <div class="swiper-slide">
                    <div class="thumbsImg"><img src="{{ get_file($new2->image) }}"></div>
                </div>
        @endforeach

            </div>
        </div>


        <a href="{{ url('AddAuction') }}" class="AuctionAdd"><i class="far fa-plus"></i></a>


    </section>
@endsection
@section('index')

    <div class="container">
      <div class="auction-wrapper-7  m--15">
        <div class="auction-item-7 time">
          <div class="auction-inner row">
            <a href="#0" class="upcoming-badge-2" title="Upcoming Auction">
                <i class="fad fa-gavel"></i>
            </a>
              <div class="auction-thumb bg_img" style="background-image: url({{ get_file($bestAuction->auction->image) }}); background-size: cover;"  >
                  <img class="d-lg-none" src="{{ get_file($bestAuction->auction->image) }}" alt="upcoming">
                  <a href="#0" class="rating"><i class="far fa-star"></i></a>
              </div>
            <div class="auction-content">
              <div class="title-area">
                <h6 class="title">
                  <a href="{{ route('auction.details',$bestAuction->auction->id) }}">{{ $bestAuction->auction->item_name }}         </h6>
                <!-- <div class="list-area">
                  <span class="list-item">`
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

                <p>{{ $bestAuction->auction->item_detailes }}</p>
              </div>
              <div class="bid-area">
                <div class="bid-inner row">
                  <div class="bid-amount">
                    <div class="icon">
                      <i class="fad fa-gavel"></i>
                    </div>
                    <div class="amount-content">
                      <div class="current">سعر البدأ</div>
                      <div class="amount">{{ $bestAuction->auction->start_price }}</div>
                    </div>
                  </div>
                  <div class="bid-amount">
                    <div class="icon">
                      <i class="fas fa-sack-dollar"></i>
                    </div>
                    <div class="amount-content">
                      <div class="current">السعر الحالي</div>
                      <div class="amount">{{ $bestAuction->bid_price}}</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bid-count-area">
                <span class="item"><span class="left">عدد المزايدين</span> شخص
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
                <h4>400ج.م</h4>
              </div>
              <a href="{{ route('auction.details',$bestAuction->auction->id) }}" class="custom-button">تفاصيل المزاد</a>
            </div>
          </div>
        </div>


      </div>
    </div>
@endsection
