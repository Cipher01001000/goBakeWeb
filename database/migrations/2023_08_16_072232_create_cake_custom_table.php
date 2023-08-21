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
        Schema::create('cake_customs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->json('cake_type')->nullable();
            $table->json('cake_type_price')->nullable();
            $table->json('cake_shape')->nullable();
            $table->json('cake_shape_price')->nullable();
            $table->json('cake_size')->nullable();
            $table->json('cake_size_price')->nullable();
            $table->json('cake_layer')->nullable();
            $table->json('cake_layer_price')->nullable();
            $table->json('image_decoration')->nullable();
            $table->json('cake_decoration')->nullable();
            $table->json('cake_decoration_price')->nullable();
            $table->json('image_topper')->nullable();
            $table->json('cake_topper')->nullable();
            $table->json('cake_topper_price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cake_custom');
    }
};
