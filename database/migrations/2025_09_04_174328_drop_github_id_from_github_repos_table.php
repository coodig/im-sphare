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
            //

        // Fir column drop karo
        $table->dropColumn('github_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('github_repos', function (Blueprint $table) {
            //
            $table->bigInteger('github_id')->unsigned()->after('id');

        // Foreign key restore karo
        $table->bigInteger('github_id')->unsigned()->nullable()->after('id');
        });
    }
};
