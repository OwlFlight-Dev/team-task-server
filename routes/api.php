<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::group(['prefix' => '/tasks'], function () {
  Route::post('/', [TaskController::class,'create'])->name('create-task');
  Route::post('/search', [TaskController::class, 'searchTasks'])->name('search-tasks');
  // Route::get('/', [TaskController::class, 'list'])->name('list-tasks'); // search-task will list all by default when no filters are passed
  Route::delete('/{id}', [TaskController::class, 'delete'])->name('delete-task');
  Route::put('/status/{id}', [TaskController::class, 'updateTaskStatus'])->name('update-task-status');
  Route::put('/{id}', [TaskController::class, 'updateTask'])->name('update-task');
});