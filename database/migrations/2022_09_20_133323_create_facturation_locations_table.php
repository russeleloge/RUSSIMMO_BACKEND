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
        Schema::create('facturation_locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contrat_id')->constrained();
            $table->foreignId('paiement_id')->constrained();
            $table->foreignId('user_id')->constrained()->nullable();
            $table->foreignId('client_id')->constrained();
            $table->integer('intervalle_validite');
            $table->string('debut',20);
            $table->string('fin',20);
            $table->string('code_agence',50);
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
        Schema::table('facturation_locations', function (Blueprint $table){
            $table->dropForeign(["user_id","client_id","contrat_id","paiement_id"]);
        });
        Schema::dropIfExists('facturation_locations');
    }
};
