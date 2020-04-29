<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function users(){
        $users = \App\User::paginate(20);
        return view('user')->with('users',$users);
    }
}
