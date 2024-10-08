<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Auth::routes();


Route::middleware(['auth', 'user-permission:admin'])->group(function () {

  

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

});

  

Route::middleware(['auth', 'user-permission:user'])->group(function () {

  

    Route::get('/user/home', [HomeController::class, 'userHome'])->name('user.home');

});

 