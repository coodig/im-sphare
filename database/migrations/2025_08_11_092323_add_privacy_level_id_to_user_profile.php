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
        Schema::table('user_profile', function (Blueprint $table) {
            $table->unsignedBigInteger('privacy_level_id')->default(1);
            $table->foreign('privacy_level_id')->references('id')->on('privacy_levels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_profile', function (Blueprint $table) {
            $table->dropForeign(['privacy_level_id']);
            $table->dropColumn('privacy_level_id');
        });
    }
};
