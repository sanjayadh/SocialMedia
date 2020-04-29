<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LockdownController extends Controller
{
    function index(){
        $user = \App\User::with('following','follower')>find(1);
        $followers = $user->followers;
        $following = $user->following;
        return view('welcome')->with(['user'=>$user,'newInfo'=>'newvalue']);
    }
    public function profile($username){
        $user = User::whereUsername($username)->first();
        return $user;

    }
    public function show($username){
        $user =\App\User::with('following','followers')->where('username',$username)->first();
        $followers = $user->followers;
        $following = $user->following;

        return view('welcome')->with(['user'=>$user,'newInfo'=>'newwer']);
    }

    public function getLogin(){
        return view('login');
    }
    public function getProfile(){
        return view('social');
    }
    public function logout () {
        auth()->logout();
        return redirect('/');
    }
}
