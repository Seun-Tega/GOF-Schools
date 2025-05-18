<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class NewsEvent extends Model
{
    use HasFactory;
    use HasSlug;
    protected $guarded = [];

    
    protected $casts = [
        'event_date' => 'datetime',
        'event_time' => 'datetime',
    ];

     public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

}
