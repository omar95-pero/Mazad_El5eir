<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dlivery_Details extends Model
{
    use HasFactory;
    protected $table = "dlivery_details";
    protected $guarded =[];


    public function govrnate(){
        return $this->belongsTo(Govrnate::class,'govrnate_id');
    }
    public  function auction(){
        return $this->belongsTo(Auction::class,'Auction_id');
    }

}
