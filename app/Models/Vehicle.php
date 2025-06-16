<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
      protected $table = 'vehicles';
    protected $fillable = [
        'Make',
        'Model',
        'Year',
        'VIN',
        'Color',
        'Price',
    ];
    public function inventory()
    {
        return $this->hasMany(Inventory::class, 'VehicleId');
    }
    public function sales()
    {
        return $this->hasMany(Sale::class, 'VehicleId');
    }
    public function serviceRecords()
    {
        return $this->hasMany(ServiceRecord::class, 'VehicleId');
    }
    public function testDrives()
    {
        return $this->hasMany(TestDrive::class, 'VehicleId');
    }
}
