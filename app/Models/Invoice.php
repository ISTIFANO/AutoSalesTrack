<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
protected $table = 'invoices';
    protected $fillable = [
        'SaleId',
        'InvoiceDate',
        'TotalAmount',
    ];
     public function sale()
    {
        return $this->belongsTo(Sale::class, 'SaleId');
    }

}
