<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Các field cho phép insert
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Ẩn khi trả về JSON
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Ép kiểu dữ liệu
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',

            // 🔥 Laravel tự hash password
            'password' => 'hashed',
        ];
    }
}