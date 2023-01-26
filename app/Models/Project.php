<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Project extends Model
{
    use HasFactory;

    public function farms(){
        return $this->belongsToMany(Farm::class);
    }

    public function settings(){
        return $this->hasMany(Setting::class);
    }

    public function statuses(){
        return $this->hasMany(Status::class);
    }

    public function stages(){
        return $this->hasMany(Stage::class);
    }

    public function animals(){
        return $this->hasMany(Animal::class);
    }

    public function events(){
        return $this->hasMany(Event::class);
    }

    public function cages(){
        return $this->hasMany(Cage::class);
    }
}
