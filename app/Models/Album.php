<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'title', 'talent_id', 'description', 'slug'
    ];

    public function talent()
    {
        return $this->belongsTo(Talent::class);
    }

    public function image()
    {
        return $this->hasMany(Image::class);
    }
}
