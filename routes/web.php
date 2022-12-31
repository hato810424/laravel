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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/temperate', function () {
    return view('temperate');
});

Route::get('/react', function () {
    return view('react');
});
Route::prefix('pjax')->group(function () {
    Route::redirect('/', '/pjax/a');
    Route::get('/a', function () {
        return view('pjax.a');
    });
    Route::get('/b', function () {
        return view('pjax.b');
    });
});