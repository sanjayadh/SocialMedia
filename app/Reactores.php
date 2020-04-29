<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reactores extends Model
{
    protected $fillable = ['post_id','react','usr_id'];
}
