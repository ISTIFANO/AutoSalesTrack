<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
      protected $table = 'customers';
    protected $fillable = [
        'FirstName',
        'LastName',
        'Email',
        'Phone',
    ];
    public function sales()
    {
        return $this->hasMany(Sale::class, 'CustomerId');
    }
    public function testDrives()
    {
        return $this->hasMany(TestDrive::class, 'CustomerId');
    }
}
