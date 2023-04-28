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
        Schema::create('contrats', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->nullable();
            $table->foreignId("client_id")->constrained();
            $table->foreignId("configuration_id")->constrained();
            $table->integer('durer_location');
            $table->string('debut',20);
            $table->string('fin',20);
            $table->double('caution')->nullable();
            $table->string('code_agence',50);
            $table->integer('nbre_fois_imprimer');
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
        Schema::table('contrats', function (Blueprint $table){
            $table->dropForeign(["user_id","client_id","configuration_id"]);
        });
        Schema::dropIfExists('contrats');
    }
};
