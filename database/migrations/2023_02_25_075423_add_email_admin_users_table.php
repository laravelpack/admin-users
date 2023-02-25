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
        Schema::table(config('admin.database.users_table'), function (Blueprint $table) {
            $table->after('name', function (Blueprint $table) {
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table(config('admin.database.users_table'), function (Blueprint $table) {
            $table->dropColumn('email');
            $table->dropColumn('email_verified_at');
        });
    }
};
