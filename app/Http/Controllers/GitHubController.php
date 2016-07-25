<?php

namespace Basic\Http\Controllers;

use Illuminate\Http\Request;

use Basic\Http\Requests;
use Laravel\Socialite\Facades\Socialite;

class GitHubController extends Controller
{
    public function redirect(){
        return Socialite::driver('github')->redirect();
    }

    public function handle(){
        $user = Socialite::driver('github')->user();
        var_dump($user);
    }
}
