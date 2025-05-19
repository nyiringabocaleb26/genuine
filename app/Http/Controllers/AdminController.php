<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index()
    {
        return view('users.signup');
    }

    public function store(Request $req){
        // Auth::login($req->user());
        $req->validate([
            "Username" => 'required|string',
            "Password" => 'required|string|min:5'
        ]);
    
        Admin::create([
            'Username' => $req->Username,
            'Password' => Hash::make($req->Password),
        ]);
        return redirect()->route('dashboard')->with('success', 'Admin registered successfully');
    }

    public function showLogin(){
        return view('users.login');
    }

    // public function showLoginForm()
    // {
    //     return view('admin.auth.login'); // Create a login form for admins
    // }

    public function login(Request $request)
    {
        // Validate the request data
        $credentials =  $request->validate([
            'Username' => 'required|string',
            'Password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentication successful for admin
            $request->session()->regenerate();
            return Redirect::route('dashboard');
        }

        // Authentication failed
        return back()->withErrors([
            'Username' => 'Invalid credentials.',
            'Password' => 'Invalid credentials.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('login'); // Redirect to admin login
    }
}

