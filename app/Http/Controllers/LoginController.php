<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function login(LoginRequest $request){
        $name = $request->get('name');
        $password = $request->get('password');
        if($name == 'admin' && $password == '123456'){
            $request->session()->put('login', true);
            return redirect()->route('article.index');
        } else {
            return view('login')->with('fail', 'Failed');
        }
    }

    public function logout(LoginRequest $request){
        $request->session()->flush();
        return redirect()->route('page.login');
    }
}
