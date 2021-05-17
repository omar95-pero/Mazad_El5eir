<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Auction;
use Illuminate\Http\Request;

class AuctionsController extends Controller
{
    public function index()
    {
        $getAuctions = Auction::orderBy('created_at','DESC')->get();

        return view('Admin.Admin.auctions',compact('getAuctions'))->with('n',0);

    }
    public function show($id)
    {
        $auction_details = Auction::with('user','charity')->findOrFail($id);

        return view('Admin.Admin.auction_details',compact('auction_details'));

    }
    public function AuctionStatus( $id){
         $state = Auction::findOrFail($id);
        if ($state->status == 'cancel'){
            $state = Auction::where('id',$id)->update(['status'=>'done']);
        }elseif($state->status == 'done'){
            $state = Auction::where('id',$id)->update(['status'=>'cancel']);
        }
        return back();
    }
    public function is_special( $id){
        $specialState = Auction::findOrFail($id);
        if ($specialState->is_special == 'no'){
            $specialState = Auction::where('id',$id)->update(['is_special'=>'yes']);
        }elseif($specialState->is_special == 'yes'){
            $specialState = Auction::where('id',$id)->update(['is_special'=>'no']);
        }
        return back();
    }


    public function destroyAuction($id){

        $state = Auction::findOrFail($id);

        $state->delete();
        return back();
    }
}
