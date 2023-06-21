<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t_user_t_user_role', function (Blueprint $table) {
            $table->integer('id_user')->unsigned();
            $table->integer('id_role')->unsigned();
            $table->foreign('id_user')->references('id_user')->on('t_user');
            $table->foreign('id_role')->references('id_role')->on('t_role');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_user_t_user_role');
    }
};
