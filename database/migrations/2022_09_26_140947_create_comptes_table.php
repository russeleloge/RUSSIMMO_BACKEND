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
        Schema::create('comptes', function (Blueprint $table) {
            $table->id();
            $table->foreignId("bien_id")->constrained();
            $table->string('intule',50);
            $table->string('num_pers',50);
            $table->string('code_pers',50);
            $table->double('total_debit');
            $table->double('total_credit');
            $table->double('solde')->default(0);
            $table->string('sens',20);
            $table->double('plafond')->default(0);
            $table->string('date_lim_paiement',20);
            $table->string('Personne_a_contacter',50);
            $table->string('telephone',20);
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
        Schema::table('comptes', function (Blueprint $table) {
            $table->dropForeign("bien_id");
        });
        Schema::dropIfExists('comptes');
    }
};
