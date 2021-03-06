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


Route::get('/',[
    'uses' =>'TodosController@index'
]);

Route::POST('/',[
    'uses' =>'TodosController@add',
    'as' => 'todos'
]);

Route::get('/todo/delete/{id}',[
    'uses' => "TodosController@delete",
    'as' =>  'todo.delete'
]);

Route::get('/todo/mark/{id}',[
    'uses' => "TodosController@complete",
    'as' =>  'todo.mark'
]);

Route::get('/todo/edit/{id}',[
    'uses' => "TodosController@edit",
    'as' =>  'todo.edit'
]);

Route::POST('/todo/edit/{id}',[
    'uses' => "TodosController@update",
]);


