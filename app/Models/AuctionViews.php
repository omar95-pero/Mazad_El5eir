<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuctionViews extends Model
{
    use HasFactory;
   protected $table = 'views';
    public static function createViewLog($auction) {
        $auctionViews= new AuctionViews();
        $auctionViews->auction_id = $auction->id;
        $auctionViews->url = \Request::url();
        $auctionViews->session_id = \Request::getSession()->getId();
        $auctionViews->user_id = \Auth::user()->id;
        $auctionViews->ip = \Request::getClientIp();
        $auctionViews->agent = \Request::header('User-Agent');
        $auctionViews->save();
    }
}
