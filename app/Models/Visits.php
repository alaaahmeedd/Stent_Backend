<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visits extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'date_Of_visit',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
