<?php

namespace App\Models;

use Carbon\Carbon;

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

    public function getYearCreatedAttribute(): string
    {
        return Carbon::make($this->created_at)->longRelativeToOtherDiffForHumans();
    }

    public function getColorClassAttribute(): string
    {
        return $this->color ? "tag-hash-$this->color tag-hash-post-$this->color no-image" : "is-image";
    }

    public function getHtmlImageCardAttribute(): string
    {
        return $this->banner ? "<div class=\"item-image\" style=\"background-image: url('$this->banner')\"></div>" : '';
    }

    public function isPaidContent(): bool
    {
        return $this->trailer_content === null;
    }

}
