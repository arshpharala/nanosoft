<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $fillable = ['meta_title', 'meta_keywords', 'meta_description'];

    public function metable()
    {
        return $this->morphTo();
    }

    public function activityLogs()
    {
        return $this->morphMany(ActivityLog::class, 'loggable');
    }
}
