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
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('address_type')->default('home');
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->foreignId('country_id')->constrained('countries');
            $table->foreignId('state_id')->constrained('states');
            $table->foreignId('city_id')->nullable()->constrained('cities');
            $table->string('postal_code', 20)->nullable();
            $table->boolean('is_default')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_addresses');
    }
};
