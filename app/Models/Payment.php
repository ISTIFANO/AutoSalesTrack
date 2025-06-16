<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
     protected $table = 'payments';
    protected $fillable = [
        'SaleId',
        'PaymentDate',
        'Amount',
        'PaymentMethod',
        'Status',
    ];
    public function sale()
    {
        return $this->belongsTo(Sale::class, 'SaleId');
    }
}
