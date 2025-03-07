<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'client_id', 'review', 'rating'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function client()
    {
        return $this->belongsTo(client::class);
    }
}

