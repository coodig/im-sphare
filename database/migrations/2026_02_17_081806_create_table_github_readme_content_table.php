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
        Schema::create('table_github_readme_content', function (Blueprint $table) {
            $table->id();
            $table->foreignId('repo_id')->constrained('github_repos')->onDelete('cascade');
            $table->longText('readme_content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_github_readme_content');
    }
};
