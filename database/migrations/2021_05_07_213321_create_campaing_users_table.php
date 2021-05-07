<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaingUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaing_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campaing_id');
            $table->unsignedBigInteger('user_id');
            $table->enum('status',['in_progress','success','deactive'])->default('in_progress');
            $table->timestamps();

            $table->foreign('campaing_id')->references('id')->on('campaings')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaing_users');
    }
}
