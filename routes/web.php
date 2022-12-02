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
    return "Home Page";
});

Route::middleware("secure")->get("/secure-token", function () {
    return "Nice! You Have Token To Access";
});

Route::get('/error', function() {
    return "ERROR!";
});
