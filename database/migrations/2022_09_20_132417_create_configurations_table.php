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
        Schema::create('configurations', function (Blueprint $table) {
            $table->id();
            $table->string('code_config', 100);
            $table->foreignId("bien_id")->constrained();
            $table->foreignId("user_id")->constrained();
            $table->foreignId("type_configuration_id")->constrained();
            $table->string('code_type_chambre', 100)->nullable();
            $table->string('note_etat', 50)->default("Libre Propre");
            $table->string('num_porte', 5);
            $table->double('superficie')->nullable();
            $table->double('prix_mensuel')->nullable();
            $table->integer('nombre_pieces')->nullable();
            $table->integer('prix_journalier')->nullable();
            $table->integer('prix_caution')->nullable();
            $table->string('code_agence', 100);
            $table->string('localisation', 30)->nullable(); //niveau 1
            $table->string("commentaires")->nullable();
            $table->string('autorisation_nettoyage', 20)->nullable();
            $table->integer('statut')->default(0);
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
        Schema::table('configurations', function (Blueprint $table){
            $table->dropForeign(["type_configuration_id","bien_id","user_id"]);
        });
        Schema::dropIfExists('configurations');
    }
};
