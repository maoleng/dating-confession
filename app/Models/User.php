<?php

namespace App\Models;

use App\Enums\TransactionStatus;
use App\Jobs\UpdateTransactionTimeout;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'avatar',
        'is_dark_mode',
        'is_notification',
        'premium_until',
        'facebook_id',
        'google_id',
        'login_url',
        'created_at',
    ];

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    public function getPremiumDescriptionAttribute(): string
    {
        return $this->hasPremium()
            ? "Premium (" . Carbon::make($this->premium_until)->longRelativeDiffForHumans(parts: 4) . ")"
            : 'Free';
    }

    public function hasTransactionUncompleted(): bool
    {
        return $this->transactions()->where('status', TransactionStatus::WAITING)->exists();
    }

    public function hasPremium(): bool
    {
        if ($this->premium_until) {
            $premium_until = Carbon::make($this->premium_until);
            if ($premium_until->gt(now())) {
                return true;
            }

            return false;
        }

        return false;
    }

    protected static function booted(): void
    {
        static::creating(static function (User $user) {
            $user->created_at = now();
        });
    }

}
