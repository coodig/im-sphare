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
        Schema::create('github_languages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('repo_id')->constrained('github_repos')->onDelete('cascade');
            $table->string('language');
            $table->float('percentage')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('github_languages');
    }
};
