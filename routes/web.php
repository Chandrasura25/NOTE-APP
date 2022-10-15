<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UsersController;
use App\Http\MiddleWare\AuthUser;
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

Route::get('/', function() { 
    return view('welcome');
});
Route::get('/home',[UsersController::class, 'index']);
Route::post('/upload',[UsersController::class, 'upload']);
Route::get('/home/{title}',[UsersController::class, 'show'])->middleware();

Route::resource('/category',CategoryController::class);
Route::resource('/note', NoteController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');