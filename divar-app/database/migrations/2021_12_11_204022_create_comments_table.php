<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{

    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("ad_id")->unsigned();
            $table->text("description");
            $table->foreign('ad_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
