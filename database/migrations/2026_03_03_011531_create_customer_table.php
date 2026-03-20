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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('booking_id')->unique();
            $table->string('firstname');
            $table->string('lastname');
            $table->enum('room_type', ['Standard', 'Deluxe', 'Grand Deluxe']);
            $table->integer('room_number');
            $table->date('checkin_date');
            $table->date('checkout_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
