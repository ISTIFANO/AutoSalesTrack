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
        Schema::create('payments', function (Blueprint $table) {
         $table->id('PaymentId');
            $table->foreignId('SaleId')->constrained('sales', ' SaleId');
            $table->dateTime('PaymentDate')->default(now());
            $table->decimal('Amount', 10, 2);
            $table->string('PaymentMethod', 50)->nullable();
            $table->string('Status', 20)->default('Pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
