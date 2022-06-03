<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function talent()
    {
        return $this->belongsTo(Talent::class);
    }
}
