<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = ['post_id','body','user_id'];
}
