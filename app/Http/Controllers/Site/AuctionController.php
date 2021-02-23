<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\AuctionRequest;
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
        $auctionDetailes = Auction::with('charity', 'user', 'bid')->findOrFail($id);
        $maxPrice = Bid::get('bid_price')->max();
        // $auctio = Auction::findOrFail($id);



        return view('site.auction-details', compact('auctionDetailes', 'maxPrice'));
    }
}
