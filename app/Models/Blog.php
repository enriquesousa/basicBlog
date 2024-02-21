<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\BlogCategory;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Relación de 'blog_category_id' con el 'id' de la tabla 'blog_categories'
    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id', 'id');
    }

}
