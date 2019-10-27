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
Route::get('/{page}', function () {
    use Storage;
    Storage::put('file.txt', 'Your name');
    return view(page);
});