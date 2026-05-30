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
        Schema::create('activity_logs', function (Blueprint $table) {

            $table->id();

            $table->string('table_name');

            $table->unsignedBigInteger('record_id');

            $table->string('action', 50);

            $table->json('old_data')->nullable();

            $table->json('new_data')->nullable();

            $table->unsignedBigInteger('user_id');

            $table->string('ip_address', 100)->nullable();

            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_logs');
    }
};
