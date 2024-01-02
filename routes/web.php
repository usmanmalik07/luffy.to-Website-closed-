<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[FrontController::class,'index'])->name('front.home');
Route::get('/shop',[FrontController::class,'shop'])->name('front.shop');
Route::get('/aboutus',[FrontController::class,'aboutus'])->name('front.aboutus');
//Route::get('/watch/{slug}',[MovieController::class,'watch'])->name('front.watch');
// Route::get('/watch/{id}', [MovieController::class, 'watch'])->name('watch');
Route::get('/dashboard', 'App\Http\Controllers\userctrl@viewdashboard');
Route::get('/logout', 'App\Http\Controllers\userctrl@logout');
Route::post('/login', 'App\Http\Controllers\userctrl@login');
Route::get('/login', 'App\Http\Controllers\userctrl@index');
