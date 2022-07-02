<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutoController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('auto', AutoController::class);

Route::resource('persona', PersonaController::class);

Route::fallback(function () {
   return redirect('/');
});
