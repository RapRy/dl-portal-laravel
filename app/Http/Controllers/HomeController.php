<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        if(auth()->check()){
            return view('welcome');
        }

        return redirect(route("sign_in"));
    }
}
