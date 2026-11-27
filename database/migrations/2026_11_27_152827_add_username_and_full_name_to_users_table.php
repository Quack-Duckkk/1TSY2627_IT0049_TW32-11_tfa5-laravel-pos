<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'full_name');
            $table->string('username')->nullable()->unique();
        });

        // Give existing users unique usernames before making them required.
        foreach (DB::table('users')->select('id')->get() as $user) {
            DB::table('users')
                ->where('id', $user->id)
                ->update([
                    'username' => 'user' . $user->id,
                ]);
        }

        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->nullable(false)->change();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique(['username']);
            $table->dropColumn('username');
            $table->renameColumn('full_name', 'name');
        });
    }
};