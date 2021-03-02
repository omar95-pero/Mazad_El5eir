<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Auction;
use App\Models\Bid;
use App\Models\Charity;
use App\Models\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getIndex()
    {
         $bestAuction = Bid::with('auction')->ORDERBY('bid_price', 'DESC')->first();
         $user_bids = Bid::where('Auction_id',$bestAuction->auction->id)->groupby("user_id")->get();
         $user_bids = $user_bids->count();
         $auctions = Auction::get();
        $charities = Charity::count();
        $news = News::get();

//         dd($charities);
      return view('site.index', compact('bestAuction','user_bids','auctions','charities','news'));
    }
    public function getAuctionAdd()
    {
        return view('site.AuctionAdd');
    }
    public function getAbout()
    {
        return view('site.About');
    }
}
