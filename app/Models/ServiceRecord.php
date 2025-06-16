<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceRecord extends Model
{
     protected $table = 'service_records';
    protected $fillable = [
        'VehicleId',
        'ServiceDate',
        'Description',
        'Cost',
    ];
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'VehicleId');
    }
}
