<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

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
    return view('welcome');
})->name('index');

Route::view('calendar', 'calendar-demo')->name('calendar');
Route::get('notes', 'NotesController@getAll')->name('notes.index');
Route::get('notes/find/{id}', 'NotesController@find')->name('notes.find');
Route::view('notes/add', 'create')->name('notes.add');
Route::post('notes/add/save', 'NotesController@create')->name('notes.add.save');
Route::put('notes/update/{id}', 'NotesController@update')->name('notes.update');
Route::get('notes/delete/{id}', 'NotesController@delete')->name('notes.delete');
