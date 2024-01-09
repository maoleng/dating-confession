<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\URL;

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

    public function historyUsers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'confession_history');
    }

    public function getYearCreatedAttribute(): string
    {
        return Carbon::make($this->created_at)->longRelativeToOtherDiffForHumans();
    }

    public function getColorClassAttribute(): string
    {
        return $this->color ? "tag-hash-$this->color tag-hash-post-$this->color no-image" : "is-image";
    }

    public function getBodyClassAttribute(): string
    {
        return $this->color ? "post-template tag-story tag-hash-$this->color tag-hash-post-$this->color global-cta-violet" :
            'post-template tag-lifestyle tag-hash-large';
    }

    public function getHtmlImageCardAttribute(): string
    {
        return $this->banner ? "<div class=\"item-image\" style=\"background-image: url('$this->banner')\"></div>" : '';
    }

    public function getUrlAttribute(): string
    {
        return URL::to($this->slug);
    }

    public function isPaidContent(): bool
    {
        return $this->trailer_content !== null;
    }

}
