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
        Schema::create('sponsors', function (Blueprint $table) {
            $table->id();
            // Individual Representative Details
            $table->string('title')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender')->nullable();
            $table->string('id_passport')->unique();
            $table->string('citizenship')->nullable();
            $table->string('city_town')->nullable();
            $table->string('email')->unique();
            $table->string('contact_number');
            $table->string('occupation')->nullable();

            // Company Details
            $table->string('company');
            $table->string('company_contact_number')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('website')->nullable();
            $table->string('industry')->nullable();
            $table->string('region')->nullable();

            // Sponsorship / Event Details
            $table->string('package'); // e.g., Gold, Silver, Platinum
            $table->dateTime('register_datetime')->useCurrent();
            $table->string('status')->default('active');
            $table->string('payment_status')->default('pending');
            $table->string('ticket_number')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sponsors');
    }
};