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
        Schema::create('github_repos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('github_id')->nullable()->unique();
            $table->string('repo_id')->unique();
            $table->string('name');
            $table->string('full_name')->nullable();
            $table->text('description')->nullable();
            $table->string('html_url');
            $table->string('clone_url');
            $table->string('default_branch')->nullable();
            $table->integer('stars')->default(0);
            $table->integer('forks')->default(0);
            $table->integer('watchers')->default(0);
            $table->timestamp('pushed_at')->nullable();
            $table->timestamp('created_at_github')->nullable();
            $table->boolean('is_private')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('github_repos');
    }
};
