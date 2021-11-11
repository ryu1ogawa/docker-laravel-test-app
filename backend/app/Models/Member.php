<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'last-name',
        'first-name',
        'name',
        'last-name-reading',
        'first-name-reading',
        'name-reading',
        'birthday',
        'sex',
        'classification',
        'education-facility',
        'school-name',
        'contract-kinds',
    ];
}
