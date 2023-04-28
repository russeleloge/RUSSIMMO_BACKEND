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
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->foreignId("agence_id")->constrained();
            $table->foreignId("user_id")->constrained();
            $table->string('nom', 50);
            $table->integer('nbre_etages');
            $table->string('superficie', 20);
            $table->string('pays', 50);
            $table->string('quartier', 50);
            $table->string('localisation', 50)->nullable();
            $table->string('titre_foncier', 50)->nullable();
            $table->string('vente', 3)->default("Non");
            $table->double('valeur')->nullable(); //prix
            $table->string('ville', 50);
            $table->string('description', 50)->nullable();
            $table->string('photo')->nullable();
            $table->string('code_agence', 50);
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
        Schema::table('biens', function (Blueprint $table) {
            $table->dropForeign(["agence_id", "user_id"]);
        });
        Schema::dropIfExists('biens');
    }
};
