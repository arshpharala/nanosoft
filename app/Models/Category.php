<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function meta()
    {
        return $this->morphOne(\App\Models\Meta::class, 'metable');
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
