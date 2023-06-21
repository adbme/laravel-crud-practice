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
        Schema::create('t_user_new_event', function (Blueprint $table) {
            $table->integer('id_user')->unsigned();
            $table->integer('id_new_event')->unsigned();
            $table->foreign('id_user')->references('id_user')->on('t_user');
            $table->foreign('id_new_event')->references('id_new_event')->on('t_new_event');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_user_new_event');
    }
};
