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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->string('collection_name')->nullable();

            $table->string('file_type')->default('image')->nullable();
            $table->string('mime_type')->nullable();
            $table->string('disk')->default('public');

            $table->text('file_name')->nullable();
            $table->string('file_url')->nullable();

            $table->string('original_name')->nullable();

            $table->unsignedBigInteger('file_size')->nullable();
            $table->nullableMorphs('mediable');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
