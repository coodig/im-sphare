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
        Schema::create('login_activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('status_id')->constrained('status')->onDelete('cascade');
            $table->string('ip_address')->nullable();
            $table->string('user_agent')->nullable();
            $table->string('os')->nullable();
            $table->string('device_type')->nullable();

            $table->string('failure_reason')->nullable();
            $table->string('session_id')->nullable();
            $table->string('login_type')->default('email');

            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('login_activities');
    }
};
