<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable =['user_id','caption','image'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
