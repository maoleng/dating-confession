<?php

namespace App\Models;

class Confession extends Base
{

    protected $fillable = [
        'title',
        'slug',
        'banner',
        'color',
        'trailer_content',
        'content',
        'view',
        'created_at',
    ];

}
