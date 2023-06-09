<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', [TasksController::class, 'index'])->name('tasks.index');
Route::post('/tasks', [TasksController::class, 'create'])->name('tasks.create');
Route::delete('/tasks/{id}', [TasksController::class, 'delete'])->name('tasks.delete');