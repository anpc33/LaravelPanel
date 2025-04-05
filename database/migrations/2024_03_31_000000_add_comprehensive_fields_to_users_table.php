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
        Schema::table('users', function (Blueprint $table) {
            // Basic role
            $table->string('role')->default('user')->comment('user, admin');

            // Basic profile
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('profile_picture')->nullable();

            // Account status
            $table->boolean('is_active')->default(true);
            $table->boolean('is_verified')->default(false);
            $table->timestamp('last_login_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'role',
                'address',
                'phone',
                'profile_picture',
                'is_active',
                'is_verified',
                'last_login_at'
            ]);
        });
    }
};
