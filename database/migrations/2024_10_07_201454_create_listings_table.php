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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
        $table->unsignedBigInteger('brand_id'); // Foreign key column
        $table->string('title');
        $table->longText('description');
        $table->string('image')->nullable();
        $table->integer('watts');
        $table->decimal('price', 8, 2);
        $table->timestamps();


        $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
