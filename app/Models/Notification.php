<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $guarded=[];



//    ------------------
    public function auction(){
        return $this->belongsTo(Auction::class,'to');
    }

//    -----------------
    public function bid(){
        return $this->belongsTo(Bid::class,'from');
    }
    public function user(){
        return $this->belongsTo(User::class,'from');
    }

}
