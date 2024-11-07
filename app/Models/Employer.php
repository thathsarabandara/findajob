<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employer extends Model
{
    use HasFactory;

    protected $table = 'employers';

    // Define which attributes are mass assignable
    protected $fillable = [
        'company_name',
        'company_description',
        'industry',
        'location',
        'website_link',
        'number_of_employees',
        'email',
        'password',
        'contact_phone',
        'achievements_and_rewards',
        'facebook_link',
        'instagram_link',
        'twitter_link',
        'linkedin_link',
        'company_culture',
        'gallery_image_1',
        'gallery_image_2',
        'gallery_image_3',
        'profile_picture',
    ];

    // Specify attributes that should be cast to native types if needed
    protected $casts = [
        'number_of_employees' => 'integer',
        'company_description' => 'text',
        'achievements_and_rewards' => 'text',
        'company_culture' => 'text',
    ];
}
