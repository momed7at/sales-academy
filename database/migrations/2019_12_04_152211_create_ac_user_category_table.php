<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcUserCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ac_user_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('ac_category_id');
            $table->timestamps();

            // forign key to connect users table & category table to user_category table.
            $table->index('user_id');
            $table->index('ac_category_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('ac_category_id')->references('id')->on('ac_categories');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ac_user_category');
    }
}
