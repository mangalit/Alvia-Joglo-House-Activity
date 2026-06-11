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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category')->nullable();
            $table->string('min_booking_info')->nullable();
            $table->string('price_info')->nullable();
            $table->string('card_title')->nullable();
            $table->text('description')->nullable();
            $table->string('bg_image')->nullable();
            $table->json('images')->nullable();
            $table->boolean('is_reverse')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
