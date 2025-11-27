<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'icon',
        'image',
        'name',
        'short_description',
        'description'
    ];
}
