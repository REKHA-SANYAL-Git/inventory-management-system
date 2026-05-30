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
        Schema::create('inventory_transactions', function (Blueprint $table) {

            $table->id();

            $table->string('transaction_no')->unique();

            $table->string('transaction_type', 50);

            $table->foreignId('warehouse_id')
                ->constrained('warehouses');

            $table->foreignId('sku_id')
                ->constrained('skus');

            $table->decimal('quantity', 12, 2);

            $table->string('reference_type', 50);

            $table->unsignedBigInteger('reference_id');

            $table->text('remarks')->nullable();

            $table->unsignedBigInteger('created_by');

            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_transactions');
    }
};
