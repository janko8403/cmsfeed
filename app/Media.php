<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = [
        'images',
    ];

    public function posts()
    {
    	return $this->belongsToMany('App\Post');
    }
}
