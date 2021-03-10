<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Auction;
use Illuminate\Http\Request;

class AuctionsController extends Controller
{
    public function index()
    {
        $getAuctions = Auction::get();

        return view('Admin.Admin.auctions',compact('getAuctions'));

    }
}
