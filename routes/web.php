<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    $people = ['Jim','Bean','Jack','Daniel'];
    return view('welcome',compact('people'));
});
Route::get('/about', function () {
    return view('pages.about');// resources/views/pages/about.blade.php
});
