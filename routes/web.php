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

Route::get('/tasks', function () {

	$tasks = DB::table('tasks')->latest()->get();

   	return view('task.index',compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {

	$task = DB::table('tasks')->find($id);

   	return view("task.show",compact('task'));
});


Route::get('/about',function() {
	return view('about');
});
