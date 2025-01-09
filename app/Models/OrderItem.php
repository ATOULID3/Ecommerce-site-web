<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'customer_email',
        'method_pay',
        'status',
        'products',
        'total_price',
    ];

    protected $casts = [
        'products' => 'array',
    ];
}

