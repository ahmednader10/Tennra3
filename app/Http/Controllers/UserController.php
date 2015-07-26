<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Project;
//use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;


class UserController extends Controller
{
    public function create()
    {
        return view('users.createUser');
    }

    public function store(Request $request)
    {
        $this->validate($request, ['first name' => 'required' , 'last name' => 'required' , 'email' => 'required',
        'password' => 'required']);
        User::create($request->all());
        return redirect('/');
    }
}