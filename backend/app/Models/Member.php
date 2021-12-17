<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function users() {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id',
        'number',
        'phot',
        'start_date',
        'last_name',
        'first_name',
        'name',
        'last_name_reading',
        'first_name_reading',
        'name_reading',
        'birthday',
        'sex',
        'classification',
        'education_facility',
        'school_name',
        'anamnesis',
        'heart_disease',
        'outpatient',
        'experience',
        'contract_kind',
        'course',
        'school_bus'
        
    ];
}
