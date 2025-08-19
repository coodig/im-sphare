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
            $table->unsignedBigInteger('user_id')->nullable()->index();
            $table->string('location')->nullable();
            $table->string('operating_system')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamp('login_time')->useCurrent();
            $table->timestamp('logout_time')->nullable();
            $table->string('login_method')->nullable();
            $table->text('user_agent')->nullable();
            $table->integer('session_duration')->nullable();
            $table->string('session_token')->nullable();
            $table->boolean('is_mobile_device')->default(false);
            $table->boolean('two_factor_used')->default(false);
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
