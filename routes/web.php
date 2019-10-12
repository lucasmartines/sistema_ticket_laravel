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
/*modify tickets */
 Route::get('/', 'PagesController@home');
 Route::get("/tickets","TicketsController@index");
 Route::get("/ticket/{slug?}","TicketsController@show");
 Route::get("/ticket/{slug?}/edit","TicketsController@edit");
 Route::post("/ticket/{slug?}/edit","TicketsController@update");
 Route::post("/ticket/{slug?}/delete","TicketsController@destroy");
//modify comments
Route::post('/comment','CommentsController@newComment');
Route::post('/comment/{comment_id?}','CommentsController@destroy');

 Route::get('/about', 'PagesController@about');
 Route::get('/contact', 'PagesController@create');
 Route::post('/contact', 'PagesController@store');


