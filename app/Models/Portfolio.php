<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Portfolio extends Model
{
    use HasFactory;
    // protected $guarded = [];
    protected $fillable = [
        'portfolio_name',
        'portfolio_title',
        'portfolio_image',
        'portfolio_description',
    ];

    // Obtener una descripción corta
    public function getShortDescriptionAttribute()
    {
        return Str::limit(strip_tags($this->attributes['portfolio_description']), 200);
    }

}
