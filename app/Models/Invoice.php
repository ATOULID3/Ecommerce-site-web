<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice',
        'date_issued',
        'due_date',
        'invoice_to',
        'total_due',
        'bank_name',
        'iban',
        'swift',
    ];
        // Relationship with InvoiceItem
        public function items()
        {
            return $this->hasMany(InvoiceItem::class);
        }
}
