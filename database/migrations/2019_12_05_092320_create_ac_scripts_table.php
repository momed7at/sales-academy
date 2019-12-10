<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcScriptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ac_scripts', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('vid_id');
            $table->text('scr_location');
            // $table->string('scr_ar_title')->unique();
            $table->string('scr_en_title')->unique();
            $table->softDeletes();
            $table->timestamps();

            // forign key to connect scripts to videos.
            $table->index('vid_id');
            $table->foreign('vid_id')->references('id')->on('ac_videos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ac_scripts');
    }
}
