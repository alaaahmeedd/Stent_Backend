<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Staff extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }



    protected $fillable = [
        'department_id',
        'hospital_id',
        'f_name',
        'l_name',
        'email',
        'password',
        'birth_date',
        'phone',
        'position',
        'is_admin',
        
    ];

    protected $hidden = [
        'password',
    
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }


}
