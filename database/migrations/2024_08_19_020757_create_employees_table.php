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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('full_name');
            $table->text('address')->nullable();
            $table->string('twitter_profile')->nullable();
            $table->string('personal_protfolio')->nullable();
            $table->string('email');
            $table->string('password');
            $table->text('experience')->nullable(); 
            $table->string('profession')->nullable(); 
            $table->string('certification')->nullable(); 
            $table->text('profile_description')->nullable(); 
            $table->text('professional_skills')->nullable(); 
            $table->string('profile_picture')->nullable();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
