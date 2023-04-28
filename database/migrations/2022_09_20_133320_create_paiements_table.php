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
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->nullable();
            $table->foreignId("client_id")->constrained();
            $table->string('motif',100);
            $table->integer('montant');
            $table->string('mode',50);
            $table->string('code_agence',50);
            $table->string('code_user',50);
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
        Schema::table('paiements', function (Blueprint $table) {
            $table->dropForeign(["user_id", "client_id"]);
        });
        Schema::dropIfExists('paiements');
    }
};
