<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

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

Route::get('/', function () {
    return view('welcome');
});

//get method
Route::get('/Add',[Admin::class,'create']);
//post method
Route::post('/Add',[Admin::class,'creating']);
//view data
Route::get('/View',[Admin::class,'show']);
//delete
Route::get('/Delete/{id}',[Admin::class,'delete']);
//Edit get
Route::get('/Edit/{id}',[Admin::class,'Edit']);
//Edit Post
Route::post('Edit/Edit/{id}',[Admin::class,'Editing']);



Route::get('/Ameer/Hamza',[Admin::class,'hello']);