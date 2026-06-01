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
        Schema::create('hsn_master', function (Blueprint $table) {
            $table->id();

            $table->string('hsn_code', 20);
            $table->text('hsn_description');

            $table->decimal('gst_rate', 5, 2)->nullable();

            $table->date('effective_date')->nullable();

            $table->boolean('status')->default(1);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hsn_master');
    }
};
