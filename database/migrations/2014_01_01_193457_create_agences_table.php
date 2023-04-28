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
        Schema::create('agences', function (Blueprint $table) {
            $table->id();
            $table->string('code_agence',50);
            $table->string('nom',50);
            $table->string('FAX',50)->nullable();
            $table->string('telephone',20);
            $table->string('email',50)->nullable();
            $table->string('boite_postale',20)->nullable();
            $table->string('ville',50)->nullable();
            $table->string('quartier',50)->nullable();
            $table->string('pays',50)->nullable();
            $table->integer('nbre_etages')->nullable();
            $table->string('rue',50)->nullable();
            $table->string('num_contribuable',50)->nullable();
            $table->string('registre_com',50)->nullable();
            $table->string('whatsapp1',20)->nullable();
            $table->string('whatsapp2',20)->nullable();
            $table->string('whatsapp3',20)->nullable();
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
        Schema::dropIfExists('agences');
    }
};
