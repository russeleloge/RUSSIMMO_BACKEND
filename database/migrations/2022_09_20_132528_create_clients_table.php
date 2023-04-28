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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 50);
            $table->string('prenom', 50);
            $table->char('sexe');
            $table->string('date_naissance', 20);
            $table->string('nationalite', 50);
            $table->string('profession', 50);
            $table->string('lieu_naissance', 50);
            $table->string('lieu_residence', 50);
            $table->string('email', 50);
            $table->string('code_client', 50);
            $table->string('code_agence', 50);
            $table->string('photo')->nullable();
            $table->string('telephone1', 20);
            $table->string('telephone2', 20)->nullable();
            $table->string('pieceIdentite', 50);
            $table->string('numeroPieceIdentite', 50);
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
        Schema::dropIfExists('clients');
    }
};
