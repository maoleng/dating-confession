<?php

namespace App\Models;

class User extends Base
{

    protected $fillable = [
        'name',
        'email',
        'is_dark_mode',
        'is_notification',
        'premium_until',
        'facebook_id',
        'google_id',
        'login_url',
        'created_at',
    ];

}
