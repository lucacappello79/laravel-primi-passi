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

Route::get('/home', function () {


    $data = [
        "greetings" => "Hello, ",
        "planet" => "World!"
    ];

    return view('home', $data);
});

Route::get('/page2', function () {


    $data = [
        "greetings" => " Привет, ",
        "planet" => "мир!"
    ];

    return view('page2', $data);
});


Route::get('/page3', function () {


    $data = [
        "greetings" => " 你好, ",
        "planet" => " 世界！"
    ];

    return view('page3', $data);
});

Route::get('/page4', function () {


    $data = [
        "greetings" => "Halo, ",
        "planet" => "dunia!"
    ];

    return view('page4', $data);
});

Route::get('/page5', function () {


    $data = [
        "greetings" => "Olá, ",
        "planet" => "mundo!"
    ];

    return view('page5', $data);
});
