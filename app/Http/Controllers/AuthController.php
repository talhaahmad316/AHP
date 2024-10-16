<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard()
    {
        return view('welcome');
    }
    public function registerpage()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|regex:/^(?=.*[a-zA-Z])(?=.*[0-9]).*$/',
            'confirm_password' => 'required|same:password',
        ]);
        
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('user.loginpage')->withCreate('User Register Successfully!');
    }
    public function loginpage()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/');
        }
        return redirect()->route('user.loginpage')->withDelete('User not found!');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        session()->flush();
        return redirect()->route('user.loginpage')->withCreate('Logout Successfully!');
    }
}
