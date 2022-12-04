<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/all.contact',[aboutController::class,'Contact'])->name('all.contact');
Route::get('/insert-bata',[aboutController::class,'Insert']);
Route::post('/data',[aboutController::class,'Added']);
Route::get('/edit-contact/{id}',[aboutController::class,'Edit']);
Route::post('/update/{id}',[aboutController::class,'Update']);
Route::get('/delete/{id}',[aboutController::class,'Delete']);
Route::get('/view/{id}',[aboutController::class,'View']);
