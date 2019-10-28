<?php
Route::get('/','PagesController@index');
// Route::get('/{name}','PagesController@page');

Route::get('/admin/pages/create','PagesController@create');
Route::post('/admin/pagesaction','PagesController@storePage');

Route::get('/admin','PagesController@index');
Route::get('/admin/{name}','PagesController@page');
Route::get('/admin/{name}/sections','SectionsController@index');
Route::get('/admin/{name}/sections/create','SectionsController@create');
Route::post('/admin/{name}/sectionsaction','SectionsController@storeSection');