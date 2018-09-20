<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    //
    public function index(User $user){
        if(Auth::check()){
            return view('admin.index',compact('user'));
        }else{
            return view('layouts.login');
        }

    }

    public function homework(Request $request){
        $user=Course::find($request->course)->user;
        session()->flash('course',$request->course);
        return view('patternRecognition.homework.index',compact('user','course'));
    }

    public function phpadmin(){
        return view('admin.phpadmin');
    }
}
