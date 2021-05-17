<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\AuctionRequest;
//use App\Models\Auction_View;
use App\Models\Category;
use App\Models\Dlivery_Details;
use App\Models\Favorite;
use App\Models\Govrnate;
use Illuminate\Support\Carbon;
use App\Models\Auction;
use App\Models\Charity;
use App\Models\Bid;
use App\Http\Traits\SendEmail;
use Illuminate\Http\Request;
use App\Models\Image;
use Validator;
use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Cookie;
class AuctionController extends Controller
{
    use SendEmail;


    public function index()
        {
            $charities = Charity::get()->all();
            $categories = Category::get()->all();
            $govrnates = Govrnate::get()->all();
            return view('site.AuctionAdd', compact('charities','categories','govrnates'));
        }


    public function create(Request $request)
        {


            $auctionData = request([
                        'image',
                        'item_name',
                        'address',
                        'start_price',
                        'bid_limit',
//                        'start_at',
                        'end_at',
                        'item_detailes',
                        'delivery_details',
                        'user_id',
                        'charity_id',
                        'category_id',
                                    ]);
             $deliver_details = request (['govrnate_id','Auction_id','weight','length','width','height','type','is_breakable']);
            //-----------------------------
            $auctionData['image'] = store_file($request, 'image', "mazad");
            $auctionData['user_id'] = request()->user()->id;
            if ($auctionData['end_at']> \Carbon\Carbon::now() ){
                if (strlen($auctionData['item_detailes']) >= 30) {
//                    dd($auctionData);
//                    dd($request);
                    $obgAuction = Auction::create($auctionData);
                }else{
                    toastr()->error('من فضلك ادخل تفاصيل المنتج بحيث لاتقل عن 30 حرف');
                    return back();
                }
            }else{
                toastr()->error('يجب أن يكون التاريخ مستقبلاً');
                return back();
            }
            //-----------------------------
//            if ($request->image != '') {
//        if ($imagesData){

        if ($request->imag != '')
                $imagesData['imag'] = store_file($request, 'imag', "mazad");
        if ($request->img != '')
            $imagesData['img']  = store_file($request, 'img', "mazad");
        if ($request->imge != '')
            $imagesData['imge'] = store_file($request, 'imge', "mazad");

                $imagesData['auction_id'] = $obgAuction->id;
//                dd($imagesData);
                Image::create($imagesData);
//                dd($deliver_details);
                if ($deliver_details)
                    $deliver_details['Auction_id']=$obgAuction->id;
//                dd($deliver_details['is_breakable']);
                Dlivery_Details::create($deliver_details);
//            }else{
//                toastr()->error('هناك خطأ بالبيانات المدخلة');
//                return back();
//            }

            toastr()->success('سوف يتم مراجعة المزاد وسيتم نشره قريباً');
            return redirect()->route('index');
        }
    public function getAllAuctions()
        {
            $auctions = Auction::where('status','done')->with('charity')->orderBy('created_at','DESC')->paginate(9);
//            $biders = Bid::groupBy('Auction_id')->get()->last();
//            dd($biders);

            foreach ($auctions as  $key => $val){
                $bidNumbers = Bid::where('Auction_id',$val->id)->groupBy('user_id')->get();
            $val->count_users = $bidNumbers->count();
            }
           foreach ($auctions as  $key => $val){
            $lastBid = Bid::where('Auction_id',$val->id)->orderBy('bid_price','DESC')->take(1)->get();
            $val->best_user = $lastBid;
//            dd($val->best_user);
           }
//        $max =Bid::select('auction_id','bid_price', DB::raw('max(bid_price) as max'))
//            ->groupBy('Auction_id')
//            ->get();

            return view('site.mazadat-page', compact('auctions'));
        }


    public function auctionDetails($id)
        {
            $auctionDetailes = Auction::where([['status','done']])->with('user','charity','images','delivery.govrnate')->findOrFail($id);
//           dd($auctionDetailes);
            /*--------------------------number of views-------*/

//             $auctionDetailes->increment('views',2);
//             $auctionDetailes->decrement('views', 2);
        if(\Cookie::get('auction_id') == '' || \Cookie::get('auction_id') == null || \Cookie::get('auction_id') != $id){
            \Cookie::queue('auction_id',$id , 60);
            $auctionDetailes->increment('views');
        }
             /*------------------------------------------------*/
            /*-------------------Bid Users Count---------------*/
           $bidUsersNumber = Bid::where('Auction_id',$id)
            ->distinct('user_id')
            ->count();
//        dd($bidUsersNumber);
        /*------------------------------------------------------------------*/
       /*-----------------------------Number of Bids------------------------*/
        $bidsNumber = Bid::where('Auction_id',$auctionDetailes->id)
            ->count();
        /*-------------------------------------------------*/
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
            $f_date = Carbon::now();
            $t_date = Carbon::parse($auctionDetailes->end_at)->isoFormat('MMMM D, YYYY h:mm:ss ');
            $duration = $f_date ->diff($t_date,true);
#==============================================================================================

#===============================================================================
//        -----------------------------------get Categories---------------------
        $categories = Category::get();
               return view('site.auction-details',
                   compact('auctionDetailes', 'maxPrice','charity_name', 'bids','t_date','bidUsers','getImages','categories','bidUsersNumber','bidsNumber'))
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
//dd($bestBid->auction->user->email);
                 $emailForContributor = $bestBid->auction->user->email;
                 $titleForContributer = 'مزاد الخير';
                 $textForContributer = 'شكراً لتبرعكم ودمتم للخير سابقين';
                $this->send_EmailFun($email,$text,$title);
                $this->send_EmailFun($emailForContributor,$textForContributer,$titleForContributer);
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
            ->paginate(9);

//        ------------------Get The Last Bid Price-------------------
        foreach ($auctions as  $key => $val){
            $lastBid = Bid::where('Auction_id',$val->id)->groupBy('user_id')->orderBy('bid_price','DESC')->first()->get();
            $val->best_user = $lastBid;
//            dd($val->best_user);
        }
//        ------------------------------------------------------------
//        // Return the search view with the resluts compacted
        if ($auctions) {
            return view('site.mazadat-page', compact('auctions'));
        }else{
            $notFound = 'عفواً لاتوجد نتائج بحث';
            return view('site.mazadat-page',compact('notFound'));
        }

    }
    public function bestAuctions(){
//        ----------------Best Auctions For Side Bar------------
        $auctions = Auction::where('is_special','yes')->paginate(9);
        foreach ($auctions as  $key => $val){
            $bidNumbers = Bid::where('Auction_id',$val->id)->groupBy('user_id')->get();
            $val->count_users = $bidNumbers->count();
        }
        foreach ($auctions as  $key => $val){
            $lastBid = Bid::where('Auction_id',$val->id)->groupBy('user_id')->orderBy('bid_price','DESC')->take(1)->get();
            $val->best_user = $lastBid;
//            dd($val->best_user);
        }
        return view('site.mazadat-page', compact('auctions'));
    }
     public function category($id){
        $auctions = Auction::where([['category_id',$id],['status','done']])->paginate(9);
         foreach ($auctions as  $key => $val){
             $bidNumbers = Bid::where('Auction_id',$val->id)->groupBy('user_id')->get();
             $val->count_users = $bidNumbers->count();
         }
         foreach ($auctions as  $key => $val){
             $lastBid = Bid::where('Auction_id',$val->id)->groupBy('user_id')->orderBy('bid_price','DESC')->take(1)->get();
             $val->best_user = $lastBid;
//            dd($val->best_user);
         }
         return view('site.mazadat-page', compact('auctions'));
     }

}
