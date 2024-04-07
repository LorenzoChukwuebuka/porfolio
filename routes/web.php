<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects', function () {
    return view('project');
});

Route::get('/articles', function () {
    return view('article');
});
Route::get('/{any}', function () {
    return view('admin.admindash');
})->where("any", ".*");