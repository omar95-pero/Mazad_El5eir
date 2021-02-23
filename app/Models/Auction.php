<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;
    protected $guarded = [];

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
        return $this->hasMany(Bid::class, 'Auction_id');
    }
}
