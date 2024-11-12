<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// home画面のルーティング定義
Route::get('home', function(){
    return view('home');
});
