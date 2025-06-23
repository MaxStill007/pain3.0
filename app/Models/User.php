<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract; // Изменено имя интерфейса
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\MustVerifyEmail; // Трейт верификации

class User extends Authenticatable implements MustVerifyEmailContract // Используем интерфейс с новым именем
{
    use CrudTrait;
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, MustVerifyEmail; // Используем трейт верификации

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function orders()
    {
        return $this->hasMany(Orders::class);
    }

}