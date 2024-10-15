<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, "index"])->name("home");

// view
Route::get("/sign-in", function () {
    return view('sign_in');
})->name("sign_in");
Route::get("/sign-up", function(){
    return view("sign_up");
})->name("sign_up");
Route::get("/add-main-category", function(){
    return view("create_main_category");
})->name("add_main_category");
Route::get("/admin/{name}", function(){
    return view("admin.profile");
})->name("admin_profile");
// end view
Route::post("/sign-in-user", [UserController::class, "sign_in"])->name("sign_in_user");
Route::post("/register-mobile", [UserController::class, "register_mobile"])->name("register_mobile");
Route::post("/sign-up-user", [UserController::class, "sign_up"])->name("sign_up_user");
Route::post("/create-new-category", [CategoryController::class, "create_category"])->name("create_new_category");
