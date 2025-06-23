<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'company',
        'email',
        'phone',
        'service_id',
        'message',
        'ip'
    ];

    public function service()
    {
        return $this->belongsTo(\App\Models\Service::class, 'service_id');
    }
}
