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
        Schema::create('stock_adjustments', function (Blueprint $table) {

            $table->id();

            $table->foreignId('warehouse_id')
                ->constrained('warehouses');

            $table->foreignId('sku_id')
                ->constrained('skus');

            $table->decimal('old_qty', 12, 2);

            $table->decimal('new_qty', 12, 2);

            $table->text('reason');

            $table->unsignedBigInteger('created_by');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_adjustments');
    }
};
