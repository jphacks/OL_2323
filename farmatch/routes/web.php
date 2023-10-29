<?php

use Illuminate\Support\Facades\Route;

use App\Models\Controllers\FarmerController;
use \Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\SeekerController;

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



Route::get('/farmer', [\App\Http\Controllers\FarmerController::class, 'index']);

Route::get('/seeker', [SeekerController::class, 'index']);

Route::get('/seeker/{id}', [SeekerController::class, 'show'])->name('seekerindex.show');

Route::get('/users/{user_id}', [DetailController::class, 'show_detail']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
