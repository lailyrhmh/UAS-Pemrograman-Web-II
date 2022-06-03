<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function talent()
    {
        return $this->hasMany(Talent::class);
    }

    public function trainee()
    {
        return $this->hasMany(Trainee::class);
    }
    
    public function staff()
    {
        return $this->hasMany(Staff::class);
    }
}
