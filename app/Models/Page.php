<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'content', 'is_active'];

    public function url()
    {
        return $this->morphOne(Url::class, 'urlable');
    }

    public function meta()
    {
        return $this->morphOne(Meta::class, 'metable');
    }

    public function activityLogs()
    {
        return $this->morphMany(ActivityLog::class, 'loggable');
    }
}
