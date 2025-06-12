<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OnlineStore extends Model
{
    protected $fillable = ['name', 'url', 'logo', 'description'];
}
