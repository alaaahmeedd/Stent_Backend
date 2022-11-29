<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StentType_StentPatient extends Model
{
    use HasFactory;

    protected $fillable =[
        'stentType_id',
        'stentPatient_id'
    ];
}
