<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('user'); // User name
            $table->string('email'); // User email
            $table->date('booking_date'); // Booking date
            $table->enum('status', ['pending', 'confirmed', 'completed', 'canceled']); // Booking status
            $table->string('booking_code')->unique(); // Unique booking code
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
