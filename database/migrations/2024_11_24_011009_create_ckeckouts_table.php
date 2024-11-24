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
        Schema::create('ckeckouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id'); // Reference to the product
            $table->integer('quantity')->default(1); // Quantity of the product
            $table->decimal('total_price', 10, 2); // Total price of the checkout
            $table->string('code_promo')->nullable(); // Promo code applied
            $table->text('address')->nullable(); // Shipping or billing address
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ckeckouts');
    }
};
