<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class temanjoki extends Controller
{
    public function index(){
        $dt = [];
        return view('teman', compact('dt'));
    }
}
