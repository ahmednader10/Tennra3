<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Project;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Validation\ValidationException;



class UserController extends Controller
{
    public function create()
    {
        return view('users.createUser');
    }

    public function store(CreateUserRequest $request)
    {
        User::create(Request::all());
        echo 'You are successfully signed in. Welcome to our platform!';
        return redirect('/');
    }

    /*public function show($id)
    {
        $user = Project::find($id);
        if(is_null($user)){
            abort(404);
        }
        return view('showUser',compact('users'));
    } */

    public function signIn($email, $password)
    {
        $user = DB::table('users')
            ->where('password', '=', $password)->get()
            ->andWhere('email', '=', $email)
            ->get();
        if ($user != null) {
            echo 'You are now signed in';
            return redirect('/');
        }
        else {
            echo 'Incorrect email or password! Please resubmit';
            return redirect('/users/signIn');
        }
    }
}