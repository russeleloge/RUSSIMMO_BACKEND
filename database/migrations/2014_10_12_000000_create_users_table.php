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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId("agence_id")->constrained();
            $table->string('nom', 50);
            $table->string('prenom', 50);
            $table->char('sexe');
            $table->string('code_user', 50);
            $table->string('date_naissance', 20);
            $table->string('lieu_naissance', 50);
            $table->string('lieu_residence', 50)->nullable();
            $table->string('nationalite', 50);
            $table->string('photo')->nullable();
            $table->string('telephone1', 20);
            $table->string('telephone2', 20)->nullable();
            $table->string('pieceIdentite', 50);
            $table->string('numeroPieceIdentite', 50);
            $table->string('proprio', 3)->default("non");
            $table->string('griffe_utilisateur', 10)->nullable();
            $table->string('email', 50)->unique();
            //

            $table->string('code_whatsApp1', 20)->nullable();
            $table->string('code_whatsApp2', 20)->nullable();
            $table->string('code_whatsApp3', 20)->nullable();
            $table->string('date_heure_envoi', 30)->nullable();
            $table->string('date_heure_expiration', 30)->nullable();
            //
            $table->string('code_agence', 50)->nullable();
            $table->string('login', 50)->nullable();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 100);
            // Se souvenir de moi
            $table->rememberToken();

            //Enregistre la date et l'heure des differentes operations effectuées
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign("agence_id");
        });
        Schema::dropIfExists('users');
    }
};
