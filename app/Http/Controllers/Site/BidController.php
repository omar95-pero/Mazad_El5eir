<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Bid;
use Illuminate\Http\Request;

class BidController extends Controller
{
    public function Bid(Request $request)
    {
        $bid = Bid::create([
            'bid_price' => request('bid_price'),
            'Auction_id' => request('Auction_id'),
        ]);
        $bid->save();
        return back();
    }
}
