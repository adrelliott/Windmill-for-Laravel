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

Route::get('/', function () { return view('test'); });
Route::get('/index', function () { return view('index'); });
Route::get('/buttons', function () { return view('buttons'); });
Route::get('/cards', function () { return view('cards'); });
Route::get('/charts', function () { return view('charts'); });
Route::get('/forms', function () { return view('forms'); });
Route::get('/modals', function () { return view('modals'); });
Route::get('/tables', function () { return view('tables'); });

Route::get('/404', function () { return view('404'); });
Route::get('/blank', function () { return view('blank'); });
Route::get('/create-account', function () { return view('create-account'); });
Route::get('/forgot-password', function () { return view('forgot-password'); });
Route::get('/forgot-password', function () { return view('forgot-password'); });
Route::get('/login', function () { return view('login'); });
