<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    use HasFactory;

    public function projects(){
        return $this->hasMany(Project::class);
    }

    public function clients(){
        return $this->hasMany(Client::class);
    }
}
