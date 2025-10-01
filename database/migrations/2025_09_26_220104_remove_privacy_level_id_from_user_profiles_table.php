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
        Schema::table('user_profiles', function (Blueprint $table) {
            //
            if (Schema::hasColumn('user_profiles', 'privacy_level_id')) {
                $table->dropColumn('privacy_level_id');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_profiles', function (Blueprint $table) {
            //
             $table->foreignId('privacy_level_id')->nullable()->constrained('privacy_levels')->onDelete('set null');
        });
    }
};
