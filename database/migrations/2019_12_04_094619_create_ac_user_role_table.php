<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcUserRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ac_user_role', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('ac_role_id');
            $table->timestamps();

            // forign key to connect roles to users.
            $table->index('user_id');
            $table->index('ac_role_id');
            $table->foreign('user_id')->references('id')->on('users');
             $table->foreign('ac_role_id')->references('id')->on('ac_roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ac_user_role');
    }
}
