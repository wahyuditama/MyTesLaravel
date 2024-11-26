<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view("login");
    }
    public function actionLogin(Request $request)
    {
        $credentials = $request->only(keys: ["email", "password"]);
        //
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        } else {
            return back()->withErrors(['email' => 'Mohon periksa kembali email dan inputan anda'])->withInput();
        }
    }
    public function actionLogout(Request $request)
    {
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();

        return view("login");
    }
}
