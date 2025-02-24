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
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to users table
            $table->foreignId('event_id')->constrained()->onDelete('cascade'); // Foreign key to events table
            $table->integer('ticket_qty'); // Quantity of tickets
            $table->decimal('ticket_price', 8, 2); // Price of the tickets
            $table->enum('status', ['pending', 'confirmed', 'cancelled']); // Booking status
            $table->timestamps();
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
