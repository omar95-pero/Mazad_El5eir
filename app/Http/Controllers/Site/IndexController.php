<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Auction;
use App\Models\Bid;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getIndex()
    {
        $auctionDetailes = Auction::with('user')->get();
        $maxPrice = Bid::max('bid_price');

        return view('site/index', compact('auctionDetailes', 'maxPrice'));
    }
    public function getAuctionAdd()
    {
        return view('front-end.auction-add');
    }
    public function getAbout()
    {
        return view('site.About');
    }
}
