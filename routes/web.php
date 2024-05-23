<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\TaskController;

Route::resource('tasks', TaskController::class);

use App\Http\Controllers\TodoListController;
Route::get('/list', [TodoListController::class, 'index']);