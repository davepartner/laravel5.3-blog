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

Route::get('/', function () {
    return view('frontpage');
});

//notebooks
Route::get('/notebooks', 'NotebooksController@index' );
Route::post('/createNotebook', 'NotebooksController@postCreateNotebook');
Route::get('/notebooks/edit/{id}', 'NotebooksController@getEditNotebook');
Route::get('/notebooks/view/{id}', 'NotebooksController@getViewNotebook');
Route::put('/notebooks/edit/{id}', 'NotebooksController@putEditNotebook');
Route::get('/notebooks/delete/{id}', 'NotebooksController@getDeleteNotebook');

Route::get('/notes', 'NotesController@index' ); //index
Route::get('/createNote', 'NotesController@getCreateNote');
Route::post('/createNote', 'NotesController@postCreateNote');
Route::get('/editNote', 'NotesController@getEditNote'); //edit
Route::post('/editNote', 'NotebooksController@postEditNote');
Route::delete('/deleteNote', 'NotesController@deleteNote'); //delete

Auth::routes();

Route::get('/home', 'HomeController@index');
