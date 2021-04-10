<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\BidRequest;
use App\Models\Bid;
use App\Models\Auction;
use App\Models\Favorite;
use App\Models\Notification;
use Brian2694\Toastr\Toastr;
use Carbon\Doctrine\DateTimeDefaultPrecision;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;

class BidController extends Controller
{
    public function bidProcess(BidRequest $request , $id)
    {

            double:$maxPrice  = Bid::where('Auction_id', request('id'))->with('auction','user')->orderBy('bid_price','DESC')->first();
            $auction = Auction::findOrFail($id);
        if($maxPrice == null) {
            $maxPrice = $auction->start_price;
        }else{
           $maxPrice  = Bid::where('Auction_id', request('id'))->with('auction','user')->orderBy('bid_price','DESC')->first();

            $maxPrice=$maxPrice->bid_price;
        }
            $bidProcess =  request([
            'user_id' => auth()->user()->id,
            'bid_price',
            'Auction_id',
        ]);
        $bidProcess['user_id'] = auth()->user()->id;
//        dd($maxPrice->bid_price);
//        ---------------------
        $notifyData = request([
            'from',
            'to',
            'title',
            'body',
        ]);
        if ( $bidProcess['bid_price'] > $auction->start_price && ( $maxPrice == null || $bidProcess['bid_price'] > $maxPrice)){
            if ( (($bidProcess['bid_price']-$maxPrice)/$auction->bid_limit) >= 1) {
//            if ($bidProcess['bid_price'] >= ($maxPrice->bid_price + $auction->bid_limit )){
                $bid = Bid::create($bidProcess);
//                ---------------------------------
                 $notifyData['from'] = $bid->user_id ;
                 $notifyData['to'] = $auction->user_id;
//                 dd($notifyData);
                $notification = Notification::create($notifyData);
                toastr()->success('تم اضافة القيمة بنجاح ');
                return back();
            }else{
                toastr()->error('يجب ان تكون القيمة المضافة مساوية لحد المزايدة أو اعلى منه ');
                return back();
            }
        } else {
            toastr()->error('هذه القيمة اقل من اخر قيمة مضافة ');
                 return back();
          }
    }

#========================================Favorite Auction==============================
    public function favoriteAuctions($id){

        $count = Favorite::where([['auction_id',$id],
            ['user_id',auth()->user()->id]])->count();

        if ($count == 0){
            $data['auction_id'] = $id;
            $data['user_id'] = auth()->user()->id;

            Favorite::create($data);

            \toastr()->success('تم الإضافة الى المفضلة');

            return back();

        }else{
            Favorite::where([['auction_id',$id],
                ['user_id',auth()->user()->id]])->delete();


            toastr()->info('تم الحذف من المفضلة');

            return back();
        }



    }
}
