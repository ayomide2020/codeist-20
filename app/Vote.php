<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vote extends Model
{
    use SoftDeletes;
    protected $guarded = [];

<<<<<<< HEAD
    protected $casts = [
        "user_id" => "array"
    ];

=======
>>>>>>> eff1e587fbb12c014d3f325de6550f8abc530433
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
