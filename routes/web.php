<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

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

// task index
Route::get('/', [TasksController::class, 'index']);
// task tasks
Route::get('/tasks', [TasksController::class, 'index']);
// task create
Route::get('tasks/create', [TasksController::class, 'create']);
// task post
Route::post('/tasks', [TasksController::class, 'store']);

