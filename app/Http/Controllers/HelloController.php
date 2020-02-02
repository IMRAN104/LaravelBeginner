<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        // $coolstring = 'This is a cool string';
        // return view('hello', compact('coolstring'));
        return view('app');
    }
    public function services(){
        $our_services = [
            'Service-1',
            'Service-2',
            'Service-3',
            'Service-4'
        ]
        return view('services', compact('our_services'));
    }
}
