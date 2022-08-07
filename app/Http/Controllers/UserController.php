<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function login(){
        if(Auth::user()){
            return redirect()->route('admin');
        }
        return view('pages/login');
    }

    public function create(){
        return view('backend/pages/users');
    }
}
