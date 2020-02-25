<?php

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

// strona główa
Route::get('/','PostController@index');
// strona dodawania posta
Route::get('/posts/create','PostController@create');
// dodawanie posta
Route::post('/posts/create','PostController@store');
//Pokazywanie konkretnego
Route::get('/posts/{post}','PostController@show');
//usuwanie
Route::get('/posts/delete/{post}','PostController@delete');
//posty użytkownika
Route::get('/posts/user/{id}','PostController@userposts');

//dodawanie komentarza
Route::post('posts/{post}/comments','CommentsController@store');




//ekran rejestracji
Route::get('/register','RegistrationController@register');
//dodawanie uzytkownika
Route::post('/register','RegistrationController@store');


//ekran logowania
Route::get('/login','SessionController@login');
//logowanie
Route::post('/login','SessionController@store');
//wylogowywanie
Route::get('/logout','SessionController@logout');
