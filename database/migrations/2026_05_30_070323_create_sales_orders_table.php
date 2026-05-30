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
        Schema::create('sales_orders', function (Blueprint $table) {

            $table->id();

            $table->string('so_number')->unique();

            $table->foreignId('customer_id')
                ->constrained('customers');

            $table->foreignId('warehouse_id')
                ->constrained('warehouses');

            $table->date('so_date');

            $table->string('status', 50);

            $table->text('remarks')->nullable();

            $table->unsignedBigInteger('created_by');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_orders');
    }
};
