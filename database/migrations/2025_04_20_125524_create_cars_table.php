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
//            $table->string('image')->nullable();
//            $table->text('note')->nullable();
//            $table->foreignId('brand_id')->constrained()->onDelete('cascade');
//            $table->year('year');
//            $table->decimal('price', 10, 2);
//            $table->integer('seats');
//            $table->string('status')->default('available');
//            $table->foreignId('category_id')->constrained()->onDelete('cascade');
//            $table->foreignId('color_id')->constrained()->onDelete('cascade');
//            $table->foreignId('payment_id')->nullable()->constrained()->onDelete('cascade');
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
