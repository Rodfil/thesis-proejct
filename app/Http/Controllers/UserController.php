<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function login() {
        return view("users.login");
    }

    public function register() {
        return view("users.register");
    }

    public function store(Request $request) {
        $request->merge([
            'birthdate' => date("Y-m-d",strtotime($request->birthdate))
        ]);
       
        $formfields = $request->validate([
            'firstname' => ['required', 'min:3'],
            'lastname' => 'required',
            /* 'gender' => 'required', */
            /* 'birthdate' => 'required|date', */
            'voters_type' => 'required',
            'email' => ['required', 'email', Rule::unique('users')],
            'password' => 'required|confirmed'
        ]);

        $formfields['password'] = bcrypt($formfields['password']);

        $user = User::create($formfields);

        if($user) {
            return redirect('/dashboard');

            auth()->login($user);
        }
    }
}
