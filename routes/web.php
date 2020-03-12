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

Route::get('/','WelcomeController@index')->name('home');

// Users
Route::get('/tab_user',"UserController@index" )->name('tab_user');
Route::get('/show_user/{id}', 'UserController@show')->name('show_user');
Route::get('/ajout_user', "UserController@create" )->name('ajout_user');
Route::post('/save_user', 'UserController@store')->name('save_user');
Route::get('/edit_user/{isbn}',"UserController@edit" )->name('edit_user');
Route::post('/update_user/{isbn}',"UserController@update" )->name('update_user');
Route::get('/delete_user/{isbn}', 'UserController@destroy')->name('delete_user');


// Avatar
Route::get('/tab_avatar',"AvatarController@index" )->name('tab_avatar');
Route::get('/show_avatar/{id}', 'AvatarController@show')->name('show_avatar');
Route::get('/ajout_avatar', "AvatarController@create" )->name('ajout_avatar');
Route::post('/save_avatar', 'AvatarController@store')->name('save_avatar');
Route::get('/edit_avatar/{id}',"AvatarController@edit" )->name('edit_avatar');
Route::post('/update_avatar/{id}',"AvatarController@update" )->name('update_avatar');
Route::get('/delete_avatar/{id}', 'AvatarController@destroy')->name('delete_avatar');

// Categorie
Route::get('/tab_categorie',"CategorieController@index" )->name('tab_categorie');
Route::get('/show_categorie/{id}', 'CategorieController@show')->name('show_categorie');
Route::get('/ajout_categorie', "CategorieController@create" )->name('ajout_categorie');
Route::post('/save_categorie', 'CategorieController@store')->name('save_categorie');
Route::get('/edit_categorie/{id}',"CategorieController@edit" )->name('edit_categorie');
Route::post('/update_categorie/{id}',"CategorieController@update" )->name('update_categorie');
Route::get('/delete_categorie/{id}', 'CategorieController@destroy')->name('delete_categorie');


//image

Route::get('/tab_image',"ImageController@index" )->name('tab_image');
Route::get('/show_image/{id}', 'ImageController@show')->name('show_image');
Route::get('/ajout_image', "ImageController@create" )->name('ajout_image');
Route::post('/save_image', 'ImageController@store')->name('save_image');
Route::get('/edit_image/{id}',"ImageController@edit" )->name('edit_image');
Route::post('/update_image/{id}',"ImageController@update" )->name('update_image');
Route::get('/delete_image/{id}', 'ImageController@destroy')->name('delete_image');