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
        $maxPrice = Bid::where('Auction_id', request('id'))->with('auction','user')->orderBy('bid_price','DESC')->first();
        $auction = Auction::findOrFail($id);

        $bidProcess =  request([
            'user_id' => auth()->user()->id,
            'bid_price',
            'Auction_id',
        ]);
        $bidProcess['user_id'] = auth()->user()->id;
//        ---------------------
        $notifyData = request([
            'from',
            'to',
            'title',
            'body',
        ]);
//        dd($bidProcess);
        if ( $bidProcess['bid_price'] > $auction->start_price && ( $maxPrice == null || $bidProcess['bid_price'] > $maxPrice->bid_price)){
             if (($bidProcess['bid_price'] - $auction -> start_price) % $auction->bid_limit === 0) {
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
                toastr()->error('يجب ان تكون القيمة المضافة مساوية لحد المزايدة أو مضاعفة له ');
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
