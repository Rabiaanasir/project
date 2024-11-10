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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('username');
            $table->string('address');
            $table->string('phone_number');
            $table->boolean('backup_power');
            $table->integer('backup_hour')->nullable(); // Only if backup_power is true
            $table->integer('consumption_watts');
            $table->string('booking_code')->unique(); // Auto-generated booking code
            $table->enum('status', ['pending', 'accepted', 'declined'])->default('pending');
            $table->date('booking_date')->nullable(); // Optional booking date
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
