<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultations extends Model
{
    use HasFactory;

    protected $table = 'consultations';
    protected $fillable = ['date', 'reason_for_consultation', 'observations', 'weight', 'temperature', 'heart_rate', 'respiratory_rate', 'pet_id'];

    public function clinicalHistory()
    {
        return $this->belongsTo(ClinicalHistories::class);
    }

    public function examResults()
    {
        return $this->hasMany(ExamResults::class);
    }

    public function procedures()
    {
        return $this->belongsToMany(Procedure::class);
    }

    public function medications()
    {
        return $this->belongsToMany(Medication::class)->withTimestamps();
    }
}
