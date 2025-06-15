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
        Schema::create('service_records', function (Blueprint $table) {
            $table->id('ServiceRecordId');
            $table->foreignId('VehicleId')->constrained('vehicles', 'VehicleId');
            $table->dateTime('ServiceDate')->nullable();
            $table->text('Description')->nullable();
            $table->decimal('Cost', 10, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_records');
    }
};
