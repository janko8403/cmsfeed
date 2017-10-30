<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'name', 'slug', 'author', 'description', 'images'
    ];

    public function categories()
    {
    	return $this->belongsToMany('App\Category')->withTimestamps();
    }

    public function getCategoryListAttribute()
    {
    	return $this->categories->list('id')->all();
    }

    public function media()
    {
        return $this->belongsToMany('App\Media');
    }
}
