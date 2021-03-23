<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;
    protected $guarded = [];
//protected $fillable = ['image',
//                        'item_name',
//                        'address',
//                        'start_price',
//                        'bid_limit',
//                        'start_at',
//                        'end_at',
//                        'item_detailes',
//                        'user_id',
//                        'charity_id',
//    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function charity()
    {

        return $this->belongsTo(Charity::class, 'charity_id');
    }
    public function bid()
    {
        return $this->hasMany(Bid::class, 'Auction_id','id');
    }
    public function auctionView()
    {
        return $this->hasMany(Auction_View::class, 'id');
    }
    public function favorite(){
        return $this->belongsTo(Favorite::class,'Auction_id');
    }
    public function images(){
        return $this->hasMany(Image::class,'auction_id');
    }
}
