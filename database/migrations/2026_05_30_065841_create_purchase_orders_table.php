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
        Schema::create('purchase_orders', function (Blueprint $table) {

            $table->id();

            $table->string('po_number')->unique();

            $table->foreignId('supplier_id')
                ->constrained('suppliers');

            $table->foreignId('warehouse_id')
                ->constrained('warehouses');

            $table->date('po_date');

            $table->string('status', 50);

            $table->text('remarks')->nullable();

            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('approved_by')->nullable();

            $table->timestamp('approved_at')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_orders');
    }
};
