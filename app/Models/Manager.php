<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Manager extends Authenticatable
{
    use HasFactory;

    protected $casts = [
        'password' => 'hashed',
    ];

    protected $guarded = [
        'id', 'created_at', 'updated_at',
    ];
}
