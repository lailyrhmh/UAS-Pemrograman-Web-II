<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function albums()
    {
        return $this->hasMany(Album::class);
    }

    public function label()
    {
        return $this->belongsTo(Label::class);
    }
}
