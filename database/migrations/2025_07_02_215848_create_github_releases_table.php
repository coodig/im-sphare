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
        Schema::create('github_releases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('repo_id')->constrained('github_repos')->onDelete('cascade');
            $table->string('tag_name');
            $table->string('name')->nullable();
            $table->text('body')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->string('html_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('github_releases');
    }
};
