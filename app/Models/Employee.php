<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    protected $table ="employees";

    protected $fillable = [
        'first_name',
        'last_name',
        'full_name',
        'address',
        'twitter_profile',
        'personal_protfolio',
        'email',
        'password',
        'experience',
        'profession',
        'certification',
        'profile_description',
        'professional_skills',
        'profile_picture',
    ];
    protected $casts = [
        'email' => 'string',
        'password' => 'string',
        'experience' => 'text',
        'profile_description' => 'text',
        'professional_skills' => 'text',
    ];
}
