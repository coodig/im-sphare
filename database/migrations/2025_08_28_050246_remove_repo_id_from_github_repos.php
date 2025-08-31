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
        Schema::table('github_repos', function (Blueprint $table) {
            $table->dropUnique('github_repos_repo_id_unique');
            $table->dropColumn('repo_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('github_repos', function (Blueprint $table) {
            $table->unsignedBigInteger('repo_id')->nullable();
            $table->unique('repo_id','github_repos_repo_id_unique');
        });
    }
};
