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
            $table->unsignedBigInteger('repo_id');
            $table->string('alt_text')->nullable();
            $table->string('img_url');
            $table->timestamps();

            $table->foreign('repo_id')->references('id')->on('github_repos')->onDelete('cascade');
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
