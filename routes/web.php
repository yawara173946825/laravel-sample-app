<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// home画面のルーティング定義
Route::get('home', function(){
    return view('home');
});

// 新規登録ページ
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register');

// 新規登録処理
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'store'])
    ->middleware('guest');
