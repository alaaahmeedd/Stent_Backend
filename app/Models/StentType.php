<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StentType extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_id',
        'name',
        'days_left'

    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function stentPatients()
    {
        return $this->belongsToMany(StentPatient::class);
    }
}
