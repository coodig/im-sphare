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
        Schema::create('readme_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('repo_id')->constrained('github_repos')->onDelete('cascade');
            $table->text('img_url');
            $table->unique(['repo_id', 'img_url']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('readme_images');
    }
};
