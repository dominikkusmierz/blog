<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register()
    {
        return view('registration.register');
    }


    public function store(){

        $this->validate(request(),([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed'
        ]));
        
        $user=User::create(request([
            'name',
            'email',
            'password',
        ]));
        auth()->login($user);
        session()->flash('message','Konto zostało utworzone');
        return redirect('/');
    }
}
