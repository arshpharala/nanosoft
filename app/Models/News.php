<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'category_id', 'slug', 'intro', 'content', 'is_guide', 'image', 'created_by'];

    function scopeNews($query){
        $query->where('is_guide', 0);
    }

    function scopeGuide($query){
        $query->where('is_guide', 1);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, 'news_tags');
    }

    public function meta()
    {
        return $this->morphOne(\App\Models\Meta::class, 'metable');
    }
}
