<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    { 
        return view('auth.login');
    } 
    public function loginUser(Request $request)
    {   
        $request->validate([
            'email' => 'required|email|exists:users,email', 
            'password' =>'required'
        ]);

        $credentials = $request->only('email', 'password'); 
        
        if (Auth::guard('web')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('login.form')->with('error', 'Credentials do not match.');
          
               
    } 
    public function logout(Request $request)
    {
        Auth::logout(); 
        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 

        return redirect('/'); // Redirect to the login page
    }
}
