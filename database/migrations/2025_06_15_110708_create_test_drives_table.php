<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('test_drives', function (Blueprint $table) {
      $table->id('TestDriveId');
            $table->foreignId('CustomerId')->constrained('customers', 'CustomerId');
            $table->foreignId('VehicleId')->constrained('vehicles', 'VehicleId');
            $table->dateTime('TestDriveDate')->nullable();
            $table->string('Status', 20)->default('Scheduled');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_drives');
    }
};
