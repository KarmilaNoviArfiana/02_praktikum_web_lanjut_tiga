<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;

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

//no1
Route::get('/home', [HomeController::class,'home']);
//no2
Route::prefix('category')->group(function (){
        Route::get('/', [CategoryController::class,'products']);
});
//no3
Route::get('news/{id}', function ($id='') {
    return "Ini Adalah Halaman Berita $id";
});
//no4
Route::prefix('program')->group(function (){
    Route::get('/', [ProgramController::class,'program']);
});
//no5
Route::get('/about-us', function () {
    return "<a href=https://www.educastudio.com/about-us>About-us</a>";
});
//no6
Route::resource('/contact-us', ContactController::class)->only('store');


