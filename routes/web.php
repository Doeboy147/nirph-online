<?php

use Illuminate\Support\Facades\Route;

Auth::routes();


Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/view-item/{id}', 'HomeController@show')->name('view');
Route::delete('/delete-item/{id}', 'HomeController@destroy')->name('delete');

Route::get('/products', 'Product@index')->name('products');
Route::get('/view-product/{id}', 'Product@show')->name('view.product');
Route::post('/add-product', 'Product@save')->name('add.product');
Route::post('/update-product/{id}', 'Product@updateProduct')->name('update.product');
Route::delete('/delete-product/{id}', 'Product@destroy')->name('delete.product');
