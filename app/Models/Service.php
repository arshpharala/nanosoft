<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title', 'image', 'is_active', 'description'];

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
