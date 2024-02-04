<?php

use App\Http\Controllers\ManagerController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// routes/web.php

Route::post('/store-project',[App\Http\Controllers\ManagerController::class,'store'])->name('store-project');
Route::get('/create-project',[App\Http\Controllers\ManagerController::class,'create'])->name('create-project');
Route::get('/all-projects',[App\Http\Controllers\ManagerController::class,'index'])->name('all-projects');

//user management
Route::get('/user-list',[App\Http\Controllers\ManagerController::class,'userList'])->name('user-list');
Route::get('/create-user',[App\Http\Controllers\ManagerController::class,'createUser'])->name('create-user');
Route::post('/store-user',[App\Http\Controllers\ManagerController::class,'storeUser'])->name('store-user');

//Task management
 Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('task-list');
 Route::get('/tasks/create', [App\Http\Controllers\TaskController::class, 'create'])->name('task-create');
 Route::post('/tasks/store', [App\Http\Controllers\TaskController::class, 'store'])->name('task-store');
 Route::get('my-task',[App\Http\Controllers\TaskController::class,'myTask'])->name('my-task');
 Route::put('/tasks/update-status/{id}', [App\Http\Controllers\TaskController::class, 'updateStatus'])->name('status-update');
