<?php

use App\Http\Controllers\ScrumTableController;
use App\Http\Controllers\TaskController;
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

Route::get('/', function () {
    return view('welcome');
});




Route::get('/table/{id}', [ScrumTableController::class, "getTableByID"]);
Route::get('/tables/{id}', [ScrumTableController::class, "getTablesByProjectId"]);
Route::post('/new-table', [ScrumTableController::class, "saveNewTable"])->middleware("cors");



Route::get('/new/{id}', [TaskController::class, "getNewTasksByTableId"]);
Route::get('/finished/{id}', [TaskController::class, "getFinishedTasksByTableId"]);
Route::get('/in progress/{id}', [TaskController::class, "getInProgressTasksByTableId"]);
