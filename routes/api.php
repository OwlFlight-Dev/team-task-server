<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::group(['prefix' => '/tasks'], function () {
  Route::post('/', [TaskController::class,'create'])->name('create-task');
  Route::get('/', [TaskController::class, 'list'])->name('list-tasks');
  Route::delete('/{id}', [TaskController::class, 'delete'])->name('delete-task');
  Route::put('/status/{id}', [TaskController::class, 'updateTaskStatus'])->name('update-task-status');
  // Route::put('/{id}', [TaskController::class, 'updateTask'])->name('update-task');
});