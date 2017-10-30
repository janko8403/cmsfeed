<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopFive extends Model
{
    protected $fillable = [
        'name', 'football_club', 'images',
    ];
}
