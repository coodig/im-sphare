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
    // public function up(): void
    // {
        // Schema::table('users', function (Blueprint $table) {
        //     DB::table('users')->join('user_profile', 'users.id', '=', 'user_profile.user_id')->update(['users.username' => DB::raw('user_profile.username')]);
        // });

        // Schema::table('users', function (Blueprint $table) {
        //     if(Schema::hasColumn('users', 'name')){
        //         $table->dropColumn('name');
        //     };
        // });


        // Schema::table('users', function (Blueprint $table) {
        //     if (Schema::hasColumn('user_profile', 'username')) {
        //         $table->dropColumn('username');
        //     };
        // });

        public function up(): void
    {
        // Step 0: Ensure users.username exists
        if (!Schema::hasColumn('users', 'username')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('username')->nullable()->after('email');
            });
        }

        // Step 1: Copy data from user_profile.username → users.username
        DB::table('users')
            ->join('user_profile', 'users.id', '=', 'user_profile.user_id')
            ->update([
                'users.username' => DB::raw('user_profile.username')
            ]);

        // Step 2: Drop name from users
        if (Schema::hasColumn('users', 'name')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('name');
            });
        }

        // Step 3: Drop username from user_profile
        if (Schema::hasColumn('user_profile', 'username')) {
            Schema::table('user_profile', function (Blueprint $table) {
                $table->dropColumn('username');
            });
        }
    }
    // }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->nullable();
        });

        Schema::table('user_profile', function (Blueprint $table) {
            $table->string('username')->nullable();
        });
    }
};
