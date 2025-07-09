<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'bullet_points' => 'array',
    ];


    public function sectionable()
    {
        return $this->morphTo();
    }
}
