<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    protected $fillable = ['service_id', 'title', 'short_description'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
