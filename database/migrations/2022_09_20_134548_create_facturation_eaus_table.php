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
        Schema::create('facturation_eaus', function (Blueprint $table) {
            $table->id();
            $table->double('ancien_index');
            $table->double('nouveau_index');
            $table->foreignId('user_id')->constrained()->nullable();
            $table->foreignId('client_id')->constrained();
            $table->double('montant');
            $table->string('date_limite');
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
        Schema::table('facturation_eaus', function (Blueprint $table){
            $table->dropForeign(["user_id","client_id"]);
        });
        Schema::dropIfExists('facturation_eaus');
    }
};
