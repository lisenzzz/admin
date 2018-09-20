<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest',[
            'only'=>['create']
        ]);

        $this->middleware('auth',[
            'except'=>['create','store']
        ]);
    }

    public function create(){
        return view('layouts.login');
    }

    public function store(Request $request){
        $credentials=$this->validate($request,[
            'name'=>'required|max:255',
            'password'=>'required'
        ]);

        if(Auth::attempt($credentials)){
            session()->flash('success','welcome');
            return redirect()->route('index',[Auth::user()]);
        }else{
            session()->flash('fail','name and password is not match');
            return redirect()->back()->withInput();
        }
    }

    public function destroy(){
        if(Auth::check()){
            Auth::logout();
            return redirect()->route('login');
        }
        return false;
    }
}
