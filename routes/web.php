<?php
use App\Http\Controllers\TasksController;

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
});

Route::get('tasks/{task}/completed', 'TasksController@complete');

Route::resource('tasks', 'TasksController');

//The above line is a Laravel helper that just does the below out of the box:
// Route::get('tasks', 'TasksController@index');
// Route::post('tasks', 'TasksController@store');
// Route::get('tasks/create', 'TasksController@create');
// Route::get('tasks/{task}', 'TasksController@show');
// Route::get('tasks/{task}', 'TasksController@update');
// Route::get('tasks/{task}', 'TasksController@destroy');
// Route::get('tasks/{task}/edit', 'TasksController@edit');
