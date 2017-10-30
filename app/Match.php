<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = [
        'title', 'first_club', 'second_club', 'author', 'description', 'title_seo', 'key_seo', 'description_seo',
    ];
}
