<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title', 'image', 'is_active', 'slug', 'short_description', 'description', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function meta()
    {
        return $this->morphOne(Meta::class, 'metable');
    }

    public function benefits()
    {
        return $this->hasMany(Benefit::class);
    }

    public function activityLogs()
    {
        return $this->morphMany(ActivityLog::class, 'loggable');
    }
}
