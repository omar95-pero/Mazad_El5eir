<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Auction;
use App\Models\Bid;
use App\Models\Charity;
use App\Models\Favorite;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function getIndex()
    {
         $bestAuction = Bid::with('auction')->ORDERBY('bid_price', 'DESC')->first();
//        dd($bestAuction);
        $user_bids = Bid::where('Auction_id',$bestAuction->id)->groupby("user_id")->get();
//        dd($bestAuction->auction->id);
         $user_bids_count = $user_bids->count();
         $auctions = Auction::get()->take(4);
        $charities = Charity::count();
        $news = News::get();
        $count_bids = Bid::count();

//
//         dd($user_bids);
      return view('site.index', compact('bestAuction','user_bids','auctions','charities','news','count_bids'));
    }
    public function getProfile()
    {
        $myAuctions = Auction::where('user_id',auth()->user()->id)
            ->with('charity')
            ->get();
        $myFavorite = Favorite::where('user_id',auth()->user()->id)
            ->with('charity')
            ->get();
//        dd($myFavorite);
        return view('site.profile',compact('myAuctions','myFavorite'));
    }
    public function getAuctionAdd()
    {
        return view('site.AuctionAdd');
    }
    public function getAbout()
    {
        return view('site.About');
    }
    public function Store(){
        return view('site.store');
    }
}
