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
        Schema::create('user_bien', function (Blueprint $table) {
            $table->foreignId("user_id")->constrained();
            $table->foreignId("bien_id")->constrained();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('user_bien', function (Blueprint $table) {
            $table->dropForeign("user_id");
            $table->dropForeign("bien_id");
        });
        Schema::dropIfExists('user_bien');
    }
};
