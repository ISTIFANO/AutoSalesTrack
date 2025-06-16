<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
     protected $table = 'inventory';
    protected $fillable = [
        'VehicleId',
        'Quantity',
    ];
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'VehicleId');
    }
}
