<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $hash = password_hash($req->Password, PASSWORD_BCRYPT);
        $req->merge(['Password' => $hash]);
        Admin::create($req->all());
        return redirect()->route('dashboard')->with('success', 'Admin registered successfully');
    }

    public function showLogin(){
        return view('users.login');
    }

    public function login(Request $req)
    {
        $admin = Admin::where('Username', $req->Username)->first();
        if ($admin && password_verify($req->Password, $admin->getAuthPassword())) {
            session(['admin_id' => $admin->id]);

            return redirect('dashboard')->with('success', 'Login successful');
        }

        return back()->withErrors([
            'Username' => 'The provided credentials do not match any user.',
        ]);
    }

    public function logout(){
        session()->forget('admin_id');
        return redirect()->route('home')->with('success', 'Logout successful');
    }
}

