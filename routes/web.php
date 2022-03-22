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

Route::view('/calendar-demo', 'calendar-demo')->name('calendar');
Route::get('journal', 'JournalProject\JournalPageController@getAll')->name('journal.index');
Route::view('journal/add', 'create')->name('journal.add');
Route::post('journal/add/save', 'JournalProject\JournalPageController@create')->name('journal.add.save');

