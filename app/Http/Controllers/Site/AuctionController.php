<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\AuctionRequest;
use App\Models\Auction_View;
use App\Models\Favorite;
use Illuminate\Support\Carbon;
use App\Models\User;
use App\Models\Auction;
use App\Models\Charity;
use App\Models\Bid;
use Illuminate\Http\Reques;
use Illuminate\Support\Facades\DB;
use App\Http\Traits\SendEmail;


class AuctionController extends Controller
{
    use SendEmail;


    public function index()
        {
            $charities = Charity::get()->all();
            return view('site.AuctionAdd', compact('charities'));
        }


    public function create(AuctionRequest $request)
        {

            $data = $request->all();
            if ($request->image != '') {
                $data['image'] = store_file($request, 'image', "mazad");
                $data['user_id'] = request()->user()->id;
                Auction::create($data);
            }else{
                toastr()->error('هناك خطأ بالبيانات المدخلة');
                return back();
            }


            return redirect()->route('index')->toastr()->success('سوف يتم مراجعة المزاد وسيتم نشره قريباً');
        }


    public function getAllAuctions()
        {
            $auctions = Auction::with('charity')->get();
            return view('site.mazadat-page', compact('auctions'));
        }


    public function auctionDetails($id)
        {
            $auctionDetailes = Auction::with('user','charity')->findOrFail($id);
            $charity_name = $auctionDetailes->charity->name;


        if (auth()->check()){
                $count = Favorite::where([['auction_id',$id],
                    ['user_id',auth()->user()->id]])->count();

                    if ($count == 0){
                        $auctionDetailes->favorite = "no";
                    }else{
                        $auctionDetailes->favorite = "yes";
                    }
        }else{
                $auctionDetailes->favorite = "no";
            }


        $maxPrice = Bid::where('auction_id', $id)->groupBy('auction_id')->max('bid_price');

            $bids = Bid::where('auction_id', $id)
                ->with('user')
                ->orderBy('bid_price', 'desc')
                ->take(4)
                ->get();
    ////////////////////////////time delay for any auction////////////////////////////
            $f_date = Carbon::parse($auctionDetailes->start_at);
            $t_date = Carbon::parse($auctionDetailes->end_at)->isoFormat('MMMM D, YYYY h:mm:ss ');
            $duration = $f_date ->diff($t_date,true);
    //////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////counter for Views number//////////////////////////////////////
                $view =[
                    'auction_id'=>request('id'),
                ];
               $insertView = Auction_View::create($view);
    ///////////////////////////end Counter for views////////////////////////////////
    ////////////////////////////////get Views Numbers//////////////////////////////
               $view_count = Auction_View::groupBy('auction_id')->count('id');
    //////////////////////////////////////////////////////////////////////////////

               return view('site.auction-details', compact('auctionDetailes', 'maxPrice','charity_name', 'bids','t_date','view_count'));
        }


 //////////////////////////////////send Mail for Best Auction Bid User//////////////////////////////////
    public function checkTimeAuction(){
        $bestBidUser=  Bid::groupBy('Auction_id')->get()->pluck('Auction_id');
        foreach ($bestBidUser as $key => $val){
            $bestBid =  Bid::where("Auction_id",$val)->
                 with('auction' , 'user' )->orderBy("bid_price","DESC")->first();
            if(\Carbon\Carbon::parse($bestBid->auction->end_at) < \Carbon\Carbon::now() && $bestBid->auction->email === 'no') {


                 $email = $bestBid->user->email ;
                 $title = 'مزاد الخير ';
                 $text = 'تم انتهاء المزاد ويمكنكم الدفع الآن';

                $this->send_EmailFun($email,$text,$title);
                $emailStatus = $bestBid->auction->email ;

                $Status = Auction::where('id',$bestBid->auction->id)->update(['email'=>'yes']);

            }

        }

    }
}
