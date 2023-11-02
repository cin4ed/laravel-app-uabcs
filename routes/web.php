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

Route::get('/sum/{a}/{b}', function(int $a, int $b) {
    return "{$a} + {$b} = " . ($a + $b);
})->whereNumber(['a', 'b']);

Route::get('/sub/{a}/{b}', function(int $a, int $b) {
    return "{$a} - {$b} = " . ($a - $b);
})->whereNumber(['a', 'b']);

Route::get('/mul/{a}/{b}', function(int $a, int $b) {
    return "{$a} * {$b} = " . ($a * $b);
})->whereNumber(['a', 'b']);

Route::get('/div/{a}/{b}', function(int $a, int $b) {
    return "{$a} / {$b} = " . ($a / $b);
})->whereNumber(['a', 'b']);

Route::get('/hello/{name}/{lastname}', function(string $name, string $lastname) {
    return "Hello {$name} {$lastname}!";
})->whereAlpha(['name', 'lastname']);

Route::get('/greeting/{name}/{lastname?}', function(string $name, ?string $lastname = '') {
    return view('greeting', ['name' => $name, 'lastname' => $lastname]);
})->whereAlpha(['name', 'lastname']);
