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
        Schema::create('attendees', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable()->unique();
            $table->string('title')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('id_passport')->unique()->nullable();
            $table->string('email')->unique();
            $table->string('contact_number')->nullable();
            $table->string('occupation')->nullable();
            $table->string('company')->nullable();
            $table->string('industry')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('region')->nullable();
            $table->string('package')->nullable(); // e.g., VIP, General
            $table->text('disability')->nullable();
            $table->dateTime('register_datetime')->useCurrent();
            $table->string('status')->default('active');
            $table->string('payment_status')->default('unpaid');
            $table->boolean('attendance')->default(false);
            $table->string('ticket_number')->unique()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendees');
    }
};