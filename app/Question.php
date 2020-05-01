<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{

    use SoftDeletes;
    protected $guarded = [];

    protected $casts = [
        'tag_ids' => 'array'
    ];

    protected $appends = ['date', 'answerss', 'votecount'];

    public function getDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function getAnswerssAttribute()
    {
        return $this->answers;
    }

    public function getVotecountAttribute()
    {
        return $this->votes()->count();
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
