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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->nullable();
            $table->string('utilisateur_emmeteur',40);
            $table->string('utilisateur_recepteur',40);
            $table->string('intituler',500);
            $table->integer('statut');
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
        Schema::table('messages', function (Blueprint $table) {
            $table->dropForeign("user_id");
        });
        Schema::dropIfExists('messages');
    }
};
