<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request){
        $nama = request('nama');
        return view('home',compact('nama'));
    }

    public function show(){
        $email = 'wilda@gmail.com';
        return view('show',compact('email'));
    }
}
