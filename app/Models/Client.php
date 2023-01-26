<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function farms(){
        return $this->hasMany(Farm::class);
    }

    public function projects(){
        return $this->hasManyThrough(Project::class, Farm::class);
    }

    public function settings(){
        return $this->hasManyThrough(Setting::class,Farm::class);
    }

    public function statuses(){
        return $this->hasManyThrough(Status::class,Farm::class);
    }

    public function stages(){
        return $this->hasManyThrough(Stage::class, Farm::class);
    }

    public function animals(){
        return $this->hasManyThrough(Animal::class, Farm::class);
    }

    public function events(){
        return $this->hasManyThrough(Event::class, Farm::class);
    }

    public function cages(){
        return $this->hasManyThrough(Cage::class, Farm::class);
    }
}
