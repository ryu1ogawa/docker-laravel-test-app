<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'member-last-name',
        'member-first-name',
        'member-name',
        'member-last-name-reading',
        'member-first-name-reading',
        'member-name-reading',
        'member-birthday',
        'member-sex',
        'member-classification',
        'member-education-facility',
        'member-school-name',
        'member-contract-kinds',
    ];
}
