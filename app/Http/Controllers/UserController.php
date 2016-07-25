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


    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        //Retornar todos os campos do form
        //var_dump($request->all());

        // Retornar campos especificos
        //var_dump( $request->only(['name', 'email']));

        // Retornar um campo
        //echo $request->input('name');

        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'senha' => 'required|confirmed|min:4'

        ]);
    }

}
