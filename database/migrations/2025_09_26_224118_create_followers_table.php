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
        Schema::create('followers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('follower_id')->constrained('users')->onDelete('cascade');
            $table->enum('status', ['pending','accepted','declined'])->default('pending');
            $table->boolean('is_favorite')->default(false);
            $table->boolean('notifications_enabled')->default(true);
            $table->boolean('muted')->default(false);
            $table->string('remarks')->nullable();
            $table->timestamp('blocked_at')->nullable();
            $table->timestamp('unfollowed_at')->nullable();
            $table->timestamps();

             $table->unique(['user_id','follower_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('followers');
    }
};
