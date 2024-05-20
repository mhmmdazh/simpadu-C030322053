<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('pages.app.dashboard-simpadu',['type_menu'=>'']);

});


Route::get('/login', function () {
    //return view('welcome');
    //return view('pages.auth.auth-login', ['type_menu' =>'']);
    return view('pages.auth.auth-login ');
})->name('login');


Route::get('/register', function (){

    return view('pages.auth.auth-register');
})->name('register');

Route:: get('/forgot', function(){
    return view('pages.auth.auth-forgot-password');
})->name('forgot');

route:: get('/reset', function(){

    return view('pages.auth.auth-reset-password');

})->name('reset');

