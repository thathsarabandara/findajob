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
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->text('company_description');
            $table->string('industry');
            $table->string('location');
            $table->string('website_link');
            $table->integer('number_of_employees');
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('contact_phone');
            $table->text('achievements_and_rewards');
            $table->string('facebook_link');
            $table->string('instagram_link');
            $table->string('twitter_link');
            $table->string('linkedin_link');
            $table->text('company_culture');
            $table->string('gallery_image_1'); 
            $table->string('gallery_image_2'); 
            $table->string('gallery_image_3'); 
            $table->string('profile_picture');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employers');
    }
};
