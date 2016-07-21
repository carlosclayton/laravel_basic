<?php

namespace Basic\Http\Controllers;

use Illuminate\Http\Request;

use Basic\Http\Requests;

class UserController extends Controller
{
    public function index(){
        $user = 'carlos.clayton@gmail.com';

        return view('user.index', compact('user'));

    }

    public function show($id){
        return view('user.show', compact('id'));

    }
}
