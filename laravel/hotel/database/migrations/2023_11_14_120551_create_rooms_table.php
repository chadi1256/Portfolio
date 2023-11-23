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
          Schema::create('rooms', function (Blueprint $table) {
            $table->timestamps();
            $table->id();
            $table->string('room_type');
            $table->string('photo')->nullable();
            $table->integer('room_number');
            $table->float('room_area');
            $table->string('minibar_available');
            $table->integer('capacity');
            $table->string('bath_available');
            $table->float('price_per_night');
          });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
