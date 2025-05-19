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

Route::get('/', function () {
    return 'Main page';
});

Route ::get('/hello', function () {
    return 'Hello';
});

Route::get('/greet/{name}', function($name){
    return 'Hello ' . $name . '!';
}) ;

Route ::get('/hallo', function(){
    return redirect('/hello');
});
//GEt
//post 
