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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->boolean('is_dark_mode')->default(false);
            $table->boolean('is_notification')->default(false);
            $table->dateTime('premium_until')->default(null);
            $table->string('facebook_id')->nullable();
            $table->string('google_id')->nullable();
            $table->string('login_url')->nullable();
            $table->dateTime('created_at')->default(now());
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('confessions');
    }
};
