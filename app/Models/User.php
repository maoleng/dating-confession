<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    public $timestamps = false;

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

    public function getPremiumDescriptionAttribute(): string
    {
        if ($this->premium_until) {
            $premium_until = Carbon::make($this->premium_until);
            if ($premium_until->gt(now())) {
                return "Premium ({$premium_until->longRelativeDiffForHumans()})";
            }

            return 'Free';
        }

        return 'Free';
    }

}
