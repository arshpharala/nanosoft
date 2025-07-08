<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'content' => 'array',
        'is_active' => 'boolean'
    ];


        public function meta()
    {
        return $this->morphOne(\App\Models\Meta::class, 'metable');
    }


}
