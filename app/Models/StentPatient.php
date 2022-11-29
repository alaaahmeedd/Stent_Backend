<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StentPatient extends Model
{
    use HasFactory;

    protected $fillable = [
        'insert_date',
        'removal_date',
     
    ];

    public function patients()
    {
        return $this->belongsToMany(Patient::class);
    }

    public function stentTypes()
    {
        return $this->belongsToMany(StentType::class);
    }
}
