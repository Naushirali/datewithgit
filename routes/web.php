<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authmanager;




Route::get('/', [Authmanager::class,'firstpage'])->name('firstpage')->middleware(['user']);



Route::get('/login', [Authmanager::class,'login'])->name('login')->middleware(['user']);
Route::post('/login', [Authmanager::class,'loginpost'])->name('login.post');
Route::get('/registration', [Authmanager::class,'registration'])->name('registration')->middleware(['user']);
Route::post('/registration', [Authmanager::class,'registrationpost'])->name('registration.post');





Route::get('/testing', function () { return view('testing');});


Route::get('/welcome', [Authmanager::class, 'welcome'])->name('welcome')->middleware(['guest']);

Route::get('/makearent', [Authmanager::class, 'makearent'])->name('makearent')->middleware(['login']);
Route::post('/makearent', [Authmanager::class, 'addarent'])->name('makearent')->middleware(['login']);



















Route::get('/logout', [Authmanager::class,'logout'])->name('logout');



