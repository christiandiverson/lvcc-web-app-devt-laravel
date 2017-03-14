<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class profilecontroller extends Controller
{
    public function profile($username)
    {
    	//return $username;

    	$user = User::whereUsername($username)->first();
    	//dd($user);
    	return view ('user.profile',compact('user'));
    }
}
