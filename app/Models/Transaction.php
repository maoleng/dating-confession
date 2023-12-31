<?php

namespace App\Models;

class Transaction extends Base
{

    protected $fillable = [
        'code',
        'money',
        'duration',
        'status',
        'user_id',
        'job_id',
        'created_at',
    ];

}
