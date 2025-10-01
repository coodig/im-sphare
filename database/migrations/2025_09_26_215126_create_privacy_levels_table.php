<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('privacy_levels', function (Blueprint $table) {
            $table->id();
            Schema::create('privacy_levels', function (Blueprint $table) {
                $table->id(); // BIGINT UNSIGNED primary key
                $table->string('name'); // e.g., 'Public', 'Friends', 'Private'
                $table->text('description')->nullable(); // Optional description
                $table->timestamps();
            });

            // Optionally, seed some default privacy levels
            DB::table('privacy_levels')->insert([
                ['name' => 'Public', 'description' => 'Visible to everyone', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Friends', 'description' => 'Visible to friends only', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Private', 'description' => 'Visible only to me', 'created_at' => now(), 'updated_at' => now()],
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('privacy_levels');
    }
};
