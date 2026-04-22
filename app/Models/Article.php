<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function category()
    {
    return $this->belongsTo(Category::class);
    }

    protected $fillable = [
        'title',
        'content',
        'status',
        'category_id'
        ];


    protected static function booted()
    {
        static::saving(function ($article) {
            if ($article->status === 'published' && !$article->published_at) {
                $article->published_at = now();
            }
        });
    }

    
}
