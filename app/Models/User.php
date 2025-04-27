<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        
        'name',
        'email',
        'password',
        'role',
        'id_perusahaan',
    ];

    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class);
    }

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }

    public function mentor()
    {
        return $this->hasOne(UserMentor::class);
    }
}