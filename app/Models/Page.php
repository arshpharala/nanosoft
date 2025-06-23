<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'slug', 'content', 'is_active'];

    protected $casts = [
        'content' => 'array',
        'is_active' => 'boolean'
    ];
}
