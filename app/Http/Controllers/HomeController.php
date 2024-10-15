<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        if(auth()->check()){
            $categories = Category::all();
            return view('home', ['categories' => $categories])->name('home');
        }

        return redirect(route("sign_in"));
    }
}
