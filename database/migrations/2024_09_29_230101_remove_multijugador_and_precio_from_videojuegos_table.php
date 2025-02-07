<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('videojuegos', function (Blueprint $table) {
            $table->dropColumn(['multijugador', 'precio']);
        });
    }

    public function down()
    {
        Schema::table('videojuegos', function (Blueprint $table) {
            $table->boolean('multijugador')->default(false);
            $table->decimal('precio', 8, 2)->nullable();
        });
    }
};
