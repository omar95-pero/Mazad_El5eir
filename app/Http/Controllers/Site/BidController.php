<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\BidRequest;
use App\Models\Bid;
use Brian2694\Toastr\Toastr;
use Illuminate\Http\Request;

class BidController extends Controller
{
    public function Bid(BidRequest $request)
    {
        // $data = request()->all();
        $maxPrice = Bid::max('bid_price');
        if ($request->bid_price  >  $maxPrice) {
            $bid = Bid::create([
                'user_id' => request()->user()->id,
                'bid_price' => request('bid_price'),
                'Auction_id' => request('Auction_id'),
            ]);
            $bid->save();
            toastr()->success('تم اضافة القيمة بنجاح ');
            return back();
        } else {
            toastr()->error('هذه القيمة غير صالحة ');
            return back();
        }
    }
}
