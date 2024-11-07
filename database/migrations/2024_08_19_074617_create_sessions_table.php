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
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // Primary key column
            $table->unsignedBigInteger('user_id')->nullable(); // Foreign key for user ID, nullable in case of guest sessions
            $table->text('payload'); // Column to store session data
            $table->integer('last_activity'); // Timestamp for last activity
            $table->string('ip_address')->nullable(); // IP address, nullable
            $table->string('user_agent')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
