<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->default()->auth()->id();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('image');
            $table->string('item_name');
            $table->string('address');
            $table->string('item_detailes');
            $table->string('start_price');
            $table->dateTime('start_at', $precision = 0);
            $table->dateTime('end_at', $precision = 0);
            $table->unsignedBigInteger('charity_id');
            $table->foreign('charity_id')->references('id')->on('charities')->onDelete("cascade");
            $table->string('_token');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auctions');
    }
}
