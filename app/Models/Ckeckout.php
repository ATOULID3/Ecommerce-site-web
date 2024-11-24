<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ckeckout extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'quantity',
        'total_price',
        'code_promo',
        'address',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
