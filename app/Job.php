<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Job extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    protected $casts = [
        'tag_ids' => 'array',
    ];

    protected $appends = ['date'];

    public function getDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
