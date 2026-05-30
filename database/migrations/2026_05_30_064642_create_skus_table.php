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
        Schema::create('skus', function (Blueprint $table) {

            $table->id();

            $table->foreignId('product_id')
                ->constrained('products');

            $table->foreignId('hsn_id')
                ->constrained('hsn_master');

            $table->string('sku_code')->unique();
            $table->string('sku_name');

            $table->text('sku_description')->nullable();

            $table->string('unit_of_measure', 50);

            $table->integer('reorder_level')->default(0);

            $table->boolean('status')->default(1);

            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skus');
    }
};
