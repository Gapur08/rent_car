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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->text('note')->nullable();
            $table->unsignedBigInteger('brand_id');
            $table->year('year');
            $table->decimal('price', 10, 2);
            $table->unsignedBigInteger('color_id');
            $table->integer('seats');
            $table->string('status')->default('available');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('payment_id')->nullable();
            $table->string('model');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
