<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sales';
    protected $fillable = [
        'VehicleId',
        'CustomerId',
        'SaleDate',
        'SalePrice',
        'PaymentId',
    ];
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'VehicleId');
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'CustomerId');
    }
    public function payment()
    {
        return $this->belongsTo(Payment::class, 'PaymentId');
    }
    public function invoice()
    {
        return $this->hasOne(Invoice::class, 'SaleId');
    }
}
