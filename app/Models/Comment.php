<?php

namespace App\Models;

class Comment extends Base
{

    protected $fillable = [
        'content',
        'user_id',
        'comment_id',
        'is_hide',
        'created_at',
    ];

}
