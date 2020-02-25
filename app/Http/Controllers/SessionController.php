<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function __construct(){
        $this->middleware('guest')->except(['logout']);
    }
    
    public function login(){


        return view('session.login');
    }
    public function store(){

        
        if(!auth()->attempt(request(['email','password']))){
            return back()->withErrors(['message'=>'Podane dane nie zgadzają się']);
        }

        session()->flash('message','Zostałeś zalogowany');
        return redirect('/');
    }

    public function logout(){
\Auth::logout();
session()->flash('message','Zostałeś wylogowany!');
return redirect('/');
    }
}
