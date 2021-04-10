<?php

namespace App\Http\Controllers\API\Auctions;

use App\Http\Controllers\Controller;
use App\Models\Auction;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Models\Bid;


class AuctionController extends Controller
{
        public function index(){
            $auctions = Auction::where('status','done')->with('charity','user')->orderBy('created_at','DESC')->get();
            return response()->json(["message" => "", 'status' => 200, 'data' => $auctions], 200);
        }


        /*--------------------------------*/
        /*=====Create An Aiction =======*/

        public function create(Request $request){
//            $auctionData = request([
//                'image',
//                'item_name' ,
//                'address',
//                'bid_limit',
//                'start_price',
//                'start_at',
//                'end_at',
//                'item_detailes',
//                'delivery_details',
//                'user_id' ,
//                'charity_id',
//                'category_id',
//
//            ]);
//            $imageData = request([
//                'imag',
//                'img',
//                'imge',
//            ]);
            $validator = Validator::make($request->all(), [
                'image'           =>['image','required'],
                'item_name'       =>['string','max:300','required'],
                'address'         =>['string','max:300','required'],
                'start_price'     =>['required'],
                'bid_limit'       =>['required'],
                'start_at'        =>['required','date'],
                'end_at'          =>['required','date'],
                'item_detailes'   =>['string','max:500','required'],
                'delivery_details'=>['string','max:500','required'],
//              'user_id'         =>[],
//              'charity_id'      =>[],
//              'category_id'     =>[],
                /*-----------------------------------*/
                'imag'            =>['image','required'],
                'img'             =>['image','required'],
                'imge'            =>['image','required'],
            ]);
            if ($validator->fails()) {
                Redirect::to('back');
                return response()->json(["message"=>$validator->errors() ,'status' => 404 ,'data' => null],200);

            } else {
            $auctionData = request([
                'image',
                'item_name' ,
                'address',
                'bid_limit',
                'start_price',
                'start_at',
                'end_at',
                'item_detailes',
                'delivery_details',
                'user_id' ,
                'charity_id',
                'category_id',

            ]);
            $imageData = request([
                'imag',
                'img',
                'imge',
                ]);
                $auctionData['image'] = store_file($request, 'image', "mazad");
//                $auctionData['user_id'] = request()->user()->id;
                $obgAuction =  Auction::create($auctionData);
            }
            /*------------------------------------------------------*/
                $imagesData['imag'] = store_file($request, 'imag', "mazad");
                $imagesData['img']  = store_file($request, 'img', "mazad");
                $imagesData['imge'] = store_file($request, 'imge', "mazad");
                $imagesData['auction_id'] = $obgAuction->id;
//                dd($imagesData);
                Image::create($imagesData);

            return response()->json(["message" => "", 'status' => 200, 'data' => $obgAuction], 200);



        }
        /*--------------------------------*/
        /*====Show One Auction By Id====*/
        public function show($id){
            $auction = Auction::
            where('id',$id)
            ->where('status','done')
            ->with('user','charity','bid')
            ->get();
            return response()->json(["message" => "", 'status' => 200, 'data' => $auction], 200);

        }
        /*-------------------------------*/

       /*=====Get The Best Bid Auction===*/
        public function getBestAuction(){
            $bestAuction = Bid::with('auction.user')->ORDERBY('bid_price', 'DESC')->first();

            return response()->json(["message" => "", 'status' => 200, 'data' => $bestAuction], 200);

        }
}
