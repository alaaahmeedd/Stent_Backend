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
}
