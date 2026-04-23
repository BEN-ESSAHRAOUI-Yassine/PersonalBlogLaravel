<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Category;
use App\Models\User;

class Article extends Model
{
    use HasFactory;

    public function category()
    {
    return $this->belongsTo(Category::class);
    }

    public function user()
    {
    return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'title',
        'content',
        'status',
        'user_id',
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

    public function getReadingTimeAttribute()
    {
        $words = str_word_count(strip_tags($this->content));
        return max(1, ceil($words / 200));
    }

    
}
