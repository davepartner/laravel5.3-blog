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


Route::group(['middleware'=>'auth'], function(){

Route::get('/', function () {
    return view('frontpage');
});

//notebooks
Route::get('/notebooks', 'NotebooksController@index' );
Route::post('/notebooks/create', 'NotebooksController@postCreateNotebook');
Route::get('/notebooks/edit/{id}', 'NotebooksController@getEditNotebook');
Route::get('/notebooks/view/{id}', 'NotebooksController@getViewNotebook');
Route::put('/notebooks/edit/{id}', 'NotebooksController@putEditNotebook');
Route::get('/notebooks/delete/{id}', 'NotebooksController@getDeleteNotebook');

Route::get('/notes', 'NotesController@index' ); //index
Route::get('/notes/create', 'NotesController@getCreateNote');
Route::post('/notes/create', 'NotesController@postCreateNote');
Route::get('/notes/edit/{id}', 'NotesController@getEditNote'); //edit
Route::post('/notes/edit/{id}', 'NotebooksController@postEditNote');
Route::get('/notes/delete/{id}', 'NotesController@getDeleteNote');


});
Auth::routes();

Route::get('/home', 'HomeController@index');
