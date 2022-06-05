<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    protected $fillable = [
        'label_id', 'talent_name','slug'
    ];

    public function talents()
    {
        return $this->hasMany(Talent::class);
    }

    public function label()
    {
        return $this->belongsTo(Label::class);
    }

    public function image()
    {
        return $this->hasMany(Image::class);
    }
}
