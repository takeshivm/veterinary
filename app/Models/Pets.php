<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'species', 'breed', 'color', 'date_of_birth', 'gender', 'photo_path', 'owner_id'];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function clinicalHistories()
    {
        return $this->hasOne(ClinicalHistories::class);
    }
}
