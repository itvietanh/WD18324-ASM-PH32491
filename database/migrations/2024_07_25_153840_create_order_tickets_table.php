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
        Schema::create('order_tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('account_id');
            $table->unsignedBigInteger('show_time_frame_id');
            $table->unsignedBigInteger('film_id');
            $table->unsignedBigInteger('room_id');
            $table->unsignedBigInteger('cinema_id');
            $table->date('show_date');
            $table->text('seat_order');
            $table->float('price');
            $table->date('order_date');
            $table->integer('quantity');
            $table->text('qr_code');
            $table->integer('order_id');
            $table->string('status', 50);
            $table->timestamps();

            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->foreign('show_time_frame_id')->references('id')->on('show_time_frames')->onDelete('cascade');
            $table->foreign('film_id')->references('id')->on('films')->onDelete('cascade');
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
            $table->foreign('cinema_id')->references('id')->on('cinemas')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_tickets');
    }
};
