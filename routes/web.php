<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
// Route::get('/dashboard', [OmodController::class, 'dashboard']);

Route::get('/', [MainController::class, 'login']);
Route::get('/tasks', [MainController::class, 'userDashboard'] );
Route::get('/admin', function() {
    return view('todo-admin');
});
