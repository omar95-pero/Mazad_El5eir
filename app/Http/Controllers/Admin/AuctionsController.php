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
    public function AuctionStatus( $id){
         $state = Auction::findOrFail($id);
        if ($state->status == 'cancel'){
            $state = Auction::where('id',$id)->update(['status'=>'done']);
        }elseif($state->status == 'done'){
            $state = Auction::where('id',$id)->update(['status'=>'cancel']);
        }
        return back();
    }


    public function destroyAuction($id){

        $state = Auction::findOrFail($id);

        $state->delete();
        return back();
    }
}
