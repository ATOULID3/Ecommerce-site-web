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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status');
            $table->string('barcode')->unique();
            $table->text('description')->nullable();
            $table->string('image')->unique();
            $table->string('size');
            $table->string('color');
            $table->string('quantity');
            $table->string('price');
            $table->string('vendor');
            $table->string('collection');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};