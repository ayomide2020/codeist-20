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

    protected $appends = ['date', 'answerss', 'votecount', 'viewcount'];

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
        return $this->vote ? $this->vote->vote : "0";
    }
    public function getViewcountAttribute()
    {
        return $this->view;
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vote()
    {
        return $this->hasOne(Vote::class);
    }

    public function views()
    {
        return $this->hasMany(View::class);
    }

}
