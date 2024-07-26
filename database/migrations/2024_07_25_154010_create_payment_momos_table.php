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
        Schema::create('payment_momos', function (Blueprint $table) {
            $table->id('momo_id');
            $table->string('partner_code', 50);
            $table->integer('order_id');
            $table->string('amount', 50);
            $table->string('order_info', 100);
            $table->string('order_type', 50);
            $table->integer('trans_id');
            $table->string('pay_type', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_momos');
    }
};
