<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    use HasFactory;

    public function projects(){
        return $this->belongsToMany(Project::class);
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
