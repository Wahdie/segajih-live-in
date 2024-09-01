<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'author_id',
        'category_id',
        'title',
        'seo_title',
        'excrept',
        'body',
        'image',
        'slug',
        'meta_description',
        'meta_keywords',
        'status',
        'created_at',
        'update_at'
    ];

    
}
