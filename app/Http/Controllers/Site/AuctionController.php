<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\AuctionRequest;
use App\Models\Auction_View;
use App\Models\Favorite;
use Illuminate\Support\Carbon;
use App\Models\Auction;
use App\Models\Charity;
use App\Models\Bid;
use App\Http\Traits\SendEmail;
use Illuminate\Http\Request;
use App\Models\Image;

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

            $auctionData = request([
                        'image',
                        'item_name',
                        'address',
                        'start_price',
                        'bid_limit',
                        'start_at',
                        'end_at',
                        'item_detailes',
                        'delivery_details',
                        'user_id',
                        'charity_id',]);
            $imagesData = request([
                'imag',
                'img',
                'imge',
                  ]);
            //-----------------------------
            $auctionData['image'] = store_file($request, 'image', "mazad");
            $auctionData['user_id'] = request()->user()->id;
            $obgAuction =  Auction::create($auctionData);
            //-----------------------------
            if ($request->image != '') {
                $imagesData['imag'] = store_file($request, 'imag', "mazad");
                $imagesData['img']  = store_file($request, 'img', "mazad");
                $imagesData['imge'] = store_file($request, 'imge', "mazad");
                $imagesData['auction_id'] = $obgAuction->id;
//                dd($imagesData);
                Image::create($imagesData);
            }else{
                toastr()->error('هناك خطأ بالبيانات المدخلة');
                return back();
            }

            toastr()->success('سوف يتم مراجعة المزاد وسيتم نشره قريباً');
            return redirect()->route('index');
        }


    public function getAllAuctions()
        {
            $auctions = Auction::with('charity')->orderBy('created_at','DESC')->get();


            foreach ($auctions as  $key => $val){
                $bidNumbers = Bid::where('Auction_id',$val->id)->groupBy('user_id')->get();
            $val->count_users = $bidNumbers->count();
            }



            return view('site.mazadat-page', compact('auctions'));
        }


    public function auctionDetails($id)
        {
            $auctionDetailes = Auction::with('user','charity','images')->findOrFail($id);
            $charity_name = $auctionDetailes->charity->name;
            $getImages = $auctionDetailes->images;
//            dd($getImages);
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
                ->take(2)
                ->get();
            $bidUsers = Bid::where('Auction_id',$auctionDetailes->id)
                ->with('user')
                ->orderBy('bid_price', 'desc')
                ->get();
//            dd($bidUsers);
#========================time delay for any auction===========================================
            $f_date = Carbon::parse($auctionDetailes->start_at);
            $t_date = Carbon::parse($auctionDetailes->end_at)->isoFormat('MMMM D, YYYY h:mm:ss ');
            $duration = $f_date ->diff($t_date,true);
#==============================================================================================
#==============================================================================================
                $view =[
                    'auction_id'=>request('id'),
                ];
               $insertView = Auction_View::create($view);
#=============================================================================================
#================================get Views Numbers============================================
               $view_count = Auction_View::groupBy('auction_id')->count('id');
#===============================================================================

               return view('site.auction-details',
                   compact('auctionDetailes', 'maxPrice','charity_name', 'bids','t_date','view_count','bidUsers','getImages'))
                   ->with('no',0);
        }


 #=======================send Mail for Best Auction Bid User========================
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
//=====================================Search Function==================================================

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the items_name and item_details columns from the Auctions table
        $auctions = Auction::query()
            ->where('item_name', 'LIKE', "%{$search}%")
            ->orWhere('item_detailes', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('site.mazadat-page', compact('auctions'));
    }
    public function Best(){
//        ----------------Best Auctions For Side Bar------------
        $auctions = Auction::orderBy('start_price','DESC')->take(3)->get();
//        return $auctions;
        return view('site.mazadat-page', compact('auctions'));
    }

}
