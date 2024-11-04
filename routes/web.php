<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);
Route::get('name',function(){
    return response('hello world');
})->name('hello');

Route::get('/', function () {
    return view('welcome');
});
