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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');  // Nom du client
            $table->string('customer_email');  // Email du client
            $table->enum('method_Pay', ['Credit Card', 'PayPal', 'Cash on Delivery', 'Bank Transfer', 'Apple Pay']);  // Méthode de paiement
            $table->enum('status', ['Pending', 'Completed', 'Canceled', 'Shipped']);  // Statut de la commande
            $table->unsignedBigInteger('product_id');  // ID du produit
            $table->integer('quantity');  // Quantité
            $table->decimal('total_price', 10, 2);  // Prix total
            $table->text('notes')->nullable();  // Notes éventuelles
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
