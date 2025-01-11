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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->text('amount')->nullable();
            $table->text('currency')->nullable();
            $table->text('app_fee')->nullable();
            $table->text('payment_type')->nullable();
            $table->text('amount_settled')->nullable();
            $table->text('ref')->nullable();
            $table->text('status')->nullable();
            $table->text('today')->nullable();
            $table->text('any1')->nullable();
            $table->text('any2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
