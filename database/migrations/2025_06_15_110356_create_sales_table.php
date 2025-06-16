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
        Schema::create('sales', function (Blueprint $table) {
          $table->id('SaleId');
            $table->foreignId('VehicleId')->constrained('vehicles', 'VehicleId');
            $table->foreignId('CustomerId')->constrained('customers', 'CustomerId');
            $table->dateTime('SaleDate')->default(now());
            $table->decimal('SalePrice', 10, 2);
            $table->foreignId('PaymentId')->nullable()->constrained('payments', 'PaymentId');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
