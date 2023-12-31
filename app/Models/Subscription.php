<?php

namespace App\Models;

class Subscription extends Base
{

    protected $fillable = [
        'name',
        'original_price',
        'price',
        'duration',
        'description',
    ];

}
