<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'email',
        'phone',
        'birth_date',
        'create_id',
        'assign_id'
    ];

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function visits()
    {
        return $this->hasMany(Visits::class);
    }

    public function stentPatients()
    {
        return $this->belongsToMany(StentPatient::class);
    }
}
