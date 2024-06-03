<?php

use App\Http\Controllers\AddTrain;
use App\Http\Controllers\NewRegisterController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});
Route::get('/chekAdmin', function () {
    return view('checkAdmin');
});

Route::get('/adminPanal', function () {
    return view('adminPanal');
})->name('adminPanal');

Route::get('/ErrorAdmin', function () {
    return view('ErrorAdmin');
});

Route::get('/question', function () {
    return view('question');
});
Route::get('/traning', function () {
    return view('traning');
});

Route::post('/goAdmin',[NewRegisterController::class,'check'])->name('check');

Route::post('/store',[NewRegisterController::class,'create'])->name('store');

Route::post('/',[AddTrain::class,'create'])->name('AddTrain');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
