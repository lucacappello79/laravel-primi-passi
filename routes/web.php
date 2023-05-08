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
/*
Route::get('/home', function () {


    $data1 = [
        "greetings" => "Hello, ",
        "planet" => "World!"
    ];

    $data2 = [
        'Hello, world',
        'Привет, мир!',
        '你好, 世界',
        'Halo, dunia',
        'Olá, mundo!'
    ];

    // $data = array_merge($data1, $data2);

    $data = [
        'greetings' => $data1['greetings'],
        'planet' => $data1['planet'],
        'data2' => $data2
    ];

    return view('home', $data);
})->name('home');
*/

Route::get('/home', function () {

    $data1 = [
        "greetings" => "Hello, ",
        "planet" => "World!"
    ];

    $data2 = [
        'Hello, world',
        'Привет, мир!',
        '你好, 世界',
        'Halo, dunia',
        'Olá, mundo!'
    ];

    $links = [
        ['title' => 'Page 2', 'route' => 'page2'],
        ['title' => 'Page 3', 'route' => 'page3'],
        ['title' => 'Page 4', 'route' => 'page4'],
        ['title' => 'Page 5', 'route' => 'page5'],
    ];

    $data = [
        'greetings' => $data1['greetings'],
        'planet' => $data1['planet'],
        'data2' => $data2,
        'links' => $links
    ];

    return view('home', $data);
})->name('home');


Route::get('/page2', function () {

    $greetings = "Привет, ";
    $planet = "мир!";

    return view('page2', compact('greetings', 'planet'));
})->name('page2');


Route::get('/page3', function () {

    $data = [
        "greetings" => " 你好, ",
        "planet" => " 世界！"
    ];

    return view('page3', $data);
})->name('page3');


Route::get('/page4', function () {

    $data = [
        "greetings" => "Halo, ",
        "planet" => "dunia!"
    ];

    return view('page4', $data);
})->name('page4');


Route::get('/page5', function () {

    $data = [
        "greetings" => "Olá, ",
        "planet" => "mundo!"
    ];

    return view('page5', $data);
})->name('page5');
