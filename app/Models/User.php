<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'username',
        'password',
        'role',
        'donatur_id', // tambahkan field untuk id donatur
        'penerima_id', // tambahkan field untuk id penerima
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Definisikan relasi dengan Donatur
    public function donatur()
    {
        return $this->belongsTo(Donatur::class, 'donatur_id');
    }

    // Definisikan relasi dengan Penerima
    public function penerima()
    {
        return $this->belongsTo(Penerima::class, 'penerima_id');
    }
}
