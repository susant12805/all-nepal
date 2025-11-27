<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    //
    protected $fillable = [
        'icon',
        'image',
        'name',
        'short_description',
        'description'
    ];
}
