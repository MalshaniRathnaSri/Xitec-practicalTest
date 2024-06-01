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
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('contact')->nullable();
            $table->date('dob')->nullable();
            $table->text('address')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('firstName');
            $table->dropColumn('lastName');
            $table->dropColumn('contact');
            $table->dropColumn('dob');
            $table->dropColumn('address');
        });
    }
};
