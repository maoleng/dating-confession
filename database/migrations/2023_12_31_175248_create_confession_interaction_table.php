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
        Schema::create('confession_interaction', function (Blueprint $table) {
            $table->foreignId('confession_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->dateTime('liked_at')->nullable();
            $table->dateTime('watch_later_at')->nullable();
            $table->primary(['confession_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('confession_interaction');
    }
};
