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
        Schema::create('vehicles', function (Blueprint $table) {
          $table->id('VehicleId');
            $table->string('Make', 50);
            $table->string('Model', 50);
            $table->integer('Year');
            $table->string('VIN', 17)->unique();
            $table->string('Color', 30)->nullable();
            $table->decimal('Price', 10, 2);
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
