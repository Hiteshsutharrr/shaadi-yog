<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminAuthController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        $credential = array('email'=>$request->email,'password'=>$request->password,'user_type'=>'admin');
        $user = Auth::attempt($credential);
        if($user){
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('admin.login');
    }
}
