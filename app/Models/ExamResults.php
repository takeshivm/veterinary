<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamResults extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'images',
        'consultation_id',
    ];

    public function consultation()
    {
        return $this->belongsTo(Consultations::class);
    }

    public function setImagesAttribute($value)
    {
        $this->attributes['images'] = json_encode($value);
    }

    public function getImagesAttribute($value)
    {
        return json_decode($value);
    }
}
