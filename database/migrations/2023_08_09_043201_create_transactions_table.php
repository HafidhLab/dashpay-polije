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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('user_merchant');
            
            $table->string('name_item');
            $table->string('price_product');
            $table->string('total');
            $table->enum('status', ['paid', 'unpaid', 'failed', 'canceled']);
            $table->string('information')->nullable();

            $table->timestamps();
            
            $table->foreign('user_id')->on('users')
                        ->references('id')
                        ->cascadeOnDelete()
                        ->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
