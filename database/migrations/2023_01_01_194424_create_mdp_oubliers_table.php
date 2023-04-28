<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mdp_oubliers', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->nullable();
            $table->foreignId("client_id")->constrained()->nullable();
            $table->string('action',50);
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
        Schema::table('mdp_oubliers', function (Blueprint $table){
            $table->dropForeign(["user_id","client_id"]);
        });
        Schema::dropIfExists('mdp_oubliers');
    }
};
