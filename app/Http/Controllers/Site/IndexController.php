<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Auction;
use App\Models\Bid;
use App\Models\Charity;
use App\Models\Favorite;
use App\Models\News;
use App\Models\Notification;
use App\Models\User;
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

//=======================================Counters For Numbers in The BottomDiv in Index Page==================
         $user_bids_count = $user_bids->count();
         $auctions = Auction::get()->take(4);
        $charities = Charity::count();
        $news = News::get();
        $count_bids = Bid::count();
//========================================Show some Auctions==================================================

        $showAuctions = Auction::with('charity')->orderBy('start_price','DESC')->take(3)->get();
        foreach ($showAuctions as  $key => $val){
            $bidNumbers = Bid::where('Auction_id',$val->id)->groupBy('user_id')->get();
            $val->count_users = $bidNumbers->count();
        }
//======================================Get All Charities Images Before The Footer=============================
     $charitiesImages = Charity::get('image');
//        dd($charitiesImages);

      return view('site.index', compact(['bestAuction','auctions','charities','news','count_bids','showAuctions','charitiesImages']));
    }
    public function getProfile()
    {
        $myAuctions = Auction::where('user_id',auth()->user()->id)
            ->with('charity')
            ->get();
        $numOfMyAuctions = $myAuctions->count();
        $myFavorite = Favorite::where('user_id',auth()->user()->id)
            ->with('auction')
            ->get();
//       dd($myFavorite);
//        $Notifications = Notification::where('to',\auth()->user()->id)->with('user')->get();
//        dd($Notifications);

        return view('site.profile',compact('myAuctions','myFavorite','numOfMyAuctions'));
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
    public function is_readable($id)
    {
        $notification = Notification::findOrFail($id);
        if ($notification->is_read == 'no') {
            $readable = Notification::where('id', $id)->update(['is_read' => 'yes']);
            return back();
        }
    }
}
