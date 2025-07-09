<?php

namespace App\Models;

use App\Models\Section;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'content' => 'array',
        'is_active' => 'boolean'
    ];


    public function sections()
    {
        return $this->morphMany(Section::class, 'sectionable');
    }

    public function meta()
    {
        return $this->morphOne(\App\Models\Meta::class, 'metable');
    }
}
