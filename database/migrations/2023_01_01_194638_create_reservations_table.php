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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->nullable();
            $table->foreignId("client_id")->constrained();
            $table->foreignId("configuration_id")->constrained();
            $table->string("code_reservation",50);
            $table->string("code_local",50);
            $table->string("nom_client",50);
            $table->string("date_entrer",20);
            $table->string("date_sortie",20);
            $table->double("caution",8);
            $table->string("type",50);
            $table->double("montant_accorder",8);
            $table->double("solde_reservation",8);
            $table->string("code_agence",50);
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
        Schema::table('reservations', function (Blueprint $table){
            $table->dropForeign(["user_id","client_id","configuration_id"]);
        });
        Schema::dropIfExists('reservations');
    }
};
