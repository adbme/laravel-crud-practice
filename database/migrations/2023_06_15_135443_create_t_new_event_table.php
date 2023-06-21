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
        Schema::create('t_new_event', function (Blueprint $table) {
            $table->increments('id_new_event');
            $table->string('name_surname_author_new_event', 255)->default('valeur par défaut');
            $table->string('title_new_event', 255);
            $table->text('description_new_event');
            $table->string('join_file_new_event', 255);
            $table->string('join_link_new_event', 255);
            $table->date('date_new_event');
            $table->time('hour_new_event');
            $table->string('room_new_event', 255);
            $table->string('plan_room_new_event', 255);
            $table->integer('num_disposition_new_event');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_new_event');
    }
};
