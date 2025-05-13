<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index(){
        return view('positions.add');
    }

    public function store(Request $req){
        $req->validate([
            "PostName" => 'required|string|min:3|max:50'
        ]);
        Position::create($req->all());
        return redirect()->route('dashboard')->with('success', 'Position added successfully');
    }

    public function getPositions(){
        $positions = Position::all();
        return view('positions.get', compact('positions'));
    }
}



