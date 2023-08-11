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
        Schema::create('balances', function (Blueprint $table) {
            $table->id();
            $table->enum('operation_type', ['topup', 'transfer', 'receive', 'withdraw']);
            $table->enum('target_type', ['user', 'merchant', 'cash']);
            $table->unsignedBigInteger('target_id');
            $table->enum('source_type', ['user', 'merchant', 'cash']);
            $table->unsignedBigInteger('source_id');
            $table->unsignedBigInteger('amount');
            $table->timestamps();

            $table->foreign('target_id')
                ->on('users')
                ->references('id')
                ->cascadeOnDelete();

            $table->foreign('source_id')
                ->on('users')
                ->references('id')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balances');
    }
};
