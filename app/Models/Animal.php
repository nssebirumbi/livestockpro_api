<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function stage(){
        return $this->belongsTo(Stage::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function cage(){
        return $this->belongsTo(Cage::class);
    }
}
