<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('layout.blog.index');
// });

Route::get('/',[App\Http\Controllers\BlogController::class,'index']);
Route::get('/data/blog',[App\Http\Controllers\BlogController::class,'create'])->name('blog.index');
Route::get('/add',[App\Http\Controllers\BlogController::class,'createblog'])->name('blog.create');


