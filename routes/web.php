<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('signIn');
});
Route::get('/createPage', function () {
    return view('createPage');
});
