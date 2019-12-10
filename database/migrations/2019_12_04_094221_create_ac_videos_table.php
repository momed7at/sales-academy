<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ac_videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('vid_location');
            $table->text('thumbnail');
            $table->string('vid_ar_title')->unique();
            $table->string('vid_en_title')->unique();
            $table->string('vid_ar_summary');
            $table->string('vid_en_summary');
            $table->string('vid_ar_description');
            $table->string('vid_en_description');
            $table->text('script');
            $table->boolean('vid_active')->default(true);
            $table->softDeletes();
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
        Schema::dropIfExists('ac_videos');
    }
}
