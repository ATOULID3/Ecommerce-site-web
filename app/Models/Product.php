<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
        'barcode',
        'description',
        'image',
        'size',
        'color',
        'quantity',
        'price',
        'vendor',
        'collection',
    ];
    public function orders()
{
    return $this->hasMany(Order::class, 'product_id');
}

}
