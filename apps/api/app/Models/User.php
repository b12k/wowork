<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Dispatchable;

    protected $fillable = [
        'sid',
        'name',
        'surname',
        'email',
        'phone',
        'password',
        'gender',
        'birthday',
    ];

    protected $hidden = ['password', 'id'];

    protected $casts = [
        'birthday' => 'datetime',
        'email_verified_at' => 'datetime',
        'phone_verified_at' => 'datetime',
        'identity_verified_at' => 'datetime',
    ];
}
