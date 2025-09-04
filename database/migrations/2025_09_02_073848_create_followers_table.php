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

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('follower_id');

            $table->enum('status',['pending','accepted','blocked'])->default('accepted');

            $table->boolean('is_favorite')->default(0);
            $table->boolean('notifications_enabled')->default(1);
            $table->boolean('muted')->default(0);

            $table->text('remarks')->nullable();

            $table->timestamp('blocked_at')->nullable();
            $table->timestamp('unfollowed_at')->nullable();

            $table->timestamps();

            $table->unique(['user_id','follower_id']);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('follower_id')->references('id')->on('users')->onDelete('cascade');
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
