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
            $table-> unsignedBigInteger('collection_id');
            $table-> string('collection_status');
            $table->unsignedBigInteger('payment_id');
            $table-> string('payment_type');
            $table-> string('status');
            $table-> unsignedBigInteger('merchant_order_id');
            $table-> string('preference_id');
            $table->date('transactions_date')->default(now());
            $table->timestamps();
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
