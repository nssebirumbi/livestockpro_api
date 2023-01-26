<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cage extends Model
{
    use HasFactory;

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function animals(){
        return $this->hasMany(Animal::class);
    }
}
