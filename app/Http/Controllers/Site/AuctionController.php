<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\AuctionRequest;
use Illuminate\Support\Carbon;
use App\Models\User;
use App\Models\Auction;
use App\Models\Charity;
use App\Models\Bid;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
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
        }
        $data['user_id'] = request()->user()->id;
        Auction::create($data);

        return redirect()->route('index');
    }
    public function getAllAuctions()
    {
        $auctions = Auction::with('charity')->get();
        // dd($auctions);
        return view('site.mazadat-page', compact('auctions'));
    }
    public function auctionDetails($id)
    {
        $auctionDetailes = Auction::with('user')->findOrFail($id);
        $maxPrice = Bid::where('auction_id', $id)->max('bid_price');

        $bids = Bid::where('auction_id', $id)
            ->orderBy('bid_price', 'desc')
            ->take(4)
            ->get();
        // dd([$auctionDetailes, $maxPrice, $bids]);
        return view('site.auction-details', compact('auctionDetailes', 'maxPrice', 'bids'));
    }
}
