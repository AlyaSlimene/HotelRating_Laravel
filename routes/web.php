<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HotelController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout',function(){
    Session::forget('user');
    return redirect('/');
});
Route::get('/enregistrer', function () {
    return view('enregistrer');
});

Route::get('/hotelMR',function(){
    return view('Ratings');
});

/*
Route::get('/hotelMR',function(){
    return view('jquery-form');
});
*/
Route::get('/Stats/{id}',[HotelController::class,'Statistiques']);
Route::post("/login",[UserController::class,'login']);
Route::post("/enregistrer",[UserController::class,'create']);
Route::get("/",[HotelController::class,'index']);
Route::get("detail/{id}",[HotelController::class,'detail']);
Route::get("search",[HotelController::class,'search']);
Route::get("addrating/{id}",[HotelController::class,'addrating']);
Route::post("valrating",[HotelController::class,'valrating']);
Route::post("validation",[HotelController::class,'validation']);

Route::get("editrating/{id}",[HotelController::class,'editrating']);