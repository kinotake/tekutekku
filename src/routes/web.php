<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WolkController;
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
    return view('home');
});

Route::post('/keyword', [WolkController::class, 'postKeyword']);

Route::get('/result', function () {
    return view('result');
});

Route::get('/area', function () {
    return view('area');
});

Route::get('/header', function () {
    return view('header');
});

Route::get('purpose', function () {
    return view('purpose');
});