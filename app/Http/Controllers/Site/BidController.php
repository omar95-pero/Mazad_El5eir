<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\BidRequest;
use App\Models\Bid;
use App\Models\Auction;
use Brian2694\Toastr\Toastr;
use Illuminate\Http\Request;

class BidController extends Controller
{
    public function bidProcess(BidRequest $request,$id)
    {
        $maxPrice = Bid::where('Auction_id', request('id'))->with('auction')->orderBy('bid_price','DESC')->first();
//        dd($maxPrice);
        $data = request([
            'user_id' => request()->user()->id,
            'bid_price' ,
            'Auction_id',
        ]);
        if ($data['bid_price'] > $maxPrice->auction->start_price & $data['bid_price'] > $maxPrice->bid_price){
            $bid = Bid::create($data)->save();
            toastr()->success('تم اضافة القيمة بنجاح ');
                 return back();
             } else {
            toastr()->error('هذه القيمة غير صالح ');
                 return back();
          }
    }
}
