<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        's_id',
        'school',
        'gender',
        'age',
        'address',
        'famsize',
        'Pstatus',
        'Medu',
        'Fedu',
        'Mjob',
        'Fjob',
        'reason',
        'guardian',
        'traveltime',
        'studytime',
        'failures',
        'schoolsup',
        'famsup',
        'paid',
        'activities',
        'nursery',
        'higher',
        'internet',
        'famrel',
        'freetime',
        'health',
        'absences',
        'passed',
    ];
}
