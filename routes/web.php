<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('', [HomeController::class, 'index'])->name('home.index');
Route::post('demo', function () {
    echo '<h1>Đây là phương thức GET</h1>';
    echo '<h2>Link: '.url('demo').'</h2>';
});
Route::get('demo', function () {
    return view('demo');
});
