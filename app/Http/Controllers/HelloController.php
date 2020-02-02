<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        $coolstring = 'This is a cool string';
        // return view('hello', compact('coolstring'));
        return view('app');
    }
}
