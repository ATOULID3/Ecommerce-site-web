<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    public function up()
    {
        Schema::create('orderItems', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('method_pay'); // Payment method
            $table->string('status');     // Order status
            $table->json('products');     // Store product details as JSON
            $table->decimal('total_price', 10, 2); // Total price of the order
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orderItems');
    }
}

