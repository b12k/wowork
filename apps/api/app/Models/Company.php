<?php

namespace App\Models;

use App\Models\Vacancy\Vacancy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Company extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Dispatchable;

    protected $hidden = ['password', 'id'];

    protected $fillable = [
        'sid',
        'name',
        'email',
        'password',
        'legal_name',
        'legal_contact',
        'legal_address',
        'phone',
        'logo',
        'phone',
        'website',
        'type',
        'size',
        'email_verified_at',
        'phone_verified_at',
        'legal_verified_at',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' => 'datetime',
        'legal_verified_at' => 'datetime',
    ];
}
