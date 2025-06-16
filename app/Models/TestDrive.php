<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestDrive extends Model
{
     protected $table = 'test_drives';
    protected $fillable = [
        'CustomerId',
        'VehicleId',
        'TestDriveDate',
        'Status',
    ];
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'CustomerId');
    }
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'VehicleId');
    }
}
