<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::post('/dashboard', [DashboardController::class, 'login'] );

Route::get('/dashboard', [DashboardController::class, 'dashboard'] );

Route::get('/tickets', [DashboardController::class, 'tickets'] );

Route::get('/knowledgebase', [DashboardController::class, 'knowledgebase'] );

Route::get('/acp', [DashboardController::class, 'acp'] );
