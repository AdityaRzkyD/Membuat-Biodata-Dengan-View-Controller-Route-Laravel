<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Content;
use App\Http\Controllers\Opsional;

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

Route::get('/Biodata', [Content::class, 'index']);
Route::get('/Opsional', [Opsional::class, 'index']);
