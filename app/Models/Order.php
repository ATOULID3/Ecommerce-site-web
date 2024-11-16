<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_name',
        'customer_email',
        'method_Pay',
        'status',
        'product_id',
        'quantity',
        'total_price',
        'notes',
    ];
    public function product()
{
    return $this->belongsTo(Product::class, 'product_id');
}
}
