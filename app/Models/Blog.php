<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

use App\Models\BlogCategory;

class Blog extends Model
{
    use HasFactory;
    // protected $guarded = [];

    protected $fillable = [
        'blog_category_id',
        'blog_title',
        'blog_tags',
        'blog_description',
        'blog_image',
        'created_at',
        'updated_at',
    ];

    // Relación de 'blog_category_id' con el 'id' de la tabla 'blog_categories'
    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id', 'id');
    }

    // Obtener una descripción corta
    public function getShortDescriptionAttribute()
    {
        return Str::limit(strip_tags($this->attributes['blog_description']), 200);
    }
}
