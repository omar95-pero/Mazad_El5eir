<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Auction;
use App\Models\Bid;
use App\Models\Charity;
use App\Models\Favorite;
use App\Models\Govrnate;
use App\Models\Last_News;
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
        $user_bids = Bid::where('Auction_id',$bestAuction->auction->id)->groupBy("user_id")->get();
        $num = $user_bids->count();
//        dd($num);

//=======================================Counters For Numbers in The BottomDiv in Index Page==================
   /*----|Auctions under In The Bottom Of Index Page|-------*/
        $last_news = Last_News::orderBy('created_at','DESC')->get()->take(4);
//         $auctions = Auction::where('status','done')->get()->take(4);
       /*----------------------------------*/
        $user_bids_count = $user_bids->count();
        $charities = Charity::count();
        $news = News::get();
        /*------------------------------*/
        $count_bids = Bid::count();
        /*------------------------------*/
        $count_auctions = Auction::count();
//        dd($count_bids);
//========================================Show some Auctions==================================================

        $showAuctions = Auction::with('charity')->where('status','done')->orderBy('start_price','DESC')->take(3)->get();
        foreach ($showAuctions as  $key => $val){
            $bidNumbers = Bid::where('Auction_id',$val->id)->groupBy('user_id')->get();
            $val->count_users = $bidNumbers->count();
        }
        foreach ($showAuctions as  $key => $val){
            $lastBid = Bid::where('Auction_id',$val->id)->orderBy('bid_price','DESC')->take(1)->get();
            $val->best_user = $lastBid;
            $val->total = $val->best_user->sum('bid_price');
//            dd(str_contains(mime_content_type($val->image),'video'));
//            dd($val->best_user->sum('bid_price'));
        }
        /*-----------totlal of donation-------------------*/
       $total_donations =Bid::select('auction_id','bid_price', DB::raw('max(bid_price) as max'))
            ->groupBy('Auction_id')
            ->get();
//       return $total_donations;
        $total = $total_donations->sum('max');
//==================================Get All Charities Images Before The Footer=============================
     $charitiesImages = Charity::get('image');
//        dd($charitiesImages);

      return view('site.index', compact(['bestAuction','last_news','charities','news','count_bids','showAuctions','charitiesImages','count_auctions','num','total']));
    }
    public function getProfile()
    {
        $myAuctions = Auction::where('user_id',auth()->user()->id)
            ->with('charity')
            ->get();
        $numOfMyAuctions = $myAuctions->count();
        $myFavorite = Favorite::with('auction.charity')->where('user_id',auth()->user()->id)
            ->get();
//       dd($myFavorite);
        $myNotifications = Notification::where('to',\auth()->user()->id)->with('user')->get();
//        dd($myNotifications);

        return view('site.profile',compact('myAuctions','myFavorite','numOfMyAuctions','myNotifications'));
    }
    public function getAuctionAdd()
    {
        return view('site.AuctionAdd');
    }
    public function getAbout()
    {
        $data = About::first();
//        dd($data);
        return view('site.About',compact('data'));
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
    public function news(){
        $last_news = Last_News::orderBy('created_at','DESC')->get();

        return view('site.news_details',compact('last_news'));
    }
    public function news_details($id){
        $news_detail = Last_News::findOrFail($id);
//        dd($news_detail);
        return view('site.news_detail',compact('news_detail'));

    }
}
