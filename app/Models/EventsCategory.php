<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventsCategory extends Model
{
    protected $table = 'events_categories';

    protected $fillable = [
        'name',
        'slug',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
