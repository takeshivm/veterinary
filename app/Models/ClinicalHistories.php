<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicalHistories extends Model
{
    use HasFactory;

    protected $fillable = [
        'allergies',
        'chronic_diseases',
        'previous_treatments',
        'previous_diagnosis',
        'medical_tests',
        'test_results',
        'recommended_treatments',
        'monitoring_plans',
        'pet_id'
    ];

    public function pet()
    {
        return $this->belongsTo(Pets::class);
    }

}
